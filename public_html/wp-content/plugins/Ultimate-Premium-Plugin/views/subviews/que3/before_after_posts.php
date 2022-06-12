<?php
$option8['sfsi_plus_beforeafterposts_horizontal_verical_Alignment'] = (isset($option8['sfsi_plus_beforeafterposts_horizontal_verical_Alignment'])) ? $option8['sfsi_plus_beforeafterposts_horizontal_verical_Alignment'] : "Horizontal";

$option8['sfsi_plus_beforeafterposts_mobile_horizontal_verical_Alignment'] = (isset($option8['sfsi_plus_beforeafterposts_mobile_horizontal_verical_Alignment'])) ? $option8['sfsi_plus_beforeafterposts_mobile_horizontal_verical_Alignment'] : "Horizontal";

$option8['sfsi_plus_mobile_beforeafterposts'] = (isset($option8['sfsi_plus_mobile_beforeafterposts'])) ? $option8['sfsi_plus_mobile_beforeafterposts'] : "no";
if (!isset($option4)) {
    $option4 =  unserialize(get_option('sfsi_premium_section4_options', false));
}
$classForMobileIconsAlignments = ($option8['sfsi_plus_mobile_beforeafterposts'] == "yes" && $option8['sfsi_plus_display_button_type'] == 'normal_button') ? "show" : "hide";
$classForMobileIconsSizeShape = ($option8['sfsi_plus_mobile_size_space_beforeafterposts'] == "yes" && $option8['sfsi_plus_display_button_type'] == 'normal_button') ? "show" : "hide";

$sfsi_plus_responsive_icons_default = array(
    "default_icons" => array(
        "facebook" => array("active" => "yes", "text" => "Share on Facebook", "url" => ""),
        "Twitter" => array("active" => "yes", "text" => "Tweet", "url" => ""),
        "Follow" => array("active" => "yes", "text" => "Follow us", "url" => ""),
        "pinterest" => array("active" => "no", "text" => "Save", "url" => ""),
        "Linkedin" => array("active" => "no", "text" => "Share", "url" => ""),
        // "GooglePlus"=>array("active"=>"no","text"=>"Share","url"=>""),
        "Whatsapp" => array("active" => "no", "text" => "Share", "url" => ""),
        "vk" => array("active" => "no", "text" => "Share", "url" => ""),
        "Odnoklassniki" => array("active" => "no", "text" => "Share", "url" => ""),
        "Telegram" => array("active" => "no", "text" => "Share", "url" => ""),
        "Weibo" => array("active" => "no", "text" => "Share", "url" => ""),
        "QQ2" => array("active" => "no", "text" => "Share", "url" => ""),
        "xing" => array("active" => "no", "text" => "Share", "url" => ""),
    ),
    "custom_icons" => array(),
    "settings" => array(
        "icon_size" => "Medium",
        "icon_width_type" => "Fully responsive",
        "icon_width_size" => 240,
        "edge_type" => "Round",
        "edge_radius" => 5,
        "style" => "Gradient",
        "margin" => 10,
        "text_align" => "Centered",
        "show_count" => "no",
        "responsive_mobile_icons" => "yes",
        "counter_color" => "#aaaaaa",
        "counter_bg_color" => "#fff",
        "share_count_text" => "SHARES"
    )
);
// echo json_encode($option8["sfsi_plus_responsive_icons"]);
$sfsi_premium_responsive_icons = (isset($option8["sfsi_plus_responsive_icons"]) ? $option8["sfsi_plus_responsive_icons"] : $sfsi_plus_responsive_icons_default);


$sfsi_premium_responsive_icons["custom_icons"] = array_values(array_filter($sfsi_premium_responsive_icons["custom_icons"], function ($cus_icon) {
    return $cus_icon["added"] === 'yes';
}));
$sfsi_premium_responsive_icons_custom_count = isset($sfsi_premium_responsive_icons["custom_icons"]) ? count($sfsi_premium_responsive_icons["custom_icons"]) : 0;
// var_dump($sfsi_premium_responsive_icons);
// var_dump($option8["sfsi_plus_responsive_icons"]);

?>
<script type="text/javascript">
    window.sfsi_premium_custom_responsive_icons = '<?php echo json_encode($sfsi_premium_responsive_icons['custom_icons']); ?>';
