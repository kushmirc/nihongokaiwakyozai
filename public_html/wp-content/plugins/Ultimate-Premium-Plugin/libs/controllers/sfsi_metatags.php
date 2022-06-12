<?php
function sfsi_is_yoast_plugin_active(){

	$active = false;

	if(is_plugin_active('wordpress-seo/wp-seo.php')){
		return true;
	}

	return $active;
}

// Get settings from Question 6 if user wants to allow our plugins's meta tags to be added, if got value no then add meta tags 	

$option5 =  unserialize(get_option('sfsi_premium_section5_options',false));	
 
$defaultSettingForAddingMetaTags = (sfsi_plus_checkmetas()) ? "yes" : "no";  

$sfsi_plus_disable_usm_og_meta_tags = (isset($option5['sfsi_plus_disable_usm_og_meta_tags'])) ? $option5['sfsi_plus_disable_usm_og_meta_tags']: $defaultSettingForAddingMetaTags;

$priority = ($sfsi_plus_disable_usm_og_meta_tags=="no") ? PHP_INT_MAX:1;

$og_tag_priority = ($sfsi_plus_disable_usm_og_meta_tags=="no") ? 1:PHP_INT_MAX;
/* echo "<pre>";print_r($option5); echo "</pre>"; */
// Disable metatags from jetpack if our tags are used.

if($sfsi_plus_disable_usm_og_meta_tags=="no"){
        add_filter('jetpack_enable_open_graph','__return_false');
        remove_action( 'wp_head',      'wp_oembed_add_discovery_links'         );
}

/**------------------ Twitter card functionality STARTS ------------------------------------------------------------------**/

