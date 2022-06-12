<?php
/**
 * Default theme options.
 *
 * @package Daily Blog
 */

if ( ! function_exists( 'daily_blog_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
function daily_blog_get_default_theme_options() {

	$defaults = array();

    // Homepage Options
	$defaults['enable_frontpage_content'] 		= false;

	// Featured Slider Section	
	$defaults['enable_featured_slider_section']		= false;
	$defaults['number_of_featured_slider_items']	= 3;
	$defaults['featured_slider_content_type']		= 'featured_slider_page';

	// Popular Posts Section	
	$defaults['enable_popular_posts_section']		= false;
	$defaults['popular_posts_section_title']		= esc_html__( 'Popular Posts', 'daily-blog' );
	$defaults['number_of_popular_posts_items']		= 3;
	$defaults['popular_posts_content_type']			= 'popular_posts_page';

	// Latest Posts Section	
	$defaults['enable_latest_posts_section']		= false;
	$defaults['latest_posts_section_title']			= esc_html__( 'Latest Posts', 'daily-blog' );
	$defaults['number_of_latest_posts_items']		= 3;
	$defaults['latest_posts_content_type']			= 'latest_posts_page';

	// Featured Posts Section	
	$defaults['enable_featured_posts_section']		= false;
	$defaults['featured_posts_section_title']		= esc_html__( 'Featured Posts', 'daily-blog' );
	$defaults['number_of_featured_posts_items']		= 3;
	$defaults['featured_posts_content_type']		= 'featured_posts_page';

	//General Section
	$defaults['readmore_text']					= esc_html__('Continue Reading','daily-blog');
	$defaults['your_latest_posts_title']		= esc_html__('Blog','daily-blog');
	$defaults['excerpt_length']					= 20;
	$defaults['layout_options_blog']			= 'no-sidebar';
	$defaults['layout_options_archive']			= 'no-sidebar';
	$defaults['layout_options_page']			= 'no-sidebar';	
	$defaults['layout_options_single']			= 'right-sidebar';	

	//Footer section 		
	$defaults['copyright_text']					= esc_html__( 'Copyright &copy; All rights reserved.', 'daily-blog' );

	// Pass through filter.
	$defaults = apply_filters( 'daily_blog_filter_default_theme_options', $defaults );
	return $defaults;
}

endif;

/**
*  Get theme options
*/
if ( ! function_exists( 'daily_blog_get_option' ) ) :

	/**
	 * Get theme option
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function daily_blog_get_option( $key ) {

		$default_options = daily_blog_get_default_theme_options();
		if ( empty( $key ) ) {
			return;
		}

		$theme_options = (array)get_theme_mod( 'theme_options' );
		$theme_options = wp_parse_args( $theme_options, $default_options );

		$value = null;

		if ( isset( $theme_options[ $key ] ) ) {
			$value = $theme_options[ $key ];
		}

		return $value;

	}

endif;