</script>
<li class="sfsi_plus_place_beforeAfterPosts">

    <div class="radio_section tb_4_ck" onclick="sfsiplus_toggleflotpage(this);"><input name="sfsi_plus_show_item_onposts" <?php echo ($option8['sfsi_plus_show_item_onposts'] == 'yes') ?  'checked="true"' : ''; ?> id="sfsi_plus_show_item_onposts" type="checkbox" value="yes" class="styled" /></div>

    <div class="sfsiplus_right_info">
        <p>
            <span class="sfsiplus_toglepstpgspn">
                <?php _e('Show them before or after posts', SFSI_PLUS_DOMAIN); ?>
            </span>
            <br>
            <?php
            if ($option8['sfsi_plus_show_item_onposts'] != "yes") {
                $style_float = "style='font-size: 15px; display: none;'";
            } else {
                $style_float = "style='font-size: 15px;'";
            }
            ?>
            <label class="sfsiplus_sub-subtitle sfsiplus_toglpstpgsbttl" <?php echo $style_float; ?>>
                <?php _e('Here you have three options:', SFSI_PLUS_DOMAIN); ?>
            </label>
        </p>
        <ul class="sfsiplus_tab_3_icns sfsiplus_shwthmbfraftr" <?php echo ($option8['sfsi_plus_show_item_onposts'] != "yes") ? 'style="display: none";' : ''; ?>>

            <li class="col-1-3 sfsi_premium_original" onclick="sfsiplus_togglbtmsection('sfsiplus_toggleonlystndrshrng', 'sfsiplus_toggledsplyitemslctn, .sfsiplus_toggleonlyrspvshrng', this); sfsi_premium_responsive_icon_hide_responsive_options();" class="clckbltglcls">
                <input name="sfsi_plus_display_button_type" <?php echo ($option8['sfsi_plus_display_button_type'] == 'standard_buttons') ?  'checked="true"' : ''; ?> type="radio" value="standard_buttons" class="styled" />
                <label class="labelhdng4">
                    <?php _e('Original icons', SFSI_PLUS_DOMAIN); ?>
                </label>
            </li>
            <li class="col-1-3" onclick="sfsiplus_togglbtmsection('sfsiplus_toggledsplyitemslctn', 'sfsiplus_toggleonlystndrshrng, .sfsiplus_toggleonlyrspvshrng', this); sfsi_premium_responsive_icon_hide_responsive_options();" class="clckbltglcls">
                <input name="sfsi_plus_display_button_type" <?php echo ($option8['sfsi_plus_display_button_type'] == 'normal_button') ?  'checked="true"' : ''; ?> type="radio" value="normal_button" class="styled" />
                <label class="labelhdng4">
                    <?php _e('Icons I selected above', SFSI_PLUS_DOMAIN); ?>
                </label>
            </li>
            <li class="col-1-3" onclick="sfsiplus_togglbtmsection('sfsiplus_toggleonlyrspvshrng', 'sfsiplus_toggleonlystndrshrng, .sfsiplus_toggledsplyitemslctn', this); sfsi_premium_responsive_icon_show_responsive_options();" class="clckbltglcls">
                <input name="sfsi_plus_display_button_type" <?php echo ($option8['sfsi_plus_display_button_type'] == 'responsive_button') ?  'checked=true' : ''; ?> type="radio" value="responsive_button" class="styled" />
                <label class="labelhdng4">
                    <?php _e('Responsive Icons', SFSI_PLUS_DOMAIN); ?>
                    <img src="<?php echo SFSI_PLUS_PLUGURL; ?>images/new.gif" alt="new">
                </label>
            </li>
            <!-- <li>
                        <hr class="sfsi_premium_deffrentiator_hr" />
                    </li> -->
            <?php if ($option8['sfsi_plus_display_button_type'] == 'standard_buttons') : $display = "display:block";
            else :  $display = "display:none";
            endif; ?>

            <li class="sfsiplus_toggleonlystndrshrng" style="<?php echo $display; ?>">
                <div class="radiodisplaysection">

                    <div class="cstmdisplaysharingtxt cstmdisextrpdng">
                        <p><?php _e('Rectangle icons spell out the «call to action» which increases the chances that visitors do it.', SFSI_PLUS_DOMAIN); ?></p>
                        <p><?php _e('Select the icon you want to show:', SFSI_PLUS_DOMAIN); ?></p>
                    </div>


                    <div class="social_icon_like1 cstmdsplyulwpr">
                        <ul>
                            <li>
                                <div class="radio_section tb_4_ck"><input name="sfsi_plus_rectsub" <?php echo ($option8['sfsi_plus_rectsub'] == 'yes') ?  'checked="true"' : ''; ?> id="sfsi_plus_rectsub" type="checkbox" value="yes" class="styled" /></div>
                                <a href="#" title="Subscribe Follow" class="cstmdsplsub">
                                    <img src="<?php echo SFSI_PLUS_PLUGURL; ?>images/follow_subscribe.png" alt="Subscribe Follow" /><span style="display: none;">18k</span>
                                </a>
                            </li>
                            <li>
                                <div class="radio_section tb_4_ck"><input name="sfsi_plus_rectfb" <?php echo ($option8['sfsi_plus_rectfb'] == 'yes') ?  'checked="true"' : ''; ?> id="sfsi_plus_rectfb" type="checkbox" value="yes" class="styled" /></div>
                                <a href="#" title="Facebook Like" class="cstmdspllke">
                                    <img src="<?php echo SFSI_PLUS_PLUGURL; ?>images/like.jpg" alt="Facebook Like" /><span style="display: none;">18k</span>
                                </a>
                            </li>
                            <li>
                                <div class="radio_section tb_4_ck"><input name="sfsi_plus_rectfbshare" <?php echo ($option8['sfsi_plus_rectfbshare'] == 'yes') ?  'checked="true"' : ''; ?> id="sfsi_plus_rectfbshare" type="checkbox" value="yes" class="styled" /></div>
                                <a href="#" title="Facebook Share" class="cstmdsplfbshare">
                                    <img src="<?php echo SFSI_PLUS_PLUGURL; ?>images/fbshare.png" alt="Facebook Share" /><span style="display: none;">18k</span>
                                </a>
                            </li>
                            <li>
                                <div class="radio_section tb_4_ck"><input name="sfsi_plus_recttwtr" <?php echo ($option8['sfsi_plus_recttwtr'] == 'yes') ?  'checked="true"' : ''; ?> id="sfsi_plus_recttwtr" type="checkbox" value="yes" class="styled" /></div>
                                <a href="#" title="twitter" class="cstmdspltwtr">
                                    <img src="<?php echo SFSI_PLUS_PLUGURL; ?>images/twiiter.png" alt="Twitter like" /><span style="display: none;">18k</span>
                                </a>
                            </li>
                            <li>
                                <div class="radio_section tb_4_ck"><input name="sfsi_plus_rectpinit" <?php echo ($option8['sfsi_plus_rectpinit'] == 'yes') ?  'checked="true"' : ''; ?> id="sfsi_plus_rectpinit" type="checkbox" value="yes" class="styled" /></div>
                                <a href="#" title="Pinit" class="cstmdsplpinit">
                                    <img src="<?php echo SFSI_PLUS_PLUGURL; ?>images/pinit.png" alt="Pinit" /><span style="display: none;">18k</span>
                                </a>
                            </li>
                            <li>
                                <div class="radio_section tb_4_ck"><input name="sfsi_plus_rectlinkedin" <?php echo ($option8['sfsi_plus_rectlinkedin'] == 'yes') ?  'checked="true"' : ''; ?> id="sfsi_plus_rectlinkedin" type="checkbox" value="yes" class="styled" /></div>
                                <a href="#" title="Linkedin" class="cstmdsplggpls">
                                    <img src="<?php echo SFSI_PLUS_PLUGURL; ?>images/linkedin-share.png" alt="Linkedin" /><span style="display: none;">18k</span>
                                </a>
                            </li>
                            <li>
                                <div class="radio_section tb_4_ck"><input name="sfsi_plus_rectreddit" <?php echo ($option8['sfsi_plus_rectreddit'] == 'yes') ?  'checked="true"' : ''; ?> id="sfsi_plus_rectreddit" type="checkbox" value="yes" class="styled" /></div>
                                <a href="#" title="Linkedin" class="cstmdsplggpls">
                                    <img src="<?php echo SFSI_PLUS_PLUGURL; ?>images/reddit-share.jpg" alt="Reddit" style="height: 23px" /><span style="display: none;">18k</span>
                                </a>
                            </li>

                            <li>
                                <div class="radio_section tb_4_ck">
                                    <input name="sfsi_plus_rectshr" <?php echo ($option8['sfsi_plus_rectshr'] == 'yes') ?  'checked="true"' : ''; ?> id="sfsi_plus_rectshr" type="checkbox" value="yes" class="styled" />
                                </div>
                                <a href="#" title="Share" class="cstmdsplshr">
                                    <img src="<?php echo SFSI_PLUS_PLUGURL; ?>images/share1.jpg" alt="Share" />
                                    <span style="display: none;">18k</span>
                                </a>
                                <p style="width:auto;float:left;padding: 0px!important;border:0px !important;">

                                    (<?php _e('may impact loading speed', SFSI_PLUS_DOMAIN); ?>)
                                </p>
                            </li>
                        </ul>
                    </div>

                    <!--<p class="clear">Those are usually all you need: </p>
                            <ul class="usually" style="color:#5a6570">
                                <li>1. Facebook is No.1 in liking, so it’s a must have</li>
                               
                                <li>2. Share-button covers all other platforms for sharing</li>
                            </ul>-->
                    <div class="options sfsi_show_counts">
                        <label>
                            <?php _e('Do you want to display the counts?', SFSI_PLUS_DOMAIN); ?>
                        </label>
                        <div class="field">
                            <select name="sfsi_plus_icons_DisplayCounts" id="sfsi_plus_icons_DisplayCounts" class="styled">
                                <option value="yes" <?php echo ($option8['sfsi_plus_icons_DisplayCounts'] == 'yes') ?  'selected="true"' : ''; ?>>
                                    <?php _e('YES', SFSI_PLUS_DOMAIN); ?>
                                </option>
                                <option value="no" <?php echo ($option8['sfsi_plus_icons_DisplayCounts'] == 'no') ?  'selected="true"' : ''; ?>>
                                    <?php _e('NO', SFSI_PLUS_DOMAIN); ?>
                                </option>
                            </select></div>
                    </div>
                </div>
            </li>

            <?php if ($option8['sfsi_plus_display_button_type'] == 'normal_button') : $adisplay = "display:block";
            else :  $adisplay = "display:none";
            endif; ?>


            <li class="sfsiplus_toggledsplyitemslctn">

                <!-- <div class="row radiodisplaysection sfsi_size_spacing_container" style="<?php echo $adisplay; ?>"> -->
                <div class="row radiodisplaysection sfsi_size_spacing_container" style="<?php echo $adisplay; ?>">

                    <h4><?php _e('Size and spacing of your icons', SFSI_PLUS_DOMAIN); ?></h4>

                    <div class="icons_size">

                        <div class="sfsi_plus_post_icons_size_alignments">

                            <div class="sfsi_plus_post_icons_size_alignments_element">
                                <span><?php _e('Size:', SFSI_PLUS_DOMAIN); ?></span>
                                <input name="sfsi_plus_post_icons_size" value="<?php echo ($option8['sfsi_plus_post_icons_size'] != '') ?  $option8['sfsi_plus_post_icons_size'] : ''; ?>" type="text" />
                                <ins><?php _e('pixels wide and tall', SFSI_PLUS_DOMAIN); ?></ins>
                            </div>

                            <div class="sfsi_plus_post_icons_size_alignments_element">
                                <span class="last"><?php _e('Horizontal spacing between icons:', SFSI_PLUS_DOMAIN); ?></span>
                                <input name="sfsi_plus_post_icons_spacing" type="text" value="<?php echo ($option8['sfsi_plus_post_icons_spacing'] != '') ?  $option8['sfsi_plus_post_icons_spacing'] : ''; ?>" />
                                <ins><?php _e('Pixels', SFSI_PLUS_DOMAIN); ?></ins>
                            </div>

                            <div class="sfsi_plus_post_icons_size_alignments_element">
                                <span class="last"><?php _e('Vertical spacing between icons:', SFSI_PLUS_DOMAIN); ?></span>
                                <input name="sfsi_plus_post_icons_vertical_spacing" type="text" value="<?php echo ($option8['sfsi_plus_post_icons_vertical_spacing'] != '') ?  $option8['sfsi_plus_post_icons_vertical_spacing'] : ''; ?>" />
                                <ins><?php _e('Pixels', SFSI_PLUS_DOMAIN); ?></ins>
                            </div>

                        </div>

                    </div>

                </div>
                <div class="sfsi_plus_mobile_size_space_beforeafterposts" style="<?php echo $adisplay; ?>">
                    <h4>
                        <?php _e('Need different selections for mobile?', SFSI_PLUS_DOMAIN); ?>
                    </h4>
                    <ul class="sfsi_plus_make_icons sfsi_plus_mobile_size_space_beforeafterposts">
                        <li>
                            <input name="sfsi_plus_mobile_size_space_beforeafterposts" <?php echo (isset($option8['sfsi_plus_mobile_size_space_beforeafterposts']) && $option8['sfsi_plus_mobile_size_space_beforeafterposts'] == 'no') ?  'checked="true"' : ''; ?> type="radio" value="no" class="styled" />
                            <span class="sfsi_flicnsoptn3">
                                <?php _e('No', SFSI_PLUS_DOMAIN); ?>
                            </span>
                        </li>
                        <li>
                            <input name="sfsi_plus_mobile_size_space_beforeafterposts" <?php echo (isset($option8['sfsi_plus_mobile_size_space_beforeafterposts']) && $option8['sfsi_plus_mobile_size_space_beforeafterposts'] == 'yes') ?  'checked="true"' : ''; ?> type="radio" value="yes" class="styled" />
                            <span class="sfsi_flicnsoptn3">
                                <?php _e('Yes', SFSI_PLUS_DOMAIN); ?>
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="row sfsi_plus_beforeafterposts_mobile_icons_size_space <?php echo $classForMobileIconsSizeShape; ?>">

                    <div class="icons_size">

                        <div class="sfsi_plus_post_icons_size_alignments">

                            <div class="sfsi_plus_post_icons_size_alignments_element">
                                <span><?php _e('Size:', SFSI_PLUS_DOMAIN); ?></span>
                                <input name="sfsi_plus_post_mobile_icons_size" value="<?php echo (isset($option8['sfsi_plus_post_mobile_icons_size']) && $option8['sfsi_plus_post_mobile_icons_size'] != '') ?  $option8['sfsi_plus_post_mobile_icons_size'] : 40; ?>" type="text" />
                                <ins><?php _e('pixels wide and tall', SFSI_PLUS_DOMAIN); ?></ins>
                            </div>

                            <div class="sfsi_plus_post_icons_size_alignments_element">
                                <span class="last"><?php _e('Horizontal spacing between icons:', SFSI_PLUS_DOMAIN); ?></span>
                                <input name="sfsi_plus_post_mobile_icons_spacing" type="text" value="<?php echo (isset($option8['sfsi_plus_post_mobile_icons_spacing']) && $option8['sfsi_plus_post_mobile_icons_spacing'] != '') ?  $option8['sfsi_plus_post_mobile_icons_spacing'] : 5; ?>" />
                                <ins><?php _e('Pixels', SFSI_PLUS_DOMAIN); ?></ins>
                            </div>

                            <div class="sfsi_plus_post_icons_size_alignments_element">
                                <span class="last"><?php _e('Vertical spacing between icons:', SFSI_PLUS_DOMAIN); ?></span>
                                <input name="sfsi_plus_post_mobile_icons_vertical_spacing" type="text" value="<?php echo (isset($option8['sfsi_plus_post_mobile_icons_vertical_spacing']) && $option8['sfsi_plus_post_mobile_icons_vertical_spacing'] != '') ?  $option8['sfsi_plus_post_mobile_icons_vertical_spacing'] : 5; ?>" />
                                <ins><?php _e('Pixels', SFSI_PLUS_DOMAIN); ?></ins>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="row sfsi_plus_beforeafterposts_icons_alignment" style="<?php echo $adisplay; ?>">

                    <h4 style="padding-top: 0;">
                        <?php _e('Alignments', SFSI_PLUS_DOMAIN); ?>
                    </h4>
                    <div class="icons_size">

                        <ul class="sfsi_plus_new_alignment_option sfsi_premium_alignment">
                            <li>

                                <span class="sfsi_plus_new_alignment_span" style="line-height: 48px;margin-right: 20px;"><?php _e('Show icons', SFSI_PLUS_DOMAIN); ?></span>

                                <div class="field">
                                    <select name="sfsi_plus_beforeafterposts_horizontal_verical_Alignment" id="sfsi_plus_beforeafterposts_horizontal_verical_Alignment" style="padding-right: 23px;">
                                        <option value="Horizontal" <?php echo ($option8['sfsi_plus_beforeafterposts_horizontal_verical_Alignment'] == 'Horizontal') ?  'selected="selected"' : ''; ?>>
                                            <?php _e('Horizontally', SFSI_PLUS_DOMAIN); ?>
                                        </option>
                                        <option value="Vertical" <?php echo ($option8['sfsi_plus_beforeafterposts_horizontal_verical_Alignment'] == 'Vertical') ?  'selected="selected"' : ''; ?>>
                                            <?php _e('Vertically', SFSI_PLUS_DOMAIN); ?>
                                        </option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="sfsi_plus_alignments_mobile_beforeafterposts" style="<?php echo $adisplay; ?>">
                    <h4>
                        <?php _e('Need different selections for mobile?', SFSI_PLUS_DOMAIN); ?>
                    </h4>
                    <ul class="sfsi_plus_make_icons sfsi_plus_mobile_beforeafterposts">
                        <li>
                            <input name="sfsi_plus_mobile_beforeafterposts" <?php echo ($option8['sfsi_plus_mobile_beforeafterposts'] == 'no') ?  'checked="true"' : ''; ?> type="radio" value="no" class="styled" />
                            <span class="sfsi_flicnsoptn3">
                                <?php _e('No', SFSI_PLUS_DOMAIN); ?>
                            </span>
                        </li>
                        <li>
                            <input name="sfsi_plus_mobile_beforeafterposts" <?php echo ($option8['sfsi_plus_mobile_beforeafterposts'] == 'yes') ?  'checked="true"' : ''; ?> type="radio" value="yes" class="styled" />
                            <span class="sfsi_flicnsoptn3">
                                <?php _e('Yes', SFSI_PLUS_DOMAIN); ?>
                            </span>
                        </li>
                    </ul>
                </div>

                <div class="row sfsi_plus_beforeafterposts_mobile_icons_alignment <?php echo $classForMobileIconsAlignments; ?>">
                    <h4 style="padding-top: 0;">
                        <?php _e('Alignments', SFSI_PLUS_DOMAIN); ?>
                    </h4>
                    <div class="icons_size">
                        <ul class="sfsi_plus_new_alignment_option">
                            <li>
                                <span class="sfsi_plus_new_alignment_span" style="line-height: 48px;">
                                    <?php _e('Show icons', SFSI_PLUS_DOMAIN); ?>
                                </span>
                                <div class="field">
                                    <select name="sfsi_plus_beforeafterposts_mobile_horizontal_verical_Alignment" id="sfsi_plus_beforeafterposts_mobile_horizontal_verical_Alignment">
                                        <option value="Horizontal" <?php echo ($option8['sfsi_plus_beforeafterposts_mobile_horizontal_verical_Alignment'] == 'Horizontal') ?  'selected="selected"' : ''; ?>>
                                            <?php _e('Horizontally', SFSI_PLUS_DOMAIN); ?>
                                        </option>
                                        <option value="Vertical" <?php echo ($option8['sfsi_plus_beforeafterposts_mobile_horizontal_verical_Alignment'] == 'Vertical') ?  'selected="selected"' : ''; ?>>
                                            <?php _e('Vertically', SFSI_PLUS_DOMAIN); ?>
                                        </option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="row radiodisplaysection sfsi_size_spacing_container" style="<?php echo $adisplay; ?>;border-left: 0px solid transparent !important;">



                    </div>
                </div>


            </li>

            <?php if ($option8['sfsi_plus_display_button_type'] == 'responsive_button') : $rdisplay = "display:block";
            else :  $rdisplay = "display:none";
            endif; ?>
            <li class="sfsiplus_toggleonlyrspvshrng" style="<?php echo $rdisplay; ?>; padding-bottom: 5px;">
                <p style="width: 80%; margin-bottom: 20px;width:calc( 100% - 102px );font-family: helveticaregular;"><?php _e('These are responsive & independent from the icon you selected elsewhere in the plugin. Preview:', SFSI_PLUS_DOMAIN); ?></p>
                <div class="sfsi_premium_responsive_icon_preview_head" style="width: 80%; margin-left:65px;  width:calc( 100% - 102px );">
                    <div class="sfsi_premium_responsive_icon_preview" style="width:calc( 100% - 50px )">

                        <?php echo sfsi_premium_social_responsive_buttons(null, $option8, true); ?>
                    </div> <!-- end sfsi_premium_responsive_icon_preview -->
                </div>
                <ul>
                    <li class="sfsi_premium_responsive_default_icon_container">
                        <label class="heading-label select-icons">
                            <?php _e('Select Icons', SFSI_PLUS_DOMAIN); ?>
                        </label>
                    </li>
                    <?php foreach ($sfsi_premium_responsive_icons['default_icons'] as $icon => $icon_config) :
                        ?>
                        <?php if ($icon !== "GooglePlus") { ?>
                            <li class="sfsi_premium_responsive_default_icon_container">
                                <div class="radio_section tb_4_ck">
                                    <input name="sfsi_premium_responsive_<?php echo $icon; ?>_display" <?php echo ($icon_config['active'] == 'yes') ?  'checked="true"' : ''; ?> id="sfsi_premium_responsive_<?php echo $icon; ?>_display" type="checkbox" value="yes" class="styled" data-icon="<?php echo $icon; ?>" />
                                </div>
                                <span class="sfsi_premium_icon_container">
                                    <div class="sfsi_premium_responsive_icon_item_container sfsi_premium_responsive_icon_<?php echo strtolower($icon); ?>_container" style="word-break:break-all;padding-left:0">
                                        <div style="display: inline-block;height: 40px;width: 60px;text-align: center;vertical-align: middle!important;float: left;">
                                            <img style="float:none" src="<?php echo SFSI_PLUS_PLUGURL; ?>images/responsive-icon/<?php echo $icon; ?><?php echo 'Follow' === $icon ? '.png' : '.svg'; ?>"></div>
                                        <span> <?php echo $icon_config["text"];  ?> </span>
                                    </div>
                                </span>
                                <input type="text" class="sfsi_premium_responsive_input" name="sfsi_premium_responsive_<?php echo $icon ?>_input" value="<?php echo $icon_config["text"]; ?>" />
                                <a href="#" class="sfsi_premium_responsive_default_url_toggler" style=""><?php _e('Define url*', SFSI_PLUS_DOMAIN); ?></a>
                                <input style="display:none" class="sfsi_premium_responsive_url_input" type="text" placeholder="Enter url" name="sfsi_premium_responsive_<?php echo $icon ?>_url_input" value="<?php echo $icon_config["url"]; ?>" />
                                <a href="#" class="sfsi_premium_responsive_default_url_hide" style="display:none"><span class="sfsi_premium_cancel_text"><?php _e('Cancel', SFSI_PLUS_DOMAIN); ?></span><span class="sfsi_premium_cancel_icon">&times;</span></a>
                            </li>
                        <?php } ?>
                    <?php endforeach; ?>

                    <?php for ($sfsi_premium_rcic = 0; $sfsi_premium_rcic < 5; $sfsi_premium_rcic++) : ?>
                        <li class="sfsi_premium_responsive_custom_icon_container sfsi_premium_responsive_custom_icon sfsi_premium_responsive_custom_icon_<?php echo $sfsi_premium_rcic; ?>_container" style="<?php echo isset($sfsi_premium_responsive_icons['custom_icons'][$sfsi_premium_rcic]) && (isset($sfsi_premium_responsive_icons['custom_icons'][$sfsi_premium_rcic]['added']) && $sfsi_premium_responsive_icons['custom_icons'][$sfsi_premium_rcic]['added'] === 'yes') ? 'display:inline-block' : 'display:none'; ?>">
                            <div class="radio_section tb_4_ck">
                                <input type="hidden" name="sfsi_premium_responsive_custom_<?php echo $sfsi_premium_rcic; ?>_added" value="<?php echo isset($sfsi_premium_responsive_icons['custom_icons'][$sfsi_premium_rcic]) && isset($sfsi_premium_responsive_icons['custom_icons'][$sfsi_premium_rcic]['added']) ? $sfsi_premium_responsive_icons['custom_icons'][$sfsi_premium_rcic]['added'] : 'no'; ?>">
                                <input name="sfsi_premium_responsive_custom_<?php echo $sfsi_premium_rcic; ?>_display" <?php echo (isset($sfsi_premium_responsive_icons['custom_icons'][$sfsi_premium_rcic]) && $sfsi_premium_responsive_icons['custom_icons'][$sfsi_premium_rcic]['active'] == 'yes') ?  'checked=true' : ''; ?> id="sfsi_premium_responsive_<?php echo $sfsi_premium_rcic; ?>_display" type="checkbox" value="yes" class="styled" data-custom-index=<?php echo $sfsi_premium_rcic; ?> />
                            </div>
                            <span class="sfsi_premium_icon_container">
                                <div class="sfsi_premium_responsive_icon_item_container sfsi_premium_responsive_icon_item_container sfsi_premium_responsive_icon_custom_<?php echo $sfsi_premium_rcic; ?>_container" style="background-color:<?php echo isset($sfsi_premium_responsive_icons['custom_icons'][$sfsi_premium_rcic]) && $sfsi_premium_responsive_icons['custom_icons'][$sfsi_premium_rcic]["bg-color"] !== "" ? $sfsi_premium_responsive_icons['custom_icons'][$sfsi_premium_rcic]["bg-color"] : '#729fcf' ?>; word-break:break-all;padding-left:0">
                                    <div style="display: inline-block;height: 40px;width: 60px;text-align: center;vertical-align: middle!important;float: left;">
                                        <img style="max-width: 25px;float:none;max-height: 25px ;display: <?php echo (isset($sfsi_premium_responsive_icons['custom_icons'][$sfsi_premium_rcic]) && $sfsi_premium_responsive_icons['custom_icons'][$sfsi_premium_rcic]["icon"] !== "") ? 'inline-block' : 'none'; ?>" src="<?php echo (isset($sfsi_premium_responsive_icons['custom_icons'][$sfsi_premium_rcic]) && $sfsi_premium_responsive_icons['custom_icons'][$sfsi_premium_rcic]["icon"] !== "") ? $sfsi_premium_responsive_icons['custom_icons'][$sfsi_premium_rcic]["icon"] : ''; ?>">
                                    </div>
                                    <span style="color:#fff"> <?php echo isset($sfsi_premium_responsive_icons['custom_icons'][$sfsi_premium_rcic]) && $sfsi_premium_responsive_icons['custom_icons'][$sfsi_premium_rcic]["text"] ? $sfsi_premium_responsive_icons['custom_icons'][$sfsi_premium_rcic]["text"] : 'Custom'; ?> </span>
                                </div>
                            </span>
                            <input type="text" class="sfsi_premium_responsive_input" name="sfsi_premium_responsive_custom_<?php echo $sfsi_premium_rcic ?>_input" value="<?php echo isset($sfsi_premium_responsive_icons['custom_icons'][$sfsi_premium_rcic]) && $sfsi_premium_responsive_icons['custom_icons'][$sfsi_premium_rcic]["text"] ? $sfsi_premium_responsive_icons['custom_icons'][$sfsi_premium_rcic]["text"] : 'Custom'; ?>" />
                            <input type="text" class="sfsi_premium_responsive_url_input" name="sfsi_premium_responsive_custom_<?php echo $sfsi_premium_rcic ?>_url_input" value="<?php echo (isset($sfsi_premium_responsive_icons['custom_icons'][$sfsi_premium_rcic]) ? $sfsi_premium_responsive_icons['custom_icons'][$sfsi_premium_rcic]["url"] : ''); ?>" placeholder="Enter url the icon should link to" />
                            <a href="#" class="sfsi_premium_responsive_custom_delete_btn" id="sfsi_premium_responsive_custom_delete_<?php echo $i; ?>_btn" data-id="<?php echo $sfsi_premium_rcic; ?>" style="display:<?php echo ($sfsi_premium_responsive_icons_custom_count - 1) == $sfsi_premium_rcic ? 'inline' : 'none'; ?>"><?php _e('Delete', SFSI_PLUS_DOMAIN); ?></a>
                            <ul>
                                <li style="height: 40px;">
                                    <div><label>Background Color</label></div>
                                    <div><input name="sfsi_plus_responsive_icon_<?php echo $sfsi_premium_rcic; ?>_bg_color" class="sfsi_premium_bg-color-picker" data-default-color="#729fcf" type="text" value="<?php echo isset($sfsi_premium_responsive_icons['custom_icons'][$sfsi_premium_rcic]) && $sfsi_premium_responsive_icons['custom_icons'][$sfsi_premium_rcic]["bg-color"] !== "" ? $sfsi_premium_responsive_icons['custom_icons'][$sfsi_premium_rcic]["bg-color"] : '#729fcf' ?>" /></div>
                                </li>
                                <li>
                                    <div><label>Logo</label></div>
                                    <div><button class="sfsi_premium_logo_upload sfsi_premium_logo_custom_<?php echo $sfsi_premium_rcic;  ?>_upload" data-custom-index="<?php echo $sfsi_premium_rcic;  ?>" style="margin-top: 10px; height: 20px; width: 89px; font-size: 15px;">Upload Logo</button>
                                        <input type="hidden" name=sfsi_premium_responsive_icons_custom_<?php echo $sfsi_premium_rcic;  ?>_icon" value="<?php echo isset($sfsi_premium_responsive_icons['custom_icons'][$sfsi_premium_rcic]) ? $sfsi_premium_responsive_icons['custom_icons'][$sfsi_premium_rcic]["icon"] : '' ?>">
                                    </div>
                                </li>
                            </ul>
                        </li>

                    <?php endfor; ?>
                    <li class="sfsi_premium_responsive_custom_icon_container" style="<?php count($sfsi_premium_responsive_icons['custom_icons']) > 4 ? 'display:none' : ''; ?>">
                        <div class="radio_section tb_4_ck">
                            <input name="sfsi_premium_responsive_custom_new_display" id="sfsi_premium_responsive_custom_new_display" type="checkbox" class="styled" />
                        </div>
                        <span class="sfsi_premium_icon_container">
                            <div class="sfsi_premium_responsive_icon_item_container" style="text-align: left; margin-top: 0px;padding-left:0">
                                <span style="color:#69737C;font-size: 20px;font-weight: 700;padding-left:0"> Custom </span>
                            </div>
                        </span>

                    </li>
                </ul>
                <p style="width: 90%;font-size: 15.4px!important;font-family: helveticaregular;"><?php _e('*All icons have «sharing»-feature enabled by default. If you want to give them a different function (e.g. link to your Facebook page) then please click on «Define URL» next to the icon. ', SFSI_PLUS_DOMAIN); ?></p>
            </li>

            <li class="row sfsiplus_PostsSettings_section" style="<?php echo ($option8['sfsi_plus_display_button_type'] == 'responsive_button') ?  'display:none' : ''; ?>">

                <label class="first chcklbl">
                    <?php _e('Display them:', SFSI_PLUS_DOMAIN); ?>
                </label>

                <!--Display them options-->
                <div class="options sfsipluspstvwpr" style="float:none!important;">
                    <label class="seconds chcklbl labelhdng4">
                        <?php _e('On Single Post Pages', SFSI_PLUS_DOMAIN); ?>
                    </label>
                    <div class="chckwpr">
                        <div class="snglchckcntr" style="width:30%">
                            <div class="radio_section tb_4_ck"><input name="sfsi_plus_display_before_posts" <?php echo (isset($option8['sfsi_plus_display_before_posts']) && $option8['sfsi_plus_display_before_posts'] == 'yes') ?  'checked="true"' : ''; ?> id="sfsi_plus_display_before_posts" type="checkbox" value="yes" class="styled" /></div>
                            <div class="sfsiplus_right_info">
                                <?php _e('Before posts', SFSI_PLUS_DOMAIN); ?>
                            </div>
                        </div>
                        <div class="snglchckcntr" style="width:30%">
                            <div class="radio_section tb_4_ck"><input name="sfsi_plus_display_after_posts" <?php echo (isset($option8['sfsi_plus_display_after_posts']) && $option8['sfsi_plus_display_after_posts'] == 'yes') ?  'checked="true"' : ''; ?> id="sfsi_plus_display_after_posts" type="checkbox" value="yes" class="styled" /></div>
                            <div class="sfsiplus_right_info">
                                <?php _e('After posts', SFSI_PLUS_DOMAIN); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="options sfsipluspstvwpr" style="float:none!important;">
                    <label class="seconds chcklbl labelhdng4">
                        <?php _e('On Blog Pages', SFSI_PLUS_DOMAIN); ?>
                    </label>
                    <div class="chckwpr">
                        <div class="snglchckcntr" style="width:30%">
                            <div class="radio_section tb_4_ck"><input name="sfsi_plus_display_before_blogposts" <?php echo (isset($option8['sfsi_plus_display_before_blogposts']) && $option8['sfsi_plus_display_before_blogposts'] == 'yes') ?  'checked="true"' : ''; ?> id="sfsi_plus_display_before_blogposts" type="checkbox" value="yes" class="styled" /></div>
                            <div class="sfsiplus_right_info">
                                <?php _e('Before posts', SFSI_PLUS_DOMAIN); ?>
                            </div>
                        </div>
                        <div class="snglchckcntr" style="width:30%">
                            <div class="radio_section tb_4_ck"><input name="sfsi_plus_display_after_blogposts" <?php echo (isset($option8['sfsi_plus_display_after_blogposts']) && $option8['sfsi_plus_display_after_blogposts'] == 'yes') ?  'checked="true"' : ''; ?> id="sfsi_plus_display_after_blogposts" type="checkbox" value="yes" class="styled" /></div>
                            <div class="sfsiplus_right_info">
                                <?php _e('After posts', SFSI_PLUS_DOMAIN); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="options sfsipluspstvwpr" style="float:none!important;">
                    <div style="display:<?php echo is_plugin_active('woocommerce/woocommerce.php') ? 'block' : 'none'; ?>;">
                        <label class="seconds chcklbl labelhdng4" style="width:inherit!important;margin-left:0">
                            <?php _e('On WooComerce Product Pages', SFSI_PLUS_DOMAIN); ?>
                        </label>
                        <div class="chckwpr">
                            <div class="snglchckcntr" style="width:30%">
                                <div class="radio_section tb_4_ck"><input name="sfsi_plus_display_before_woocomerce_desc" <?php echo (isset($option8['sfsi_plus_display_before_woocomerce_desc']) && $option8['sfsi_plus_display_before_woocomerce_desc'] == 'yes') ?  'checked="true"' : ''; ?> id="sfsi_plus_display_before_woocomerce_desc" type="checkbox" value="yes" class="styled" /></div>
                                <div class="sfsiplus_right_info">
                                    <?php _e('Before product<br>descriptions', SFSI_PLUS_DOMAIN); ?>
                                </div>
                            </div>
                            <div class="snglchckcntr" style="width:30%">
                                <div class="radio_section tb_4_ck"><input name="sfsi_plus_display_after_woocomerce_desc" <?php echo (isset($option8['sfsi_plus_display_after_woocomerce_desc']) && $option8['sfsi_plus_display_after_woocomerce_desc'] == 'yes') ?  'checked="true"' : ''; ?> id="sfsi_plus_display_after_woocomerce_desc" type="checkbox" value="yes" class="styled" /></div>
                                <div class="sfsiplus_right_info">
                                    <?php _e('After product<br>descriptions', SFSI_PLUS_DOMAIN); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Display them options-->
                <div class="options shareicontextfld">
                    <label class="first">
                        <?php _e('Text to appear before the sharing icons:', SFSI_PLUS_DOMAIN); ?>
                    </label>
                    <input name="sfsi_plus_textBefor_icons" type="text" value="<?php echo (isset($option8['sfsi_plus_textBefor_icons']) && $option8['sfsi_plus_textBefor_icons'] != '') ?  $option8['sfsi_plus_textBefor_icons'] : ''; ?>" />
                </div>

                <div class="options sfsi_plus_selectSec">
                    <label class="first">
                        <?php _e('Font:', SFSI_PLUS_DOMAIN); ?>
                    </label>
                    <div>
                        <select name="sfsi_plus_textBefor_icons_font" class="select-same">
                            <option value="inherit" <?php echo sfsi_premium_isSeletcted("inherit", $option8['sfsi_plus_textBefor_icons_font']) ?>>
                                Inherit
                            </option>
                            <option value="Arial, Helvetica, sans-serif" <?php echo sfsi_premium_isSeletcted("Arial, Helvetica, sans-serif", $option8['sfsi_plus_textBefor_icons_font']) ?>>
                                Arial
                            </option>
                            <option value="Arial Black, Gadget, sans-serif" <?php echo sfsi_premium_isSeletcted("Arial Black, Gadget, sans-serif", $option8['sfsi_plus_textBefor_icons_font']) ?>>
                                Arial Black
                            </option>
                            <option value="Calibri" <?php echo sfsi_premium_isSeletcted("Calibri", $option8['sfsi_plus_textBefor_icons_font']) ?>>
                                Calibri
                            </option>
                            <option value="Comic Sans MS" <?php echo sfsi_premium_isSeletcted("Comic Sans MS", $option8['sfsi_plus_textBefor_icons_font']) ?>>
                                Comic Sans MS
                            </option>
                            <option value="Courier New" <?php echo sfsi_premium_isSeletcted("Courier New", $option8['sfsi_plus_textBefor_icons_font']) ?>>
                                Courier New
                            </option>
                            <option value="Georgia" <?php echo sfsi_premium_isSeletcted("Georgia", $option8['sfsi_plus_textBefor_icons_font']) ?>>
                                Georgia
                            </option>
                            <option value="Helvetica,Arial,sans-serif" <?php echo sfsi_premium_isSeletcted("Helvetica,Arial,sans-serif", $option8['sfsi_plus_textBefor_icons_font']) ?>>
                                Helvetica,Arial,sans-serif
                            </option>
                            <option value="Impact" <?php echo sfsi_premium_isSeletcted("Impact", $option8['sfsi_plus_textBefor_icons_font']) ?>>
                                Impact
                            </option>
                            <option value="Lucida Console" <?php echo sfsi_premium_isSeletcted("Lucida Console", $option8['sfsi_plus_textBefor_icons_font']) ?>>
                                Lucida Console
                            </option>
                            <option value="Tahoma,Geneva" <?php echo sfsi_premium_isSeletcted("Tahoma,Geneva", $option8['sfsi_plus_textBefor_icons_font']) ?>>
                                Tahoma
                            </option>
                            <option value="Times New Roman" <?php echo sfsi_premium_isSeletcted("Times New Roman", $option8['sfsi_plus_textBefor_icons_font']) ?>>
                                Times New Roman
                            </option>
                            <option value="Trebuchet MS" <?php echo sfsi_premium_isSeletcted("Trebuchet MS", $option8['sfsi_plus_textBefor_icons_font']) ?>>
                                Trebuchet MS
                            </option>
                            <option value="Verdana" <?php echo sfsi_premium_isSeletcted("Verdana", $option8['sfsi_plus_textBefor_icons_font']) ?>>
                                Verdana
                            </option>
                        </select>
                    </div>
                </div>

                <div class="options sfsi_plus_selectSec">
                    <label class="first">
                        <?php _e('Font style:', SFSI_PLUS_DOMAIN); ?>
                    </label>
                    <div>
                        <select name="sfsi_plus_textBefor_icons_font_type" class="select-same">
                            <option value="normal" <?php echo sfsi_premium_isSeletcted("normal", $option8['sfsi_plus_textBefor_icons_font_type']) ?>>
                                Normal
                            </option>
                            <option value="inherit" <?php echo sfsi_premium_isSeletcted("inherit", $option8['sfsi_plus_textBefor_icons_font_type']) ?>>
                                Inherit
                            </option>
                            <option value="oblique" <?php echo sfsi_premium_isSeletcted("oblique", $option8['sfsi_plus_textBefor_icons_font_type']) ?>>
                                Oblique
                            </option>
                            <option value="italic" <?php echo sfsi_premium_isSeletcted("italic", $option8['sfsi_plus_textBefor_icons_font_type']) ?>>
                                Italic
                            </option>
                            <option value="bold" <?php echo sfsi_premium_isSeletcted("bold", $option8['sfsi_plus_textBefor_icons_font_type']) ?>>
                                Bold
                            </option>
                        </select>
                    </div>
                </div>

                <div class="options  sfsi_plus_inputSec">
                    <label class="first">
                        <?php _e('Font size:', SFSI_PLUS_DOMAIN); ?>
                    </label>
                    <input name="sfsi_plus_textBefor_icons_font_size" type="text" value="<?php
                                                                                            echo ($option8['sfsi_plus_textBefor_icons_font_size'] != '')
                                                                                                ? $option8['sfsi_plus_textBefor_icons_font_size']
                                                                                                : ''; ?>" />
                    <span>px</span>
                </div>

                <div class="options sfsi_plus_inputSec textBefor_icons_fontcolor">
                    <label class="first">
                        <?php _e('Font Color:', SFSI_PLUS_DOMAIN); ?>
                    </label>
                    <input name="sfsi_plus_textBefor_icons_fontcolor" id="sfsi_plus_textBefor_icons_fontcolor" data-default-color="#000000" type="text" value="<?php
                                                                                                                                                                echo ($option8['sfsi_plus_textBefor_icons_fontcolor'] != '')
                                                                                                                                                                    ? $option8['sfsi_plus_textBefor_icons_fontcolor']
                                                                                                                                                                    : '#000000'; ?>" />
                </div>


                <div class="options">
                    <label class="first">
                        <?php _e('Margins:', SFSI_PLUS_DOMAIN); ?>
                    </label>
                    <ul class="sfsi_plus_postIconMargin">
                        <li class="sfsi_align">
                            <label>Above Icon</label>
                            <input name="sfsi_plus_marginAbove_postIcon" class="sfsi_align" type="text" value="<?php echo ($option8['sfsi_plus_marginAbove_postIcon'] != '') ?
                                                                                                                    $option8['sfsi_plus_marginAbove_postIcon']
                                                                                                                    : ''; ?>" />
                            <label>px</label>
                        </li>
                        <li class="sfsi_align">
                            <label>Below Icon</label>
                            <input name="sfsi_plus_marginBelow_postIcon" class="sfsi_align" type="text" value="<?php echo ($option8['sfsi_plus_marginBelow_postIcon'] != '') ?
                                                                                                                    $option8['sfsi_plus_marginBelow_postIcon'] : ''; ?>" />
                            <label>px</label>
                        </li>
                    </ul>
                </div>

                <div class="options">
                    <label>
                        <?php _e('Alignment of share icons:', SFSI_PLUS_DOMAIN); ?>
                    </label>
                    <div class="field">
                        <select name="sfsi_plus_icons_alignment" id="sfsi_plus_icons_alignment" class="styled">
                            <option value="left" <?php echo ($option8['sfsi_plus_icons_alignment'] == 'left') ?  'selected="selected"' : ''; ?>>
                                <?php _e('Left', SFSI_PLUS_DOMAIN); ?>
                            </option>
                            <option value="right" <?php echo ($option8['sfsi_plus_icons_alignment'] == 'right') ?  'selected="selected"' : ''; ?>>
                                <?php _e('Right', SFSI_PLUS_DOMAIN); ?>
                            </option>
                            <option value="center" <?php echo ($option8['sfsi_plus_icons_alignment'] == 'center') ?  'selected="selected"' : ''; ?>>
                                <?php _e('Center', SFSI_PLUS_DOMAIN); ?>
                            </option>
                        </select>
                    </div>
                </div>

                <!--<div class="options">
                        	<label>Do you want to display the counts?</label><div class="field"><select name="sfsi_plus_icons_DisplayCounts" id="sfsi_plus_icons_DisplayCounts" class="styled"><option value="yes" <?php //echo ($option8['sfsi_plus_icons_DisplayCounts']=='yes') ?  'selected="true"' : '' ;
                                                                                                                                                                                                                    ?>>YES</option><option value="no" <?php //echo ($option8['sfsi_plus_icons_DisplayCounts']=='no') ?  'selected="true"' : '' ;
                                                                                                                                                                                                                                                        ?>>NO</option></select></div>
                    	</div>-->

                <div class="options sfsi_options">
                    <label>
                        <?php _e('Also show icons at pages?', SFSI_PLUS_DOMAIN); ?>
                    </label>
                    <div class="sfsi_plus_show_icons_end_pages">
                        <div class="chckwpr">
                            <div class="snglchckcntr">
                                <div class="radio_section tb_4_ck"><input name="sfsi_plus_display_before_pageposts" <?php echo ($option8['sfsi_plus_display_before_pageposts'] == 'yes') ?  'checked="true"' : ''; ?> id="sfsi_plus_display_before_pageposts" type="checkbox" value="yes" class="styled" /></div>
                                <div class="sfsiplus_right_info">
                                    <?php _e('At top of pages', SFSI_PLUS_DOMAIN); ?>
                                </div>
                            </div>
                            <div class="snglchckcntr">
                                <div class="radio_section tb_4_ck"><input name="sfsi_plus_display_after_pageposts" <?php echo ($option8['sfsi_plus_display_after_pageposts'] == 'yes') ?  'checked="true"' : ''; ?> id="sfsi_plus_display_after_pageposts" type="checkbox" value="yes" class="styled" /></div>
                                <div class="sfsiplus_right_info">
                                    <?php _e('At bottom of pages', SFSI_PLUS_DOMAIN); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <?php

                $select = (isset($option8['sfsi_plus_choose_post_types'])) ? unserialize($option8['sfsi_plus_choose_post_types']) : array();

                $args = array('_builtin' => false, 'public'   => true);

                $postTypes         = array();
                $post_types        = get_post_types($args, 'names');
                $custom_post_types = array_values($post_types);
                $count                = count($custom_post_types);


                if ($count > 0) {
                    $mul    = ($count != 1) ? 'multiple="multiple"' : "";
                    ?>

                    <div class="options sfsi_plus_choose_post_types_section">

                        <div class="sfsi_plus_choose_post_type_wrap">

                            <label style="width:356px!important;float:none!important" >
                                <p><?php _e('Do you also want to show the icon on custom post pages? Select all where you want them to show:', SFSI_PLUS_DOMAIN); ?></p>
                            </label>

                            <select <?php echo $mul; ?> name="sfsi_plus_choose_post_types" id="sfsi_plus_choose_post_types" style="width:50%!important;float:none!important" >

                                <option value=""><?php _e('------------- Choose Post types -------------', SFSI_PLUS_DOMAIN); ?></option>

                                <?php
                                    foreach ($custom_post_types as $post) :

                                        $pt = get_post_type_object($post);
                                        $postDisplayName = $pt->labels->singular_name;

                                        $selected_box = '';

                                        if (!empty($select)) {
                                            if (in_array($post, $select)) {
                                                $selected_box = 'selected="selected"';
                                            }
                                        }

                                        ?>

                                    <option <?php echo $selected_box; ?> value="<?php echo $post; ?>">
                                        <?php _e(ucfirst($postDisplayName), SFSI_PLUS_DOMAIN); ?>
                                    </option>

                                <?php endforeach; ?>

                            </select>

                            <div class="sfsi_ctrl_instruct cposttype"><?php _e('Please hold the CTRL key to select multiple post types.', SFSI_PLUS_DOMAIN); ?></div>

                        </div>
                    </div>
                <?php }
                ?>

            </li>

            <!-- Taxnomies selection dropdown STARTS  here -->
            <?php include(SFSI_PLUS_DOCROOT . '/views/subviews/que3/select_taxonomies.php'); ?>
            <!-- Taxnomies selection dropdown CLOSES  here -->

            <li style="margin-left: 61px;<?php echo ($option8['sfsi_plus_display_button_type'] == 'responsive_button') ?  'display:none' : ''; ?>" class="sfsi_premium_not_responsive">

                <div class="sfsidesktopmbilelabel"><span class="sfsiplus_toglepstpgspn"><?php _e('Show on:', SFSI_PLUS_DOMAIN); ?></span></div>

                <ul class="sfsiplus_icn_listing8 sfsi_plus_closerli bfreAftrPostsDesktopMobileUl">

                    <li class="">

                        <div class="radio_section tb_4_ck">
                            <input name="sfsi_plus_beforeafterposts_show_on_desktop" type="checkbox" value="yes" class="styled" <?php echo ($option8['sfsi_plus_beforeafterposts_show_on_desktop'] == 'yes') ?  'checked="true"' : ''; ?>>
                        </div>

                        <div class="sfsiplus_right_info"><?php _e('Desktop', SFSI_PLUS_DOMAIN); ?></div>
                    </li>

                    <li class="">

                        <div class="radio_section tb_4_ck">
                            <input name="sfsi_plus_beforeafterposts_show_on_mobile" type="checkbox" value="yes" class="styled" <?php echo ($option8['sfsi_plus_beforeafterposts_show_on_mobile'] == 'yes') ?  'checked="true"' : ''; ?>>
                        </div>

                        <div class="sfsiplus_right_info"><?php _e('Mobile', SFSI_PLUS_DOMAIN); ?></div>
                    </li>
                </ul>
            </li>
            <li style="margin-left: 61px;overflow:scroll;<?php echo ($option8['sfsi_plus_display_button_type'] == 'responsive_button') ?  'display:none' : ''; ?>" class="sfsi_premium_not_responsive">

                <div class="sfsidesktopmbilelabel" style="float:none"><span class="sfsiplus_toglepstpgspn"><?php _e(
                                                                                                                'Placing the rectangle icons via shortcode:',
                                                                                                                SFSI_PLUS_DOMAIN
                                                                                                            ); ?></span>
                </div>
                <?php @include(SFSI_PLUS_DOCROOT . '/views/subviews/que3/rectangle_icons_manually.php'); ?>
            </li>
            <li class="sfsi_premium_responsive_icon_option_li" style="<?php echo ($option8['sfsi_plus_display_button_type'] !== 'responsive_button') ?  'display:none' : ''; ?>" style="padding:0;margin-top:15px;">
                <label class="heading-label" style="padding-bottom: 0; margin-top: -30px;  font-size: 18px !important;">
                    <?php _e('Display options', SFSI_PLUS_DOMAIN); ?>
                </label>
                <div class="options">
                    <label class="first" style="margin-top:3px; color: #555555;">
                        <?php _e('Pages to show icons:', SFSI_PLUS_DOMAIN); ?>
                    </label>
                    <div class="field">
                        <div class="checkbox-subheading">Single post pages</div>
                        <ul class="sfsiplus_icn_listing8 sfsi_plus_closerli bfreAftrPostsDesktopMobileUl">
                            <li class="">
                                <div class="radio_section tb_4_ck">
                                    <input name="sfsi_plus_responsive_icons_before_post" type="checkbox" value="yes" class="styled" <?php echo (!isset($option8['sfsi_plus_responsive_icons_before_post']) || $option8['sfsi_plus_responsive_icons_before_post'] == 'yes') ?  'checked="true"' : ''; ?>>
                                </div>

                                <div class="sfsiplus_right_info"><?php _e('Before posts', SFSI_PLUS_DOMAIN); ?></div>
                            </li>
                            <li class="">

                                <div class="radio_section tb_4_ck">
                                    <input name="sfsi_plus_responsive_icons_after_post" type="checkbox" value="yes" class="styled" <?php echo ((!isset($option8['sfsi_plus_responsive_icons_after_post'])) || $option8['sfsi_plus_responsive_icons_after_post'] == 'yes') ?  'checked="true"' : ''; ?>>
                                </div>

                                <div class="sfsiplus_right_info"><?php _e('After posts', SFSI_PLUS_DOMAIN); ?></div>
                            </li>
                        </ul>
                        <div class="checkbox-subheading">Posts overview pages (blog homepage)</div>
                        <ul class="sfsiplus_icn_listing8 sfsi_plus_closerli bfreAftrPostsDesktopMobileUl">
                            <li class="">
                                <div class="radio_section tb_4_ck">
                                    <input name="sfsi_plus_responsive_icons_before_post_on_taxonomy" type="checkbox" value="yes" class="styled" <?php echo (!isset($option8['sfsi_plus_responsive_icons_before_post_on_taxonomy']) || $option8['sfsi_plus_responsive_icons_before_post_on_taxonomy'] == 'yes') ?  'checked="true"' : ''; ?>>
                                </div>

                                <div class="sfsiplus_right_info"><?php _e('Before posts', SFSI_PLUS_DOMAIN); ?></div>
                            </li>
                            <li class="">

                                <div class="radio_section tb_4_ck">
                                    <input name="sfsi_plus_responsive_icons_after_post_on_taxonomy" type="checkbox" value="yes" class="styled" <?php echo ((!isset($option8['sfsi_plus_responsive_icons_after_post_on_taxonomy'])) || $option8['sfsi_plus_responsive_icons_after_post_on_taxonomy'] == 'yes') ?  'checked="true"' : ''; ?>>
                                </div>

                                <div class="sfsiplus_right_info"><?php _e('After posts', SFSI_PLUS_DOMAIN); ?></div>
                            </li>
                        </ul>

                        <div class="checkbox-subheading">Other pages</div>
                        <ul class="sfsiplus_icn_listing8 sfsi_plus_closerli bfreAftrPostsDesktopMobileUl">
                            <li class="">
                                <div class="radio_section tb_4_ck">
                                    <input name="sfsi_plus_responsive_icons_before_pages" type="checkbox" value="yes" class="styled" <?php echo (!isset($option8['sfsi_plus_responsive_icons_before_pages']) || $option8['sfsi_plus_responsive_icons_before_pages'] == 'yes') ?  'checked="true"' : ''; ?>>
                                </div>

                                <div class="sfsiplus_right_info"><?php _e('At top of pages', SFSI_PLUS_DOMAIN); ?></div>
                            </li>
                            <li class="">

                                <div class="radio_section tb_4_ck">
                                    <input name="sfsi_plus_responsive_icons_after_pages" type="checkbox" value="yes" class="styled" <?php echo ((!isset($option8['sfsi_plus_responsive_icons_after_pages'])) || $option8['sfsi_plus_responsive_icons_after_pages'] == 'yes') ?  'checked="true"' : ''; ?>>
                                </div>

                                <div class="sfsiplus_right_info"><?php _e('At bottom of pages', SFSI_PLUS_DOMAIN); ?></div>
                            </li>
                        </ul>
                    </div>
                    <?php

                    $select = (isset($option8['sfsi_plus_choose_post_types_responsive'])) ? unserialize($option8['sfsi_plus_choose_post_types_responsive']) : array();
                    $args = array('_builtin' => false, 'public'   => true);

                    $postTypes         = array();
                    $post_types        = get_post_types($args, 'names');
                    $custom_post_types = array_values($post_types);
                    $count                = count($custom_post_types);

                    if ($count > 0) {
                        $mul    = ($count != 1) ? 'multiple="multiple"' : "";

                        ?>

                        <div class="sfsi_plus_choose_post_types_section_for_responsive">

                            <div class="sfsi_plus_choose_post_type_wrap">

                                <label style="width:356px!important;float:none!important">
                                    <p><?php _e('Do you also want to show the icon on custom post pages? Select all where you want them to show:', SFSI_PLUS_DOMAIN); ?></p>
                                </label>

                                <select <?php echo $mul; ?> name="sfsi_plus_choose_post_types_responsive" id="sfsi_plus_choose_post_types_responsive" style="width:50%!important;float:none!important">

                                    <option value=""><?php _e('------------- Choose Post types -------------', SFSI_PLUS_DOMAIN); ?></option>

                                    <?php
                                        foreach ($custom_post_types as $post) :

                                            $pt = get_post_type_object($post);
                                            $postDisplayName = $pt->labels->singular_name;

                                            $selected_box = '';

                                            if (!empty($select)) {
                                                if (in_array($post, $select)) {
                                                    $selected_box = 'selected="selected"';
                                                }
                                            }
                                            ?>
                                        
                                        <option <?php echo $selected_box; ?> value="<?php echo $post; ?>">
                                            <?php _e(ucfirst($postDisplayName), SFSI_PLUS_DOMAIN); ?>
                                        </option>

                                    <?php endforeach; ?>

                                </select>

                                <div class="sfsi_ctrl_instruct cposttype"><?php _e('Please hold the CTRL key to select multiple post types.', SFSI_PLUS_DOMAIN); ?></div>

                            </div>
                        </div>
                    <?php 
                    }
                    ?>

                    <div class="options sfsipluspstvwpr" style="width:75%!important; ">
                        <div style="display:<?php echo is_plugin_active('woocommerce/woocommerce.php') ? 'block' : 'none'; ?>;">
                            <label class="seconds chcklbl labelhdng4" style="width:inherit!important;margin-left:0; font-size: 20px; font-weight: 400 !important; color: #555;font-family: 'helveticaneue-light'; margin-bottom: 18px;">
                                <?php _e('On WooComerce Product Pages', SFSI_PLUS_DOMAIN); ?>
                            </label>
                            <div class="chckwpr">
                                <div class="snglchckcntr" style="width: 30%;">
                                    <div class="radio_section tb_4_ck">
                                        <input name="sfsi_plus_display_before_woocomerce_desc" <?php echo (isset($option8['sfsi_plus_display_before_woocomerce_desc']) && $option8['sfsi_plus_display_before_woocomerce_desc'] == 'yes') ?  'checked="true"' : ''; ?> id="sfsi_plus_display_before_woocomerce_desc" type="checkbox" value="yes" class="styled">
                                    </div>
                                    <div class="sfsiplus_right_info">
                                        <?php _e('Before product<br>descriptions', SFSI_PLUS_DOMAIN); ?>
                                    </div>
                                </div>
                                <div class="snglchckcntr" style="width: 30%; margin-left: 0px;">
                                    <div class="radio_section tb_4_ck"><input name="sfsi_plus_display_after_woocomerce_desc" <?php echo (isset($option8['sfsi_plus_display_after_woocomerce_desc']) && $option8['sfsi_plus_display_after_woocomerce_desc'] == 'yes') ?  'checked="true"' : ''; ?> id="sfsi_plus_display_after_woocomerce_desc" type="checkbox" value="yes" class="styled">
                                    </div>
                                    <div class="sfsiplus_right_info">
                                        <?php _e('After product<br>descriptions', SFSI_PLUS_DOMAIN); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="options ">
                    <label class="first" style="color: #555555;">
                        <?php _e('Devices to show icons:', SFSI_PLUS_DOMAIN); ?>
                    </label>
                    <ul class="sfsiplus_icn_listing8 sfsi_plus_closerli bfreAftrPostsDesktopMobileUl">
                        <li class="">
                            <div class="radio_section tb_4_ck">
                                <input name="sfsi_plus_responsive_icons_show_on_desktop" type="checkbox" value="yes" class="styled" <?php echo (!isset($option8['sfsi_plus_responsive_icons_show_on_desktop']) || $option8['sfsi_plus_responsive_icons_show_on_desktop'] == 'yes') ?  'checked="true"' : ''; ?>>
                            </div>

                            <div class="sfsiplus_right_info"><?php _e('Desktop', SFSI_PLUS_DOMAIN); ?></div>
                        </li>
                        <li class="">

                            <div class="radio_section tb_4_ck">
                                <input name="sfsi_plus_responsive_icons_show_on_mobile" type="checkbox" value="yes" class="styled" <?php echo ((!isset($option8['sfsi_plus_responsive_icons_show_on_mobile'])) || $option8['sfsi_plus_responsive_icons_show_on_mobile'] == 'yes') ?  'checked="true"' : ''; ?>>
                            </div>

                            <div class="sfsiplus_right_info"><?php _e('Mobile', SFSI_PLUS_DOMAIN); ?></div>
                        </li>
                    </ul>
                </div>
                <div class="options">
                    <div style="width: 90%;">You can also show the icon by using the shortcode [DISPLAY_RESPONSIVE_ICONS] (or place the string &lt;?php echo DISPLAY_RESPONSIVE_ICONS(); ?&gt; into your theme codes).

                    </div>
                </div>
            </li>
            <li class="sfsi_premium_responsive_icon_option_li" style="<?php echo ($option8['sfsi_plus_display_button_type'] !== 'responsive_button') ?  'display:none' : ''; ?> ">
                <label class="heading-label">
                    <?php _e('Design options', SFSI_PLUS_DOMAIN); ?>
                </label>
                <div class="options ">
                    <label class="first">
                        <?php _e('Icons size:', SFSI_PLUS_DOMAIN); ?>
                    </label>
                    <div class="field">
                        <div style="display:inline-block">
                            <select name="sfsi_premium_responsive_icons_settings_icon_size" class="styled">
                                <option value="Small" <?php echo (isset($sfsi_premium_responsive_icons["settings"]) && isset($sfsi_premium_responsive_icons["settings"]["icon_size"]) && $sfsi_premium_responsive_icons["settings"]["icon_size"] === "Small") ? 'selected="selected"' : ""; ?>>
                                    Small
                                </option>
                                <option value="Medium" <?php echo (isset($sfsi_premium_responsive_icons["settings"]) && isset($sfsi_premium_responsive_icons["settings"]["icon_size"]) && $sfsi_premium_responsive_icons["settings"]["icon_size"] === "Medium") ? 'selected="selected"' : ""; ?>>
                                    Medium
                                </option>
                                <option value="Large" <?php echo (isset($sfsi_premium_responsive_icons["settings"]) && isset($sfsi_premium_responsive_icons["settings"]["icon_size"]) && $sfsi_premium_responsive_icons["settings"]["icon_size"] === "Large") ? 'selected="selected"' : ""; ?>>
                                    Large
                                </option>
                                </option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="options  sfsi_plus_inputSec">
                    <label class="first">
                        <?php _e('Icon width:', SFSI_PLUS_DOMAIN); ?>
                    </label>
                    <div class="field">
                        <div style="display:inline-block; float:left">
                            <select name="sfsi_premium_responsive_icons_settings_icon_width_type" id="sfsi_plus_icons_alignment" class="styled">
                                <option value="Fixed icon width" <?php echo (isset($sfsi_premium_responsive_icons["settings"]) && isset($sfsi_premium_responsive_icons["settings"]["icon_width_type"]) && $sfsi_premium_responsive_icons["settings"]["icon_width_type"] == 'Fixed icon width') ?  'selected="selected"' : ''; ?>>
                                    <?php _e('Fixed icon width', SFSI_PLUS_DOMAIN); ?>
                                </option>
                                <option value="Fully responsive" <?php echo (isset($sfsi_premium_responsive_icons["settings"]) && isset($sfsi_premium_responsive_icons["settings"]["icon_width_type"]) && $sfsi_premium_responsive_icons["settings"]["icon_width_type"] == 'Fully responsive') ?  'selected="selected"' : ''; ?>>
                                    <?php _e('Fully responsive', SFSI_PLUS_DOMAIN); ?>
                                </option>
                            </select>
                        </div>
                        <div class="sfsi_premium_responsive_icons_icon_width" style='display:<?php echo (isset($sfsi_premium_responsive_icons["settings"]["icon_width_type"]) && $sfsi_premium_responsive_icons["settings"]["icon_width_type"] == 'Fully responsive') ? 'none' : 'inline-block'; ?>;float:left'>
                            <span style="width:auto!important"><?php _e('of', SFSI_PLUS_DOMAIN); ?></span>
                            <input type="number" value="<?php echo isset($sfsi_premium_responsive_icons["settings"]) && isset($sfsi_premium_responsive_icons["settings"]["icon_width_size"]) ? $sfsi_premium_responsive_icons["settings"]["icon_width_size"] : 140;  ?>" name="sfsi_premium_responsive_icons_sttings_icon_width_size" style="float:none" />
                            </select>
                            <span class="sfsi_premium_span_after_input"><?php _e('pixels', SFSI_PLUS_DOMAIN); ?></span>
                        </div>
                    </div>
                </div>

                <div class="options sfsi_plus_inputSec sfsi_premium_responsive_mobile" style='display:<?php echo (isset($sfsi_premium_responsive_icons["settings"]["icon_width_type"]) && $sfsi_premium_responsive_icons["settings"]["icon_width_type"] == 'Fully responsive') ? 'none' : 'block'; ?>'>
                    <label class="first">
                        <?php _e('Keep icons responsive on mobile?', SFSI_PLUS_DOMAIN); ?>
                    </label>
                    <div class="field">
                        <div style="display:inline-block">
                            <select name="sfsi_premium_responsive_mobile_icons" id="sfsi_plus_icons_alignment" class="styled">
                                <option value="yes" <?php echo (isset($sfsi_premium_responsive_icons["settings"]) && isset($sfsi_premium_responsive_icons["settings"]["responsive_mobile_icons"]) && $sfsi_premium_responsive_icons["settings"]["responsive_mobile_icons"] == 'yes') ?  'selected="selected"' : ''; ?>>
                                    <?php _e('Yes', SFSI_PLUS_DOMAIN); ?>
                                </option>
                                <option value="no" <?php echo (isset($sfsi_premium_responsive_icons["settings"]) && isset($sfsi_premium_responsive_icons["settings"]["responsive_mobile_icons"]) && $sfsi_premium_responsive_icons["settings"]["responsive_mobile_icons"] == 'no') ?  'selected="selected"' : ''; ?>>
                                    <?php _e('No', SFSI_PLUS_DOMAIN); ?>
                                </option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="options sfsi_plus_inputSec textBefor_icons_fontcolor">
                    <label class="first">
                        <?php _e('Edges:', SFSI_PLUS_DOMAIN); ?>
                    </label>
                    <div class="field">
                        <div style="display:inline-block">
                            <select name="sfsi_premium_responsive_icons_settings_edge_type" id="sfsi_plus_icons_alignment" class="styled">
                                <option value="Round" <?php echo (isset($sfsi_premium_responsive_icons["settings"]) && isset($sfsi_premium_responsive_icons["settings"]["edge_type"]) && $sfsi_premium_responsive_icons["settings"]["edge_type"] == 'Round') ?  'selected="selected"' : ''; ?>>
                                    <?php _e('Round', SFSI_PLUS_DOMAIN); ?>
                                </option>
                                <option value="Sharp" <?php echo (isset($sfsi_premium_responsive_icons["settings"]) && isset($sfsi_premium_responsive_icons["settings"]["edge_type"]) && $sfsi_premium_responsive_icons["settings"]["edge_type"] == 'Sharp') ?  'selected="selected"' : ''; ?>>
                                    <?php _e('Sharp', SFSI_PLUS_DOMAIN); ?>
                                </option>
                            </select>
                        </div>

                        <span style="width:auto!important; <?php echo (isset($sfsi_premium_responsive_icons["settings"]["edge_type"]) && $sfsi_premium_responsive_icons["settings"]["edge_type"] == 'Sharp') ? 'display:none' : ''; ?>"><?php _e('with border radius', SFSI_PLUS_DOMAIN); ?></span>
                        <div style="position:absolute;<?php echo (isset($sfsi_premium_responsive_icons["settings"]["edge_type"]) && $sfsi_premium_responsive_icons["settings"]["edge_type"] == 'Sharp') ? 'display:none' : 'display:inline-block'; ?>">
                            <select name="sfsi_premium_responsive_icons_settings_edge_radius" id="sfsi_plus_icons_alignment" class="styled">
                                <?php for ($i = 1; $i <= 20; $i++) : ?>
                                    <option value="<?php echo $i; ?>" <?php echo (isset($sfsi_premium_responsive_icons["settings"]) && isset($sfsi_premium_responsive_icons["settings"]["edge_radius"]) && $sfsi_premium_responsive_icons["settings"]["edge_radius"] == $i) ?  'selected="selected"' : ''; ?>>
                                        <?php echo $i; ?>
                                    </option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <span style=" <?php echo (isset($sfsi_premium_responsive_icons["settings"]["edge_type"]) && $sfsi_premium_responsive_icons["settings"]["edge_type"] == 'Sharp') ? 'display:none' : ''; ?>"><?php _e('pixels', SFSI_PLUS_DOMAIN); ?></span>

                    </div>
                </div>


                <div class="options">
                    <label class="first">
                        <?php _e('Style:', SFSI_PLUS_DOMAIN); ?>
                    </label>
                    <div class="field">
                        <div style="display:inline-block">
                            <select name="sfsi_premium_responsive_icons_settings_style" id="sfsi_plus_icons_alignment" class="styled">
                                <option value="Flat" <?php echo (isset($sfsi_premium_responsive_icons["settings"]) && isset($sfsi_premium_responsive_icons["settings"]["style"]) && $sfsi_premium_responsive_icons["settings"]["style"] == 'Flat') ?  'selected="selected"' : ''; ?>>
                                    <?php _e('Flat', SFSI_PLUS_DOMAIN); ?>
                                </option>
                                <option value="Gradient" <?php echo (isset($sfsi_premium_responsive_icons["settings"]) && isset($sfsi_premium_responsive_icons["settings"]["style"]) && $sfsi_premium_responsive_icons["settings"]["style"] == 'Gradient') ?  'selected="selected"' : ''; ?>>
                                    <?php _e('Gradient', SFSI_PLUS_DOMAIN); ?>
                                </option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="options sfsi_plus_inputSec">
                    <label class="first">
                        <?php _e('Margin between icons:', SFSI_PLUS_DOMAIN); ?>
                    </label>
                    <div class="field">
                        <input type="number" value="<?php echo isset($sfsi_premium_responsive_icons["settings"]) && isset($sfsi_premium_responsive_icons["settings"]["margin"]) ? $sfsi_premium_responsive_icons["settings"]["margin"] : 0;  ?>" name="sfsi_premium_responsive_icons_settings_margin" style="float:none" />
                        <span class="span_after_input"><?php _e('pixels', SFSI_PLUS_DOMAIN); ?></span>
                    </div>
                </div>

                <div class="options sfsi_plus_inputSec">
                    <label class="first">
                        <?php _e('Margins:', SFSI_PLUS_DOMAIN); ?>
                    </label>
                    <div class="field">
                        <span class="span_before_input" style="width: 120px;"><?php _e('Above Icon', SFSI_PLUS_DOMAIN); ?></span>
                        <input type="number" value="<?php echo isset($sfsi_premium_responsive_icons["settings"]) && isset($sfsi_premium_responsive_icons["settings"]["margin_above"]) ? $sfsi_premium_responsive_icons["settings"]["margin_above"] : 0;  ?>" name="sfsi_premium_responsive_icons_settings_margin_above" style="float:none" />
                        <span class="span_after_input"><?php _e('px', SFSI_PLUS_DOMAIN); ?></span>
                    </div>
                    <label class="first">
                    </label>
                    <div class="field">
                        <span class="span_before_input" style="width: 120px;"><?php _e('Below Icon', SFSI_PLUS_DOMAIN); ?></span>
                        <input type="number" value="<?php echo isset($sfsi_premium_responsive_icons["settings"]) && isset($sfsi_premium_responsive_icons["settings"]["margin_below"]) ? $sfsi_premium_responsive_icons["settings"]["margin_below"] : 0;  ?>" name="sfsi_premium_responsive_icons_settings_margin_below" style="float:none" />
                        <span class="span_after_input"><?php _e('px', SFSI_PLUS_DOMAIN); ?></span>
                    </div>
                </div>

                <div class="options sfsi_options">
                    <label class="first">
                        <?php _e('Text on icons:', SFSI_PLUS_DOMAIN); ?>
                    </label>
                    <div class="field">
                        <div style="display:inline-block">
                            <select name="sfsi_premium_responsive_icons_settings_text_align" id="sfsi_plus_icons_alignment" class="styled">
                                <option value="Left aligned" <?php echo isset($sfsi_premium_responsive_icons["settings"]) && isset($sfsi_premium_responsive_icons["settings"]["text_align"]) && $sfsi_premium_responsive_icons["settings"]["text_align"] == 'Left aligned' ?  'selected="selected"' : ''; ?>>
                                    <?php _e('Left aligned', SFSI_PLUS_DOMAIN); ?>
                                </option>
                                <option value="Centered" <?php echo (isset($sfsi_premium_responsive_icons["settings"]) && isset($sfsi_premium_responsive_icons["settings"]["text_align"]) && $sfsi_premium_responsive_icons["settings"]["text_align"] == 'Centered') ?  'selected="selected"' : ''; ?>>
                                    <?php _e('Centered', SFSI_PLUS_DOMAIN); ?>
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            </li>
            <li class="sfsi_premium_responsive_icon_option_li" style="<?php echo ($option8['sfsi_plus_display_button_type'] !== 'responsive_button') ?  'display:none' : ''; ?>">
                <label class="heading-label">
                    <?php _e('Share count', SFSI_PLUS_DOMAIN); ?>
                </label>
                <div class="options" style="width: 90%;">
                    <label style="width:auto!important">
                        <?php _e('Show the total share count on the left of your icons. It will only be visible if the individual counts are set up under <a href="#" onclick="event.preventDefault();sfsi_premium_scroll_to_div(\'ui-id-9\')" >question 5</a>.', SFSI_PLUS_DOMAIN); ?>
                    </label>

                </div>
                <ul class="sfsiplus_tab_3_icns sfsiplus_shwthmbfraftr" <?php echo ($option4['sfsi_plus_display_counts'] != "yes") ? 'style="display: none";' : ''; ?>>

                    <li style="width:30%!important" class="col-1-3" onclick="sfsi_premium_responsive_icon_counter_tgl(null, 'sfsi_premium_responsive_icon_share_count', this);sfsi_premium_responsive_toggle_count();" class="clckbltglcls">
                        <input name="sfsi_plus_responsive_icon_show_count" <?php echo ($sfsi_premium_responsive_icons['settings']['show_count'] == 'yes') ?  'checked="true"' : ''; ?> type="radio" value="yes" class="styled" />
                        <label class="labelhdng4">
                            <?php _e('Yes', SFSI_PLUS_DOMAIN); ?>
                        </label>
                    </li>
                    <li style="width:30%!important" class="col-1-3" onclick="sfsi_premium_responsive_icon_counter_tgl('sfsi_premium_responsive_icon_share_count', null, this);sfsi_premium_responsive_toggle_count();" class="clckbltglcls">
                        <input name="sfsi_plus_responsive_icon_show_count" <?php echo ($sfsi_premium_responsive_icons['settings']['show_count'] == 'no') ?  'checked="true"' : ''; ?> type="radio" value="no" class="styled" />
                        <label class="labelhdng4">
                            <?php _e('No', SFSI_PLUS_DOMAIN); ?>
                        </label>
                    </li>
                    <div class="sfsi_premium_responsive_icon_share_count" style="<?php echo (isset($sfsi_premium_responsive_icons['settings']) && isset($sfsi_premium_responsive_icons['settings']['show_count']) && $sfsi_premium_responsive_icons['settings']['show_count'] == 'no') ? 'display:none' : ''; ?>">
                        <div class="options sfsi_plus_inputSec textBefor_icons_fontcolor">
                            <label class="first">
                                <?php _e('Background color:', SFSI_PLUS_DOMAIN); ?>
                            </label>
                            <input name="sfsi_plus_responsive_counter_bg_color" id="sfsi_plus_textBefor_icons_fontcolor" data-default-color="#000000" type="text" value="<?php echo ($sfsi_premium_responsive_icons['settings']['counter_bg_color'] != '') ? $sfsi_premium_responsive_icons['settings']['counter_bg_color'] : '#000000'; ?>" />
                        </div>
                        <div class="options sfsi_plus_inputSec textBefor_icons_fontcolor">
                            <label class="first">
                                <?php _e('Font color (of counts):', SFSI_PLUS_DOMAIN); ?>
                            </label>
                            <input name="sfsi_plus_responsive_counter_color" id="sfsi_plus_textBefor_icons_fontcolor" data-default-color="#aaaaaa" type="text" value="<?php echo (isset($sfsi_premium_responsive_icons['settings']['counter_color']) && $sfsi_premium_responsive_icons['settings']['counter_color'] != '') ? $sfsi_premium_responsive_icons['settings']['counter_color'] : '#aaaaaa'; ?>" />
                        </div>
                        <div class="options sfsi_plus_inputSec">
                            <label class="first">
                                <?php _e('Share count text:', SFSI_PLUS_DOMAIN); ?>
                            </label>
                            <div class="field">
                                <input name="sfsi_plus_responsive_counter_share_count_text" type="text" value="<?php echo (isset($sfsi_premium_responsive_icons['settings']['share_count_text']) && $sfsi_premium_responsive_icons['settings']['share_count_text'] != '') ? $sfsi_premium_responsive_icons['settings']['share_count_text'] : 'SHARES'; ?>" />
                            </div>
                        </div>
                    </div>
                </ul>
            </li>

        </ul>
    </div>
</li>