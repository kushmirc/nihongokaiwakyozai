<?php echo $update_message; ?>

<form action="" method="post">

<!--wrap-->
<div class="wrap">
<div id="icon-themes" class="icon32"><br /></div>
<h2>Furikake</h2>

<!--postbox-->
<div class="postbox" style="margin-top: 15px;">
<h3 style="padding: 5px 10px;">Furikake</h3>

<!--inside-->
<div class="inside">
<input type="hidden" name="is_edit" value="Y" />

<!--yahoo_app_id-->
<h4><label for="yahoo_app_id">Yahoo! JAPAN Application ID</label></h4>
<p><?php echo __('Get <code>Yahoo! Application ID (Server Side (Yahoo! ID v2))</code> and fill it below. Must.', 'furikake') ?></p>
<input type="text" name="yahoo_app_id" id="yahoo_app_id" size="60" value="<?php echo esc_html($yahoo_app_id) ?>" />

<!--cache-->
<h4><label for="cache"><?php echo __('cache', 'furikake') ?></label></h4>
<p><?php echo __('Please enter the number of minutes. It does not cache to zero.', 'furikake') ?></p>
<input type="text" name="cache" id="cache" size="5" value="<?php echo intval ($cache) ?>" />

<!--mode-->
<h4><label for="mode"><?php echo __('Set of phonetic', 'furikake') ?></label></h4>
<p><?php echo __('If you always add phonetic, please choose to "always add phonetic". If you add phonetic in the operation of a user, please select "control".', 'furikake') ?></p>
<select name="mode">
	<option value="0"<?php if($mode == 0){ ?> selected="selected"<?php } ?>><?php echo __('control by cookie', 'furikake') ?></option>
	<option value="1"<?php if($mode == 1){ ?> selected="selected"<?php } ?>><?php echo __('always add phonetic', 'furikake') ?></option>
	<option value="2"<?php if($mode == 2){ ?> selected="selected"<?php } ?>><?php echo __('use ob_filter() and control by cookie', 'furikake') ?></option>
	<option value="3"<?php if($mode == 3){ ?> selected="selected"<?php } ?>><?php echo __('use ob_filter() and always add phonetic', 'furikake') ?></option>
</select>

<!--grade-->
<h4><label for="grade"><?php echo __('grade', 'furikake') ?></label></h4>
<p><?php echo __('Set grade', 'furikake') ?></p>
<select name="grade">
<?php for ($n = 1; $n <= 8; $n++): ?>
	<option value="<?php echo $n ?>"<?php if($grade == $n){ ?> selected="selected"<?php } ?>><?php echo __('grade '.$n, 'furikake') ?></option>
<?php endfor; ?>
</select>

<!--dictionary-->
<h4><label for="dictionary"><?php echo __('dictionary', 'furikake') ?></label></h4>
<p><?php echo __('put the set of word to each line like this: <code>word:pronounce</code>', 'furikake') ?></p>
<textarea name="dictionary" id="dictionary" cols="35" rows="7"><?php echo esc_html($dictionary) ?></textarea>

<?php wp_nonce_field('furikake_setting', 'furikake_nonce'); ?>

<p><input class="button-primary" type="submit" value="<?php _e('Submit') ?>" /></p>

</div>
<!--/inside-->

</div>
<!--/postbox-->


<!--postbox-->
<div class="postbox" style="margin-top: 15px;">
<h3 style="padding: 5px 10px;"><?php echo __('ussage', 'furikake') ?></h3>

<!--inside-->
<div class="inside">

<h4><?php echo __('apply phonetic', 'furikake') ?></h4>

<?php echo __('<p>to the point where you add phonetic, please apply the short code. </p><p><code>[furikake grade=1] phonetic [/furikake] </code></p><p>grade is the grade of Japanese school. 0: all. including the hiragana. 1-6: is for Japanese elementary school. 7: for junior high school students. 8: at only difficult Chinese characters. If you not specified, it is set as the third grade for. </p>', 'furikake') ?>

<h4><?php echo __('apply phonetic by template', 'furikake') ?></h4>
<p><?php echo __('use <code>do_shortcode()</code>.', 'furikake') ?></p>
<pre style="background-color: #fff;border: 1px #aaa solid;padding: 10px; width: 90%; overflow: auto;">
&lt;?php
	$content = apply_filters('the_content', get_the_content());
	echo do_shortcode('[furikake]' . $content . '[/furikake]');
?&gt;
</pre>

<h4><?php echo __('control of phonetic', 'furikake') ?></h4>
<p><?php echo __('see code below.', 'furikake') ?></p>

<pre style="background-color: #fff;border: 1px #aaa solid;padding: 10px; width: 90%; overflow: auto;">
&lt;?php
if (is_front_page() || is_home())
{
	$furikake_url =  home_url('/');
}
else if(is_archive())
{
	$furikake_url = get_post_type_archive_link($post_type);
}
else
{
	$furikake_url =  get_permalink();
}
$furikake_url = urlencode($furikake_url);
if(@$_COOKIE['furikake'] == 'on'):
	echo '&lt;a href="'.home_url().'?furikake=off&amp;amp;furikake-redirect='.$furikake_url.'"&gt;<?php echo __('remove phonetic', 'furikake') ?>&lt;/a&gt;';
else:
	echo '&lt;a href="'.home_url().'?furikake=on&amp;amp;furikake-redirect='.$furikake_url.'"&gt;<?php echo __('add phonetic', 'furikake') ?>&lt;/a&gt;';
endif;
?&gt;
</pre>

</div>
<!--/inside-->

</div>
<!--/postbox-->

<!--postbox-->
<div class="postbox" style="margin-top: 15px;">
<h3 style="padding: 5px 10px;"><?php echo __('Notes and Acknowledgements', 'furikake') ?></h3>
<!--inside-->
<div class="inside">
<h4><?php echo __('Notes', 'furikake') ?></h4>
<p><?php echo __('This plug-in takes advantage of the <a href="http://developer.yahoo.co.jp/webapi/jlp/furigana/v1/furigana.html">ruby API</a> that Yahoo! Japan Developer Network was developed. please follow Yahoo! Japan is defined in the "<a href="http://docs.yahoo.co.jp/docs/info/terms/chapter1.html#cf5th">rules for software (Guidelines)</a>" to. In addition, as a plug-in, from the standpoint of compliance with the "<a href="http://developer.yahoo.co.jp/attribution/#guideline">credit labeling guidelines</a>" and "<a href="http://developer.yahoo.co.jp/attribution/#placement">credit placement rules</a>", you have to specifications to display the logo of Yahoo! Japan to where it apply phonetic. However, when using this plug-in in multiple places within the same page, it has been fully display the logo of a lot less, which use more than one on the same page in the credits of "plural image format is not showed in same page", when used at a plurality of locations, please give an indication of the <code>no_yahoologo=1</code> to short code (However, at least, please be displayed One). Others, for the <a href="https://www.yahoo-help.jp/app/answers/detail/p/537/a_id/43405">terms of commercial use</a>, please follow the policy established by Yahoo! Japan.', 'furikake') ?></p>

<h4><?php echo __('Acknowledgements', 'furikake') ?></h4>
<p><?php echo __('Thank the people involved in WordPress, and who have developed a ruby API, to all of Yahoo! Japan Developer Network.', 'furikake') ?></p>

</div>
<!--/inside-->

</div>
<!--/postbox-->

</div>
<!--/wrap-->

</form>