add_action('wp_head', 'ultimatepremium_twitter_metatags');
function ultimatepremium_twitter_metatags()
{
	$socialObj 		= new sfsi_plus_SocialHelper();
	$post_id 	    = $socialObj->sfsi_get_the_ID();
	$curr_post_type = get_post_type($post_id);

	if(is_front_page()){
		$home_post_id = get_option('page_on_front');
		if("0"==$home_post_id){
			$post_id=$home_post_id;
		}
	}
	if(!empty($post_id)){

		$option1 =  unserialize(get_option('sfsi_premium_section1_options',false));
		$option2 =  unserialize(get_option('sfsi_premium_section2_options',false));
		$option5 =  unserialize(get_option('sfsi_premium_section5_options',false));		

		// Get settings set by user
		$twtCond 	 =  isset($option5['sfsi_plus_twitter_twtAddCard']) && $option5['sfsi_plus_twitter_twtAddCard']=="yes";
		$condDesktop =  isset($option1['sfsi_plus_twitter_mobiledisplay']) && $option1['sfsi_plus_twitter_mobiledisplay']=="yes" && wp_is_mobile() && $twtCond;
		$condMobile  =  isset($option1['sfsi_plus_twitter_display']) && $option1['sfsi_plus_twitter_display']=="yes" && $twtCond;		
		$should_add_meta = !isset($option5["sfsi_plus_disable_usm_og_meta_tags"]) || "no" === $option5["sfsi_plus_disable_usm_og_meta_tags"];
		if( ($condDesktop || $condMobile) && $should_add_meta) {

			$twitter_desc  	   = sfsi_get_description($post_id);			if($option5['sfsiSocialDescription'] != ""){				$twitter_desc  = $option5['sfsiSocialDescription'];			}
			$twitter_image 	   = ""; // Get featured Image			if($option5['sfsiSocialMediaImage'] != ""){				$twitter_image 	   = $option5['sfsiSocialMediaImage']; 			}

			$twitter_title     = $socialObj->sfsi_get_custom_tweet_title($option5);			if($option5['sfsiSocialtTitleTxt'] != ""){				$twitter_title = $option5['sfsiSocialtTitleTxt'];			}
			
			// Add custom image added  for this post
			$noPicUrl   = SFSI_PLUS_PLUGURL."images/no-image.jpg";
			
			if(false != isset($option5['sfsi_plus_social_sharing_options']) && "global"== $option5['sfsi_plus_social_sharing_options']){
				$twitter_image = $option5['sfsiSocialMediaImage'];
			}else{
				$sfsiSocialMediaImage = get_post_meta( $post_id,'sfsi-social-media-image',true);
				if(isset($sfsiSocialMediaImage) && strlen($sfsiSocialMediaImage)>0 && $sfsiSocialMediaImage!=$noPicUrl){
					$twitter_image = $sfsiSocialMediaImage;    	
				}else{
					if( isset($option5["sfsi_premium_featured_image_as_og_image"]) && "yes"==($option5["sfsi_premium_featured_image_as_og_image"])){
			    		$twitter_image 	   = wp_get_attachment_url(get_post_thumbnail_id($post_id));
					}
				}
				if($twitter_image == ""){
					$twitter_image = $option5['sfsiSocialMediaImage'];
				}
			}
			if($twitter_image == ""){
				$twitter_image = $noPicUrl;
			}
			// if(isset($sfsiSocialMediaImage) && strlen($sfsiSocialMediaImage)>0){
			// 	$noPicUrl   = SFSI_PLUS_PLUGURL."images/no-image.jpg";		       	
			// 	$twitter_image = ($sfsiSocialMediaImage!=$noPicUrl) ? $sfsiSocialMediaImage:$twitter_image;       	
			// }
			// // Get global image added
			// else if(isset($option5['sfsiSocialMediaImage']) && !empty($option5['sfsiSocialMediaImage'])){
			// 	$twitter_image = esc_url($option5['sfsiSocialMediaImage']);   
			// }

			// Add custom description added for this post
			$sfsiSocialDesc      = get_post_meta( $post_id,'sfsi-fbGLTw-description',true);
			if(isset($sfsiSocialDesc) && strlen($sfsiSocialDesc)>0){
				$twitter_desc  = $sfsiSocialDesc;
			}  

			$dbUserName		   = $option5['sfsi_plus_twitter_card_twitter_handle'];
			$twitter_card_type = $option5['sfsi_plus_twitter_twtCardType'];			
			$twitter_site  	   = (preg_match('/@/',$dbUserName))? $dbUserName: "@".$dbUserName;
			$twitter_creator   = (preg_match('/@/',$dbUserName))? $dbUserName: "@".$dbUserName;
			$twitter_url  	   =  get_the_permalink($post_id);						/* echo "<pre>";
			print_r($option5);								echo "</pre>";*/
			$cards_meta_data=array(
				"twitter:card" 		  => $twitter_card_type,
				"twitter:site" 		  => $twitter_site,
				"twitter:creator"	  => $twitter_creator,
				"twitter:url"		  => $twitter_url				  
			);

			if(isset($twitter_title) && strlen($twitter_title)>0){
				$cards_meta_data["twitter:title"] = stripslashes($twitter_title);				
			}
			if(isset($twitter_desc) && strlen($twitter_desc)>0){
				$cards_meta_data["twitter:description"] = stripslashes($twitter_desc);
			}
			if(isset($twitter_image) && strlen($twitter_image)>0){
				$cards_meta_data["twitter:image"] = $twitter_image."?".strtotime("now");				
			}				
			?>
			<!-- Twitter Cards Meta by USM  STARTS-->				<?php /* echo "<pre>";print_r($cards_meta_data);echo "</pre>"; */?>
				<?php
				foreach($cards_meta_data as $name=>$content){
					echo '<meta name="'.esc_attr($name).'" content="'.esc_attr($content).'" />'; echo "\r\n";
				} ?>
			<!-- Twitter Cards Meta by USM  CLOSES-->
				<?php 			
		}

		// Get post types for which user wants to show twitter cards
		// if(isset($option5['sfsi_custom_social_data_post_types_data'])){
			
		// 	$sfsi_custom_social_data_post_types_data = unserialize($option5['sfsi_custom_social_data_post_types_data']);

		// 	if(count($sfsi_custom_social_data_post_types_data)>0){

		// 		// CODE TO REMOVE IN VERSION 2.8
		// 		if(isset($sfsi_custom_social_data_post_types_data[0]) && is_array($sfsi_custom_social_data_post_types_data[0])){
		// 			$sfsi_custom_social_data_post_types_data = $sfsi_custom_social_data_post_types_data[0];
		// 		}

		// 		if(isset($curr_post_type)){
					
	// 			// Check if current post type set by user to Show twitter Card
		// 			if(in_array($curr_post_type, $sfsi_custom_social_data_post_types_data)){



		// 			} // post type condition CLOSES
		// 		}

		// 	}
		// }

	}
}


