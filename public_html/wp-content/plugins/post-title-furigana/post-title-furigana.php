<?php
/*
 Plugin Name: Post Title Furigana
 Plugin URI: http://www.sysbird.jp/wptips/post-title-furigana/
 Description: Automatically set Japanese Reading title into the custom field.
 Author: sysbird
 Version: 1.0
 License: GPLv2 or later
 Text Domain: post-title-furigana
 Domain Path: /languages/
*/

//////////////////////////////////////////////////////
// Wordpress 3.5+
global $wp_version;
if ( version_compare( $wp_version, "3.5", "<" ) ){
	return false;
}

//////////////////////////////////////////////////////
// Start the plugin
class PostTitleFuriganaAdmin {

	public $ptf_post_type;

	//////////////////////////////////////////
	// construct
	function __construct() {
		load_plugin_textdomain( "post-title-furigana", false, dirname( plugin_basename( __FILE__ ) ) ."/languages" );
		if ( is_admin() ) {
			add_action( 'init', array( &$this, 'init' ) );
			add_action( 'admin_print_scripts', array( &$this, 'add_script' ) );
			add_action( 'edit_form_after_title', array(& $this, 'add_custom_field' ) );
			add_action( 'save_post', array( &$this, 'update' ) );
			add_action( 'publish_post', array( &$this, 'update' ) );
			add_action( 'delete_post', array( &$this, 'delete' ) );
			add_action( 'wp_ajax_post-title-furigana', array( &$this, 'get' ) );
			add_action( 'wp_ajax_nopriv_post-title-furigana', array( &$this, 'get' ) );
			$this->ptf_post_type = get_option( "ptf_posttype", array( 'post' ) );
		}
	}

	//////////////////////////////////////////
	// init
	function init() {
		add_action( 'admin_menu', array( &$this, 'add_config_page' ) );
	}

	//////////////////////////////////////////
	// prep options page insertion
	function add_config_page(){
		if ( function_exists('add_submenu_page') ) {
			add_options_page( 'PostTitleFuriganaAdmin', 'PostTitleFuriganaAdmin', 10, basename( __FILE__ ), array( 'PostTitleFuriganaAdmin', 'config_page' ) );
			add_filter( 'plugin_action_links', array( &$this, 'filter_plugin_actions' ), 10, 2 );
		}
	}

	//////////////////////////////////////////
	// Place in Settings Option List
	function filter_plugin_actions( $links, $file ) {
		static $this_plugin;
		if ( ! $this_plugin ) $this_plugin = plugin_basename( __FILE__ );

		if ( $file == $this_plugin ){
			$settings_link = '<a href="options-general.php?page=post-title-furigana.php">' . __( 'Settings', 'post-title-furigana' ) . '</a>';
			array_unshift( $links, $settings_link );
		}

		return $links;
	}

	//////////////////////////////////////////////////////
	// Update Settings
	function config_page() {
		$message = '';
		$yahoo_api_key = '';
		$custom_field_id = '';
		$posttype_checked = array();

		if( isset( $_POST['submit'] ) ) {
			if( isset( $_POST["ptf_yahoo_api_key"] ) ) {
				$yahoo_api_key = $_POST["ptf_yahoo_api_key"];
				update_option( "ptf_yahoo_api_key", $yahoo_api_key );
			}

			if( isset( $_POST["ptf_custom_field_id"] ) ) {
				$custom_field_id = $_POST["ptf_custom_field_id"];
				update_option( "ptf_custom_field_id", $custom_field_id );
			}

			if( isset( $_POST["ptf_posttype"] ) ) {
				$posttype_checked = $_POST["ptf_posttype"];
			}
			update_option( "ptf_posttype", $posttype_checked );

			$message = __( 'Done!', 'post-title-furigana' );
		}
		else{
			$yahoo_api_key = get_option( "ptf_yahoo_api_key" );
			$custom_field_id = get_option( "ptf_custom_field_id" );
			$posttype_checked = get_option( "ptf_posttype", array( 'post' ) );
		}

		?>
			<div class="wraper-post-title-furigana">
			<h1>Post Title Furigana</h1>
			<p><?php _e( 'Automatically set Japanese Reading title into the custom field.', 'post-title-furigana' ); ?></p>
			<h2><?php _e( 'About', 'post-title-furigana' ); ?></h2>
			<p><?php _e( 'When you enter the post title and move the focus, Automatically set Japanese Reading into the custom field.<br />It does not do anything if there is a Japanese Reading already.<br />Japanese Reading saved in the custom field named "ptf_furigana".<br />You can also edit Japanese Reading later.', 'post-title-furigana' ); ?></p>
			<form method="post" action="<?php echo $_SERVER[REQUEST_URI]; ?>">
				<h2><?php _e( 'Settings', 'post-title-furigana' ); ?></h2>
				<p><?php _e( 'It use text analysis Web API which Yahoo! JAPAN offers.<br />Please Enter Your Application ID.', 'post-title-furigana' ); ?></p>
				<p><a href="http://www.yahoo-help.jp/app/answers/detail/p/537/a_id/43397" target="_blank">&raquo;<?php _e( 'What the Application ID?', 'post-title-furigana' ); ?></a></p>
				<input type="text" name="ptf_yahoo_api_key" value="<?php echo $yahoo_api_key; ?>" size="50" />

				<h2><?php _e( 'The Post type to use the plugin', 'post-title-furigana' ); ?></h2>
		<?php
				$custompost_types = get_post_types(array( 'public' => true, 'show_ui' => true ), false);
				if ( $custompost_types ) {
					unset( $custompost_types['attachment'] );
					foreach ( $custompost_types as $cusompost_type_slug => $post_type ) {
						$id = 'ptf_posttype_' .$cusompost_type_slug;
						$checked = in_array( $cusompost_type_slug, $posttype_checked )? 'checked' : '';
		?>
						<input type="checkbox" name="ptf_posttype[]" id="<?php echo $id; ?>" value="<?php echo $cusompost_type_slug; ?>" <?php echo $checked; ?> /><label for="<?php echo $id ; ?>" style="padding: 0 5px;"><?php _e( $cusompost_type_slug, 'post-title-furigana' ); ?></label>
		<?php
					}
				}
		?>
				<p><input class="button-primary" type="submit" name="submit" value="<?php echo __( 'Update Options', 'post-title-furigana' ); ?>" /><span style="padding: 0 1em; color: #C00;"><?php echo $message; ?></span></p>
			</form>
				<p style="margin-top: 7em;">Powered by <a href="http://www.sysbird.jp/wptips/" target="_blank">Sysbird</a></a>
			</div>
		<?php
	}

