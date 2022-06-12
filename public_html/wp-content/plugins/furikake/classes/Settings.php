<?php
/**
 * Furikake\settings
 *
 * @package    part of Furigana
 * @author     Jidaikobo Inc.
 * @license    The MIT License (MIT)
 * @copyright  Jidaikobo Inc.
 * @link       http://www.jidaikobo.com
 */
namespace Furikake;

class settings
{

	/**
	 * settings
	 *
	 * @return Void
	 */
	public static function settings()
	{
		if ( ! current_user_can('edit_others_posts')) exit();
		if ($_POST)
		{
			if (
				! isset($_POST['furikake_nonce']) ||
				! wp_verify_nonce($_POST['furikake_nonce'], 'furikake_setting')
			)
			{
				print 'nonce check failed.';
				exit;
			}
		}

		//vals
		$yahoo_app_id = get_option('furikake_yahoo_app_id') ? get_option('furikake_yahoo_app_id') : '';
		$mode = get_option('furikake_mode') ? get_option('furikake_mode') : 0;
		$grade = get_option('furikake_grade') ? get_option('furikake_grade') : 3;
		$cache = get_option('furikake_cache') ? get_option('furikake_cache') : 3600;
		$dictionary = get_option('furikake_dictionary') ? get_option('furikake_dictionary') : '';

		//edit
		$update_message = '';
		if (isset($_POST['is_edit']) && $_POST['is_edit'] == 'Y')
		{
			//update_option and set value for form
			foreach($_POST as $key => $val)
			{
				if (in_array($key, array('yahoo_app_id', 'mode', 'cache', 'grade', 'dictionary')))
				{
					$val = maybe_serialize($val);
					update_option('furikake_'.$key, $val);
					${$key} = $val;
				}
			}

			//message
			$update_message = '<div class="updated"><p><strong>'.__('updated', 'furikake').'</strong></p></div>';
		}

		//form
		require(plugin_dir_path(dirname(__FILE__)).'templates/settings.php');
	}
}
