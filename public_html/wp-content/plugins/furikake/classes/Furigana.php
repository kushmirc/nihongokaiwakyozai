<?php
/**
 * Furikake\Furigana
 *
 * @package    part of Furikake
 * @author     Jidaikobo Inc.
 * @license    The MIT License (MIT)
 * @copyright  Jidaikobo Inc.
 * @link       http://www.jidaikobo.com
 */
namespace Furikake;

class Furigana
{
	protected static $replaces = array();

	/**
	 * setCookies
	 *
	 * @return Void
	 */
	public static function setCookies()
	{
		// do nothing
		$furikake_redirect = filter_input(INPUT_GET, "furikake-redirect", FILTER_VALIDATE_URL);
		if ( ! $furikake_redirect) return;

		// is_furigana
		$furikake = filter_input(INPUT_GET, "furikake");
		if ($furikake)
		{
			$is_furigana = $furikake == 'off' ? 'off' : 'on';

			// setcookie
			setcookie(
				"furikake",
				$is_furigana,
				time() + 86400 * 30,
				COOKIEPATH,
				COOKIE_DOMAIN
			);
		}

		// redirect
		require_once (ABSPATH.WPINC.'/pluggable.php');
		wp_safe_redirect(esc_url(urldecode($furikake_redirect)));
		exit();
	}

	/**
	 * log
	 *
	 * @param  String|Array $content
	 * @return Void
	 */
	private static function log($content = '')
	{
		if (empty($content)) return;
		$content = is_array($content) ? var_export($content, 1) : $content;
		$content.= "\n\n".str_repeat('=', 100)."\n\n";

		$logdir = WP_PLUGIN_DIR.'/furikake/logs/';
		file_put_contents($logdir.date('Ymghis').'.txt', $content, FILE_APPEND);

		// garbage collector
		foreach (glob($logdir.'*') as $file)
		{
			$file = basename($file);
			if (substr($file, 0, 1) != '.')
			{
				if (filectime($logdir.'/'.$file) <= time() - 86400 * 2)
				{
					unlink($logdir.'/'.$file);
				}
			}
		}
	}

	/**
	 * furigana
	 * use by shortcode and script
	 *
	 * @param  Array $attrs
	 * @param  String $content
	 * @return String
	 */
	public static function furigana($attrs = array(), $content = '')
	{
		// do nothing
		if (empty($content)) return;

		// vals
		$mode         = get_option('furikake_mode') ? get_option('furikake_mode') : 0;
		$no_cache     = isset($attrs['no_cache']) ? $attrs['no_cache'] : FALSE;
		$no_yahoologo = isset($attrs['no_yahoologo']) ? $attrs['no_yahoologo'] : FALSE;
		$string       = $content;

		// furigana mode on
		$is_furigana = 'on';
		if (@$_COOKIE['furikake'] == 'off' || ! isset($_COOKIE['furikake']))
		{
			$is_furigana = 'off';
		}

		// force on
		$is_furigana = $mode > 0 ? 'on' : $is_furigana ;

		// furigana
		if ($is_furigana == 'on')
		{
			// $string = file_get_contents(WP_PLUGIN_DIR.'/furikake/test.html');

			// hashNonFuriganaArea
			$string = self::hashNonFuriganaArea($string);

			// Yahoo! allow untile 100KB (about 51,200B)
			$tmp = '';

			$n = 1;
			foreach (self::splitString($string, 10000) as $str)
			{
				$n++;
				$tmptmp = self::applyFurigana($attrs, $str);

				// in case of failed to fetch furigana from Yahoo!
				if ( ! $tmptmp) self::log($str);

				$tmp.= $tmptmp ?: $str;
			}
			$string = $tmp;

			// recoverNonFuriganaArea
			$string = self::recoverNonFuriganaArea($string);

			if ( ! $string)
			{
				return '<p><strong>'.__('failed to add phonetic', 'furikake').'</strong></p>'.$content;
			}
		}

		// Yahoo! JAPAN Web Services Attribution Snippet
		if ( ! $no_yahoologo && $is_furigana == 'on')
		{
			$yahoo = '<p id="furikake_yahoo_logo"><!-- Begin Yahoo! JAPAN Web Services Attribution Snippet -->
<a href="https://developer.yahoo.co.jp/about">
<img src="https://s.yimg.jp/images/yjdn/common/yjdn_attbtn1_125_17.gif" title="Web Services by Yahoo! JAPAN" alt="Web Services by Yahoo! JAPAN" width="125" height="17" border="0" style="margin:15px 15px 15px 15px"></a>
<!-- End Yahoo! JAPAN Web Services Attribution Snippet --></p>
';

			if (strpos($string, '</body>') !== false)
			{
				$string = str_replace('</body>', $yahoo.'</body>', $string);
			}
			else
			{
				$string.= $yahoo;
			}
		}

		return $string;
	}

