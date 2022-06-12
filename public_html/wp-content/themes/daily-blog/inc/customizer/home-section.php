<?php
/**
 * Home Page Options.
 *
 * @package Daily Blog
 */

$default = daily_blog_get_default_theme_options();

// Add Panel.
$wp_customize->add_panel( 'home_page_panel',
	array(
	'title'      => __( 'Front Page Sections', 'daily-blog' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	)
);

/**
* Section Customizer Options.
*/
require get_template_directory() . '/inc/customizer/home-sections/featured-slider.php';
require get_template_directory() . '/inc/customizer/home-sections/popular-posts.php';
require get_template_directory() . '/inc/customizer/home-sections/latest-posts.php';
require get_template_directory() . '/inc/customizer/home-sections/featured-posts.php';