/*------------------- Twitter card functionality ENDS -------------------------------------------------------------------**/

function usm_premium_get_og_image_tag($post_id, $option5 = null){
	if($post_id){
		if($option5 == null){
			$option5 	=  unserialize(get_option('sfsi_premium_section5_options',false)); 
		}

	    // Add custom image added  for this post
		$sfsiSocialMediaImage = get_post_meta( $post_id,'sfsi-social-media-image',true);
	    if(isset($sfsiSocialMediaImage) && strlen($sfsiSocialMediaImage)>0){
		    $feat_image    = $sfsiSocialMediaImage;
		    $attachment_id = attachment_url_to_postid($feat_image);
	    }

	    else if(false != isset($option5['sfsi_plus_social_sharing_options']) && "global"== $option5['sfsi_plus_social_sharing_options'] && isset($option5['sfsiSocialMediaImage']) && strlen($option5['sfsiSocialMediaImage'])>0){
		    $feat_image    = $option5['sfsiSocialMediaImage'];  	
		    $attachment_id = attachment_url_to_postid($feat_image);
	    }
	    else{
	    	if( isset($option5["sfsi_premium_featured_image_as_og_image"]) && "yes"==($option5["sfsi_premium_featured_image_as_og_image"])){
	    		$attachment_id  = get_post_thumbnail_id($post_id);
				$original_image = wp_get_attachment_image_src($attachment_id,'original');
				if(is_array($original_image) && isset($original_image[0])){
					$feat_image = $original_image[0];
				}
			}
	    }
	    if(isset($feat_image) && !empty($feat_image)){

			echo "<!-- Open graph image tags added by USM  STARTS-->".PHP_EOL;

				if (preg_match('/https/',$feat_image))
				{
					echo '<meta property="og:image:secure_url" content="'.$feat_image.'"/>';
				}
				if(sfsi_is_yoast_plugin_active()){

			    	add_filter('wpseo_opengraph_image',function()use($feat_image){
			    		return $feat_image;
			    	});
			    }
			echo '<meta property="og:image" content="'.$feat_image.'" />'.PHP_EOL;

					if($attachment_id >0){

					   $metadata = wp_get_attachment_metadata( $attachment_id );

					   if(isset($metadata) && !empty($metadata))
					   {
						   if(isset($metadata['sizes']['post-thumbnail']))
						   {
								$image_type = $metadata['sizes']['post-thumbnail']['mime-type'];
						   }
						   else
						   {
								$image_type = '';  
						   }
						   if(isset($metadata['width']))
						   {
								$width = $metadata['width'];
						   }
						   else
						   {
								$width = '';  
						   }
						   if(isset($metadata['height']))
						   {
								$height = $metadata['height'];
						   }
						   else
						   {
								$height = '';  
						   }
					   }
					   else
					   {
							$image_type = '';
							$width = '';
							$height = '';  
					   } 
					   echo '<meta property="og:image:type" content="'.$image_type.'"/>'.PHP_EOL;
					   echo '<meta property="og:image:width" content="'.$width.'"/>'.PHP_EOL;
					   echo '<meta property="og:image:height" content="'.$height.'"/>'.PHP_EOL;
					}

			echo "<!-- Open graph image tags added by USM CLOSES-->";

	    }
 
	}
}

