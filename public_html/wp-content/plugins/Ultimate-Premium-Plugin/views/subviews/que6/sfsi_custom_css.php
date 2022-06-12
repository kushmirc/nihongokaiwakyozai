<?php 

if(isset($option5['sfsi_plus_custom_css']) && is_string($option5['sfsi_plus_custom_css'])){
    $option5['sfsi_plus_custom_css'] =	(isset($option5['sfsi_plus_custom_css']) && !empty($option5['sfsi_plus_custom_css'])) ? unserialize($option5['sfsi_plus_custom_css']) :'';
}else if(isset($option5['sfsi_plus_custom_css']) && is_array($option5['sfsi_plus_custom_css'])){
    $option5['sfsi_plus_custom_css'] =	(isset($option5['sfsi_plus_custom_css']) && !empty($option5['sfsi_plus_custom_css'])) ? ($option5['sfsi_plus_custom_css']) :'';
}

?>



<div class="row customcss">
    	<h4>
            <?php  _e( 'Custom CSS (the front end)', SFSI_PLUS_DOMAIN ); ?>
        </h4>
         <p>
             <?php  _e( 'Here you can define your custom CSS, which will overwrite the plugin\'s CSS (the added CSS will only be used on the front end). Please use "!important" so that it actually overwrites the plugin CSS', SFSI_PLUS_DOMAIN ); ?>
         </p>
		
         <textarea name="sfsi_plus_custom_css" id="sfsi_plus_custom_css" type="text" class="add_txt" placeholder="" /><?php echo $option5['sfsi_plus_custom_css']; ?></textarea>
</div>