	/**
	 * applyFurigana
	 *
	 * @param  Array $attrs
	 * @param  String $string
	 * @return String|Bool
	 */
	private static function applyFurigana($attrs, $string)
	{
		// check cache
		$transient = self::setTransientName($string);
		$cache = get_transient($transient);
		if ($cache)
		{
			self::log('cache: '. $transient);
			return $cache;
		}
		self::log('no-cache: '. $transient);

		// vals
		$yahoo_app_id = get_option('furikake_yahoo_app_id') ? get_option('furikake_yahoo_app_id') : '';
		$dictionary = get_option('furikake_dictionary') ? get_option('furikake_dictionary') : '';
		$grade = @$attrs['grade'] ? intval($attrs['grade']) : get_option('furikake_grade');
		$grade = $grade < 0 || $grade >= 8 ? 8 : $grade;
		$retval = $string;

		if (empty($yahoo_app_id)) return $retval;

		// read dictionary
		$dictionary_lines = explode("\n", $dictionary);
		$dics = array();
		foreach ($dictionary_lines as $k => $dictionary_line)
		{
			if (strpos($dictionary_line, ':') === false) continue;
			list($word, $ruby) = explode(':', $dictionary_line);
			$dics[$k]['word'] = $word;
			$dics[$k]['ruby'] = $ruby;
			$dics[$k]['seq'] = mb_strlen($word);
		}
		$seq = array();
		foreach ($dics as $key => $row)
		{
			$seq[$key] = $row['seq'];
		}
		array_multisort($seq, SORT_DESC, $dics);
		foreach ($dics as $v)
		{
			$string = str_replace($v['word'], self::modifyWord($v['word']), $string);
		}

		// furigana
		$separator = ini_get('arg_separator.output');
		ini_set('arg_separator.output', '&');
		$url = 'https://jlp.yahooapis.jp/FuriganaService/V1/furigana';
		$data = array(
			'appid'    => $yahoo_app_id,
			'sentence' => $string,
			'grade'    => $grade,
		);
		$options = array('http' => array(
				'method'  => 'POST',
				'content' => http_build_query($data),
			));
		ini_set('arg_separator.output', $separator);

		// fetch from Yahoo!
		if ($contents = @file_get_contents($url, false, stream_context_create($options)))
		{
			$xmls = simplexml_load_string($contents);

			$retval = '';
			foreach ($xmls->Result->WordList->Word as $xml)
			{
				if (isset($xml->Furigana))
				{
					$retval.= '<ruby><rb>'.$xml->Surface.'</rb><rp> (</rp><rt>'.$xml->Furigana.'</rt><rp>) </rp></ruby>';
				}
				else
				{
					$retval.= $xml->Surface;
				}
			}

			// apply dictionary
			foreach ($dictionary_lines as $dictionary_line)
			{
				if (strpos($dictionary_line, ':') === false) continue;
				list($word, $ruby) = explode(':', $dictionary_line);
				$replace = '<ruby><rb>'.$word.'</rb><rp> (</rp><rt>'.$ruby.'</rt><rp>) </rp></ruby>';
				$retval = str_replace(self::modifyWord($word), $replace, $retval);
			}

			// exclude
			$patterns = array();
			$patterns['input'] = '/<input(.*?)value="(.*?)"(.*?)>/is';
			$patterns['textarea'] = '/<textarea(.*?)>(.*?)<\/textarea>/is';
			$patterns['alt'] = '/alt="(.*?)"/is';
			$patterns['src'] = '/src="(.*?)"/is';
			$patterns['title'] = '/title="(.*?)"/is';
			$patterns['href'] = '/href="(.*?)"/is';
			$patterns['placeholder'] = '/placeholder="(.*?)"/is';

			foreach ($patterns as $key => $pattern)
			{
				preg_match_all($pattern, $retval, $ms);
				foreach ($ms[0] as $k => $v)
				{
					switch($key)
					{
						case 'input':
							// submit value remains ruby
							if (strpos($ms[0][$k], 'submit') !== false)
							{
								$value = strip_tags($ms[2][$k]);
							}
							else
							{
								// value which was posted is unruby
								$value = self::removeRuby($ms[2][$k]);
							}
							$retval = str_replace($ms[0][$k], '<input'.$ms[1][$k].'value="'.$value.'"'.$ms[3][$k].'>', $retval);
							break;
						case 'textarea':
							$value = self::removeRuby($ms[2][$k]);
							$retval = str_replace($ms[0][$k], '<textarea'.$ms[1][$k].'>'.$value.'</textarea>', $retval);
							break;
						case 'href':
							$value = self::removeRuby($ms[1][$k]);
							$retval = str_replace($ms[0][$k], $key.'="'.$value.'"', $retval);
							break;
						case 'alt':
						case 'title':
						case 'placeholder':
							$value = strip_tags($ms[1][$k]);
							$retval = str_replace($ms[0][$k], $key.'="'.$value.'"', $retval);
							break;
					}
				}
			}
		}

		// set transient (cache)
		if ($contents)
		{
			$cache_minute = get_option('furikake_cache') ? intval(get_option('furikake_cache')) : 3600;
			//$cache_minute = 0;
			set_transient($transient, $retval, $cache_minute * 60);
		}

		return $contents ? $retval : false;
	}