	//////////////////////////////////////////
	// Add Custom Field
	function add_custom_field() {

		if( !in_array( get_post_type(), $this->ptf_post_type ) ) {
			return;
		}

		$furigana = '';
		$id = $_REQUEST[ 'post' ];
		if(!empty($id)){
			$furigana = get_post_meta( $id, "ptf_furigana", true );
			$furigana = esc_html( $furigana );
		}

		?>
			<p>
			<label for="ptf_furigana"><?php _e( 'Furigana:', 'post-title-furigana' ); ?></label>
			<input id="ptf_furigana" type="text" value="<?php echo $furigana; ?>" size="30" name="ptf_furigana" style="width: 80%;">
			<input type="hidden" name="ptf_ajax_url" id="ptf_ajax_url" value='<?php echo admin_url('admin-ajax.php'); ?>' />
			</p>
		<?php
	}

	//////////////////////////////////////////
	// Update Custom Field
	function update( $post_id = null, $post_data = null ) {

		if( !in_array( get_post_type(), $this->ptf_post_type ) ) {
			return;
		}

		$object = get_post( $post_id );
		if ( $object == false || $object == null ) {
			return false;
		}

	    if( !current_user_can( 'edit_post', $post_id ) ){
	        return $post_id;
	    }

		$furigana = '';
		if( isset( $_REQUEST[ "ptf_furigana" ] )  ) {
			$furigana = stripslashes( trim($_REQUEST[ "ptf_furigana" ] ) );
		}
		update_post_meta ( $post_id, 'ptf_furigana', $furigana );
	}

	//////////////////////////////////////////
	// Delete Custom Field
	function delete( $post_id = null ) {
	    delete_post_meta( $post_id, "ptf_furigana" );
	}

	//////////////////////////////////////////
	// add JavaScript
	function add_script() {
		if( is_admin() ){
			$filename = plugins_url( dirname( '/' .plugin_basename( __FILE__ ) ) ).'/post-title-furigana.js';
			wp_enqueue_script( 'wp_furigana', $filename, array( 'jquery' ), '1.0' );
		}
	}

	//////////////////////////////////////////
	// Get Furigana by Yahoo Web API
	function get() {
		$title = mb_convert_encoding( $_POST['title'], 'UTF-8','auto' );
		$yahoo_api_key = get_option( "ptf_yahoo_api_key" );
		$url = 'http://jlp.yahooapis.jp/MAService/V1/parse?appid=' .$yahoo_api_key .'&sentence=' .$title;
		$furigana = '';
		$rss = file_get_contents( $url );
		$xml = simplexml_load_string( $rss );
		$furigana = '';
		foreach( $xml->ma_result->word_list->word as $item ) {
			$furigana .= $item->reading;
		}

		mb_http_output( 'UTF-8 ');
		mb_internal_encoding( 'UTF-8' );
		mb_language( "uni" );
		header( 'Content-Type: text/xml;charset=UTF-8' );
		print( "<post-title-furigana>" );
		print( "<furigana>" .$furigana ."</furigana>" );
		print( "</post-title-furigana>" );

		die();
	}
}
$PostTitleFuriganaAdmin = new PostTitleFuriganaAdmin();
?>