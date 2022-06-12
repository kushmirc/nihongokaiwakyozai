<?php
if ( ! class_exists( 'License_Manager') ) {
	
   class License_Manager {

		protected $license_page      	= '';
		protected $license_menu      	= '';
		protected $license_api_manager  = '';
		protected $license_renew_text	= '';	

		// name of network whose licensing system we are using i.e. ultimatelyscoial, sellcodes. This will be used as key to uniquely identification of licensing

		/**
		 * Class constructor.
		 *
		 * @uses trailingslashit()
		 * @param string  $_api_url      The URL pointing to the custom API endpoint.
		 * @param string  $item_id 		 Plugin's product id/name.
		 * @param string   $license_page  Optional data to send with API calls.
		 */
		public function __construct($license_page,$license_menu,$license_api_manager,$license_renew_text) {

			$this->license_page  	  = $license_page;
			$this->license_menu  	  = $license_menu;
			$this->license_api_manager= $license_api_manager;
			$this->license_renew_text = $license_renew_text;

			add_action('admin_init', array(&$this,'register_option'));
			add_action('admin_init', array(&$this,'activate_license'));
			add_action('admin_init', array(&$this,'deactivate_license'));
			add_action('admin_notices', array(&$this,'admin_license_notices'));								
		}

		public function sanitize_license($new){
			
			$license_api_name = get_sfsi_active_license_api_name();

			$old = get_option( $license_api_name.'_license_key' );
			
			if(isset($old) && !empty($old) && isset($new) && !empty($new) && $old != $new )
			{
				// new license has been entered, so must reactivate
				delete_option($license_api_name.'_license_status');
				delete_option($license_api_name.'_license_expiry');
			}
			return $new;
		}

		public function register_option()
		{			
			// creates our settings in the options table
			$license_api_name = get_sfsi_active_license_api_name();
			register_setting($license_api_name.'_license', $license_api_name.'_license_key', array($this, 'sanitize_license') );
		}


		public static function validate_license(){

			$isLicenseValid = false;
			
			$license = trim(get_option(get_sfsi_active_license_api_name().'_license_key'));

			if(isset($license) && !empty($license)){

				$licenseStatus = trim(get_option(get_sfsi_active_license_api_name().'_license_status'));

				if(isset($licenseStatus) && !empty($licenseStatus) && "valid" == strtolower($licenseStatus)){
					$isLicenseValid = true;
				}
			}

			return $isLicenseValid;
		}


		public function activate_license(){

			$license_api_name  = get_sfsi_active_license_api_name();
			$license_menu_slug = $this->license_menu->get_menu_slug();

			if( isset($_POST[$license_api_name.'_license_activate'] ) && !empty($_POST[$license_api_name.'_license_key']) )
			{
				update_option($license_api_name.'_license_key', trim($_POST[$license_api_name.'_license_key']) );
				
				// run a quick security check
			 	if( ! check_admin_referer( $license_api_name.'_nonce', $license_api_name.'_nonce' ) )
					return; // get out if we didn't click the Activate button

				// retrieve the license from the database
				$license_key = trim(get_option( $license_api_name.'_license_key' ) );
				$message = $this->license_api_manager->activate_license($license_key);

				//Check if anything passed on a message constituting a failure
				$base_url = admin_url( 'plugins.php?page='.$license_menu_slug);
				
				if (is_string($message) && !empty($message))
				{
					$redirect = add_query_arg( array( 'sl_activation' => 'false', 'message' => urlencode( $message ) ), $base_url );
					wp_redirect( $redirect );
					exit();
				}
				
				$redirect = add_query_arg( array( 'sl_activation' => 'true', 'message' => 'true'), $base_url );
				
				update_option( $license_api_name.'_license_status', $message->license );
				update_option( $license_api_name.'_license_activated', 'yes');
				update_option( $license_api_name.'_license_expiry', $message->expires);
						
				wp_redirect($redirect);
				exit();

			}
		}

		public function deactivate_license(){
		
			$license_api_name  = get_sfsi_active_license_api_name();
			$license_menu_slug = $this->license_menu->get_menu_slug();

			if( isset( $_POST[$license_api_name.'_license_deactivate'] ) && !empty($_POST[$license_api_name.'_license_key']) )
			{
				update_option($license_api_name.'_license_key', trim($_POST[$license_api_name.'_license_key']) );
				
				// run a quick security check
			 	if( ! check_admin_referer($license_api_name.'_nonce',$license_api_name.'_nonce' ) )
					return; // get out if we didn't click the Activate button

				// retrieve the license from the database
				$license_key = trim(get_option($license_api_name.'_license_key' ) );

				$message = $this->license_api_manager->deactivate_license($license_key);
				
				$base_url = admin_url( 'plugins.php?page='.$license_menu_slug);
				
				if (!empty($message))
				{
					$redirect = add_query_arg( array( 'sl_activation' => 'false', 'message' => urlencode($message) ), $base_url );
					wp_redirect( $redirect );
					exit();
				}
				else{

					delete_option($license_api_name.'_license_status');
					delete_option($license_api_name.'_license_activated');
					delete_option($license_api_name.'_license_expiry');

					$message = _('Your license is deactivated.');

					$redirect = add_query_arg( array('sl_activation' => 'success','message' => urlencode($message) ), $base_url );
					wp_redirect($redirect);
					exit();			
				}						
			}
		}

		public function admin_license_notices(){

			$license_api_name  = get_sfsi_active_license_api_name();

			if (isset($_GET['sl_activation']) && !empty($_GET['message']))
			{
				switch( $_GET['sl_activation'] )
				{
					case 'false':
						$message = urldecode( $_GET['message'] );
						?>
						<div class="error">
							<p><?php echo $message; ?></p>
						</div>
						<?php
					break;

					case 'true':					
						$link = '<a href="'.admin_url( 'admin.php?page=sfsi-plus-options').'">Click here</a>';
						$message = "Your license is activated now. Please go to the plugin's settings page to configure it: ".$link;
						?>
						<div class="notice notice-success">
							<p><?php echo $message; ?></p>
						</div>
						<?php
					break;

					case "success":
						$message = urldecode( $_GET['message'] );
						?>
						<div class="error">
							<p><?php echo $message; ?></p>
						</div>
						<?php					
				}
			}
			
			$expiration = get_option($license_api_name.'_license_expiry');
			
			$license = trim(get_option($license_api_name.'_license_key'));

			if(isset($expiration) && !empty($expiration) && "unlimited" !== strtolower($expiration))
			{
				$expiryDate 	= strtotime($expiration);
				$currentDate	= strtotime(date("Y-m-d H:i:s"));
				
				if($expiryDate <= $currentDate)
				{ 
					$echo_text = '<div class="error sfsi_premium_error vertical-align">
						<p>Your Ultimate Social Media Plugin license expired on '.date('d F Y', $expiryDate).'. ';
					if(ULTIMATELYSOCIAL_LICENSING === $license_api_name){
						$echo_text .=  'Please renew it here: <a href="'.$this->renewLink().'" target="_blank">'.$this->license_renew_text.'</a>';
					}else{
						$echo_text .=  ' Renew it by logging into your <a href="https://sellcodes.com/" target="_blank" >Sellcodes.com</a> account and click on the resume-option under your purchases. Or get a new license here: <a href="https://sellcodes.com/XdHlrQnc" target="_blank">https://sellcodes.com/XdHlrQnc</a>';
					}
					$screen = get_current_screen();
					$echo_text .="</p>";
					if(isset($screen->id) && 'toplevel_page_sfsi-plus-options'== $screen->id){
						$echo_text .='<button class="btn btn-success" id="sfsi_premium_recheck_license" data-nonce="'.(wp_create_nonce('sfsi_premium_recheck_license')).'">Re-check license validity</button>';
					}else{
						$echo_text .=' Go to <a href="/wp-admin/admin.php?page=sfsi-plus-options" >Plugin\'s settings page</a> to recheck the license validaty';
					}
					$echo_text .= "</div>";
					echo $echo_text;
				}
			}
		}

		public static function supportLink($addDebugData=false){

		    $license_api_name = (false === get_option('sfsi_active_license_api_name')) ? SELLCODES_LICENSING: get_option('sfsi_active_license_api_name');
		    $license 		  = trim(get_option($license_api_name.'_license_key'));

		    $supportLink = 'javascript:void(0)';

			$storeUrl 	 = 'https://www.ultimatelysocial.com';
			$siteUrl 	 = get_bloginfo('url');

			$base64DebugData = "";

			if(false != $addDebugData){
				$base64DebugData 	= License_Manager::getDebugData();
			}
			
		    if(ULTIMATELYSOCIAL_LICENSING === $license_api_name){

		    	$supportLink = $storeUrl.'?url='.$siteUrl.'&debugdata='.$base64DebugData.'&license='.$license.'#supportRequest';
		    }

		    else if(SELLCODES_LICENSING === $license_api_name){

		    	$supportLink = $storeUrl.'?product_id='.SELLCODES_PRODUCT.'&debugdata='.$base64DebugData.'&url='.$siteUrl.'&license='.$license.'#supportRequest';
		    }

		    return $supportLink;   
		}

		public static function getDebugData($format=null){

			$arrDebugData 	 = sfsiSystemInfo::getInstance()->showInfo();

			switch ($format) {
				case 1:
					return $arrDebugData; //  array
					break;

				case 2:
					return json_encode($arrDebugData); //  json string
					break;
				
				default:
					return base64_encode(json_encode($arrDebugData)); // json string converted to base64
					break;
			}

		}

		private function renewLink(){

		    $license_api_name = (false === get_option('sfsi_active_license_api_name')) ? SELLCODES_LICENSING: get_option('sfsi_active_license_api_name');
		    $license 		  = trim(get_option($license_api_name.'_license_key'));

		    $renewLink = 'javascript:void(0)';

		    if(ULTIMATELYSOCIAL_LICENSING === $license_api_name){
		    	$renewLink = 'https://www.ultimatelysocial.com/checkout/?edd_license_key='.$license.'&download_id=150';
		    }
		    else if(SELLCODES_LICENSING === $license_api_name){
		    	$renewLink = 'https://sellcodes.com/XdHlrQnc';
		    } 
		    return $renewLink;   
		}				
  }

}
?>