	/**
	 * hashNonFuriganaArea
	 * headなどを対象としないことと、Yahoo!のAPIと相性の悪い文字列を取り除く
	 * あわせてなるべく一定の文字列にしておくことで、同じ文字列に対するキャッシュが
	 * 効くようにする。
	 *
	 * Remove strings that are not targeted to head etc. and strings that are
	 * incompatible with Yahoo! API Together, by keeping it as a constant character
	 * string as possible, caching for the same character string is effective.
	 *
	 * @param  String $str
	 * @return String
	 */
	private static function hashNonFuriganaArea($str)
	{
		// admin area
		$pattern = '/\<div id="wpadminbar"[^\>]*?\>.+$/is';
		preg_match($pattern, $str, $ms);
		if (isset($ms[0]) && $ms[0])
		{
			// keep same str
			$hash = '[furikake_hash_admin_area][/furikake_hash_admin_area]';
			static::$replaces[$hash] = $ms[0];
			$str = str_replace($ms[0], $hash, $str);
		}

		// non hash area
		foreach (array('head', 'script', 'style') as $tag)
		{
			$pattern = '/\<'.$tag.'[^\>]*?\>.*?\<\/'.$tag.'\>/is';
			preg_match_all($pattern, $str, $ms);
			if (isset($ms[0]) && $ms[0])
			{
				foreach ($ms[0] as $v)
				{
					$hash = '[furikake_hash]'.$tag.'-'.sha1($v).'-'.strlen($v).'[/furikake_hash]';
					static::$replaces[$hash] = $v;
					$str = str_replace($v, $hash, $str);
				}
			}
		}

		// anti patterns which are yahoo hates
		$anti_patterns = array('»');
		foreach ($anti_patterns as $v)
		{
			$hash = '[furikake_hash]'.sha1($v).'[/furikake_hash]';
			static::$replaces[$hash] = $v;
			$str = str_replace($v, $hash, $str);
		}

		// korean
		preg_match_all("/[가-힣 ]+/u", $str, $ms);
		if (isset($ms[0]) && ! empty($ms[0]))
		{
			foreach ($ms[0] as $v)
			{
				$hash = '[furikake_hash]'.sha1($v).'[/furikake_hash]';
				static::$replaces[$hash] = $v;
				$str = str_replace($v, $hash, $str);
			}
		}

		return $str;
	}