add_action('wp_head', 'ultimateplusfbmetatags',$priority);
function ultimateplusfbmetatags()
{	
	// Get settings from Question 6 if user wants to allow our plugins's meta tags to be added, if got value no then add meta tags
	$option5 =  unserialize(get_option('sfsi_premium_section5_options',false));	
	$sfsi_plus_disable_usm_og_meta_tags = (isset($option5['sfsi_plus_disable_usm_og_meta_tags'])) ? $option5['sfsi_plus_disable_usm_og_meta_tags']: "no";

	$socialObj   = new sfsi_plus_SocialHelper();
	
	$post_id     = $socialObj->sfsi_get_the_ID();
	
	if(is_front_page()){
		$home_post_id = get_option('page_on_front');
		if("0"==$home_post_id){
			$post_id=$home_post_id;
		}
	}

	$feed_id = sanitize_text_field(get_option('sfsi_premium_feed_id'));
	$verification_code = get_option('sfsi_premium_verificatiom_code');

	if(!empty($feed_id) && !empty($verification_code) && $verification_code != "no" )
	{
	    echo '<meta name="follow.it-verification-code-'.$feed_id.'" content="'.$verification_code.'"/>';
	}
	if($sfsi_plus_disable_usm_og_meta_tags=="no")
	{	
	   

       // Check if global sharing image/ description setting is on in Question 6
       $isGlobalSharingOn   = (isset($option5['sfsi_plus_social_sharing_options']) && !empty($option5['sfsi_plus_social_sharing_options']) && strtolower($option5['sfsi_plus_social_sharing_options']) == "global") ? true: false;
       $title = "";
		// Get global description added in Question 6
	   if($isGlobalSharingOn){

	   		if(isset($option5['sfsiSocialtTitleTxt']) && !empty($option5['sfsiSocialtTitleTxt']) && strlen($option5['sfsiSocialtTitleTxt'])>0){
	   			$title = $option5['sfsiSocialtTitleTxt'];
			}
	   }
	   else{
		   $post = get_post( $post_id );
		   
		   $title = str_replace('"', "", strip_tags(get_the_title($post_id)));

	       // Add custom title added for this post
	       $sfsiSocialTitle     = get_post_meta( $post_id,'sfsi-fbGLTw-title',true);
	       $sfsiSocialDesc      = get_post_meta( $post_id,'sfsi-fbGLTw-description',true);
	       if(isset($sfsiSocialTitle) && strlen($sfsiSocialTitle)>0){
				$title  = $sfsiSocialTitle;				   
		   }
	       // Get global title set in Question 6
	       else if(isset($option5['sfsiSocialtTitleTxt']) && strlen($option5['sfsiSocialtTitleTxt'])>0){
	       		$title  = $option5['sfsiSocialtTitleTxt'];
	       }    
	   }   	

	   $description	= "";

		// Get global description added in Question 6
	   if($isGlobalSharingOn){

	   		if(isset($option5['sfsiSocialDescription']) && strlen($option5['sfsiSocialDescription'])>0){
	   			$description = sfsi_filter_text($option5['sfsiSocialDescription']);
			}
	   }
	   // Add custom description added for this post
       else if(isset($sfsiSocialDesc) && strlen($sfsiSocialDesc)>0){
       		$description  = sfsi_filter_text($sfsiSocialDesc);
        }         
	   else if(isset($post->post_excerpt) && strlen($post->post_excerpt)>0){
	   		$description = sfsi_filter_text($post->post_excerpt);
	   }
	   else if(isset($post->post_content) && strlen($post->post_content)>0){
	   		$description = sfsi_get_description($post_id);
	   }
     	
	    $description = (strlen($description)>0) ? wp_kses_post(trim($description)): $description;	   

	    $description = stripslashes(html_entity_decode(strip_tags($description), ENT_NOQUOTES,'UTF-8'));
	    $title 		 = stripslashes(html_entity_decode(strip_tags($title), ENT_NOQUOTES,'UTF-8'));

	    $url = get_permalink($post_id);
	
		//checking for disabling viewport meta tag
		if(isset($option5['sfsi_plus_disable_viewport']))
		{
			$sfsi_plus_disable_viewport = $option5['sfsi_plus_disable_viewport'];	 
		}
		else
		{
			$sfsi_plus_disable_viewport = 'no';
		}
		if($sfsi_plus_disable_viewport == 'no')
		{
	   		echo ' <meta name="viewport" content="width=device-width, initial-scale=1">';
		} ?>

		<!-- Open graph title, url & description tags added by USM STARTS -->
		<?php			
	  	echo '<meta property="og:description" content="'.$description.'"/>'.PHP_EOL;
	    echo '<meta property="og:url" content="'.$url.'"/>'.PHP_EOL;
	   	echo '<meta property="og:title" content="'.$title.'"/>'.PHP_EOL;
	   	?>
		<!-- Open graph title, url & description tags added by USM CLOSES -->
		<?php 	   	   
	}
}

add_action('wp_head','utlimate_premium_add_fb_og_image_tag',$og_tag_priority);
function utlimate_premium_add_fb_og_image_tag(){

	// Get settings from Question 6 if user wants to allow our plugins's meta tags to be added, if got value no then add meta tags
	$option5 =  unserialize(get_option('sfsi_premium_section5_options',false));	
	// var_dump($option5["sfsi_plus_social_sharing_options"]);die();
	$sfsi_plus_disable_usm_og_meta_tags = (isset($option5['sfsi_plus_disable_usm_og_meta_tags'])) ? $option5['sfsi_plus_disable_usm_og_meta_tags']: "no";
	
	$isGlobalSharingOn   = (isset($option5['sfsi_plus_social_sharing_options']) && !empty($option5['sfsi_plus_social_sharing_options']) && strtolower($option5['sfsi_plus_social_sharing_options']) == "global") ? true: false;
	if($isGlobalSharingOn){
		if("no"==$sfsi_plus_disable_usm_og_meta_tags){
		    $feat_image    = $option5['sfsiSocialMediaImage'];       	
		    $attachment_id = attachment_url_to_postid($feat_image);
			if(isset($feat_image) && !empty($feat_image)){

				echo "<!-- Open graph image tags added by USM  STARTS-->".PHP_EOL;

				if (preg_match('/https/',$feat_image))
				{
					echo '<meta property="og:image:secure_url" content="'.$feat_image.'"/>';
				}

				echo '<meta property="og:image" content="'.$feat_image.'" />'.PHP_EOL;

					if($attachment_id >0){

					   $metadata = wp_get_attachment_metadata( $attachment_id );

					   if(isset($metadata) && !empty($metadata))
					   {
						   if(isset($metadata['sizes']['post-thumbnail']))
						   {
								$image_type = $metadata['sizes']['post-thumbnail']['mime-type'];
						   }
						   else
						   {
								$image_type = '';  
						   }
						   if(isset($metadata['width']))
						   {
								$width = $metadata['width'];
						   }
						   else
						   {
								$width = '';  
						   }
						   if(isset($metadata['height']))
						   {
								$height = $metadata['height'];
						   }
						   else
						   {
								$height = '';  
						   }
					   }
					   else
					   {
							$image_type = '';
							$width = '';
							$height = '';  
					   } 
					   echo '<meta property="og:image:type" content="'.$image_type.'"/>'.PHP_EOL;
					   echo '<meta property="og:image:width" content="'.$width.'"/>'.PHP_EOL;
					   echo '<meta property="og:image:height" content="'.$height.'"/>'.PHP_EOL;
					}

			echo "<!-- Open graph image tags added by USM CLOSES-->";

		    }
		}
	}else{
		$socialObj   = new sfsi_plus_SocialHelper();
		$post_id     = $socialObj->sfsi_get_the_ID();
		if(is_front_page()&&empty($post_id)){
			$home_post_id = get_option('page_on_front');
			if("0"==$home_post_id){
				$post_id=$home_post_id;
			}
		}
		if($sfsi_plus_disable_usm_og_meta_tags=="no" && !empty($post_id)){
			usm_premium_get_og_image_tag($post_id, $option5);	 		
		}
	}	
}


// var_dump(function_exists('is_amp_endpoint') && is_amp_endpoint(),function_exists('is_amp_endpoint') && is_amp_endpoint());
?>