	/**
	 * recoverNonFuriganaArea
	 *
	 * @param  String $str
	 * @return String
	 */
	private static function recoverNonFuriganaArea($str)
	{
		foreach (static::$replaces as $hash => $v)
		{
			$str = str_replace($hash, $v, $str);
		}

		return $str;
	}

	/**
	 * splitString
	 *
	 * @param  String $str
	 * @return Array
	 * @link http://tricky-code.net/mine/php/mphp02.php
	 */
	private static function splitString($str, $split_len = 1)
	{
		mb_internal_encoding('UTF-8');
		mb_regex_encoding('UTF-8');

		if ($split_len <= 0)
		{
			$split_len = 1;
		}

		$strlen = mb_strlen($str, 'UTF-8');
		$ret    = array();

		for ($i = 0; $i < $strlen; $i += $split_len)
		{
			$ret[ ] = mb_substr($str, $i, $split_len);
		}
		return $ret;
	}

	/**
	 * removeRuby
	 *
	 * @param  String $str
	 * @return String
	 */
	private static function removeRuby($str)
	{
		$pattern = "/<ruby><rb>(.*?)<\/rb><rp> \(<\/rp><rt>.*?<\/rt><rp>\) <\/rp><\/ruby>/";
		$str = preg_replace($pattern, "\\1", $str);
		$pattern = "/&lt;ruby&gt;&lt;rb&gt;(.*?)&lt;\/rb&gt;&lt;rp&gt; \(&lt;\/rp&gt;&lt;rt&gt;.*?&lt;\/rt&gt;&lt;rp&gt;\) &lt;\/rp&gt;&lt;\/ruby&gt;/";
		return preg_replace($pattern, "\\1", $str);
	}

	/**
	 * setTransientName
	 * WordPress transient name's spec is under 45 chars.
	 *
	 * @param  String $string
	 * @return String
	 */
	private static function setTransientName($string)
	{
		$len4transient = strlen($string);
		$len = 44 - strlen($len4transient);
		$transient = substr(md5($string), 0 , $len).'_'.$len4transient;
		return $transient;
	}

	/**
	 * modifyWord
	 *
	 * @param  String $word
	 * @return Void
	 */
	private static function modifyWord($word)
	{
		return '[['.md5($word).'-'.strlen($word).']]' ;
	}

	/**
	 * addLink
	 *
	 * @param  Array $links
	 * @param  String $file
	 * @return Array
	 */
	public static function addLink($links, $file)
	{
		if ($file == 'furikake/furikake.php')
		{
			array_unshift(
				$links,
				'<a href="'.admin_url('admin.php?page='.dirname(dirname(__FILE__)).'/furikake.php').'">'.__('Settings').'</a>'
			);
		}
		return $links;
	}

	/**
	 * bufferStart
	 *
	 * @return Void
	 */
	public static function bufferStart()
	{
		$furikake_mode = get_option('furikake_mode') ? get_option('furikake_mode') : 0 ;
		if ($furikake_mode <= 1) return;
		if (is_admin()) return;

		if (
			($furikake_mode == 2 && isset($_COOKIE['furikake']) && $_COOKIE['furikake'] == 'on') ||
			$furikake_mode == 3
		)
		{
			ob_start('ob_furikake');
		}
		return;
	}

	/**
	 * bufferOut
	 *
	 * @return Void
	 * @link https://stackoverflow.com/questions/772510/wordpress-filter-to-modify-final-html-output
	 */
	public static function bufferOut()
	{
		$furikake_mode = get_option('furikake_mode') ? get_option('furikake_mode') : 0 ;
		if ($furikake_mode <= 1) return;
		if (is_admin()) return;

		if (
			($furikake_mode == 2 && isset($_COOKIE['furikake']) && $_COOKIE['furikake'] == 'on') ||
			$furikake_mode == 3
		)
		{
			$levels = ob_get_level();

			$final = '';
			for ($i = 0; $i < $levels; $i++)
			{
				$final .= ob_get_clean();
			}
			echo $final;
		}
		return;
	}
}
