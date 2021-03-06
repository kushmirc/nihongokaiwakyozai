<?php
/**
 * Featured Posts options.
 *
 * @package Daily Blog
 */

$default = daily_blog_get_default_theme_options();

// Featured Posts Section
$wp_customize->add_section( 'section_featured_posts',
	array(
	'title'      => __( 'Featured Posts', 'daily-blog' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'home_page_panel',
	)
);

// Enable Featured Posts Section
$wp_customize->add_setting('theme_options[enable_featured_posts_section]', 
	array(
	'default' 			=> $default['enable_featured_posts_section'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'daily_blog_sanitize_checkbox'
	)
);

$wp_customize->add_control('theme_options[enable_featured_posts_section]', 
	array(		
	'label' 	=> __('Enable Featured Posts Section', 'daily-blog'),
	'section' 	=> 'section_featured_posts',
	'settings'  => 'theme_options[enable_featured_posts_section]',
	'type' 		=> 'checkbox',	
	)
);

// Section Title
$wp_customize->add_setting('theme_options[featured_posts_section_title]', 
	array(
	'default'           => $default['featured_posts_section_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[featured_posts_section_title]', 
	array(
	'label'       => __('Section Title', 'daily-blog'),
	'section'     => 'section_featured_posts',   
	'settings'    => 'theme_options[featured_posts_section_title]',	
	'active_callback' => 'daily_blog_featured_posts_active',		
	'type'        => 'text'
	)
);

// Number of items
$wp_customize->add_setting('theme_options[number_of_featured_posts_items]', 
	array(
	'default' 			=> $default['number_of_featured_posts_items'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'daily_blog_sanitize_number_range'
	)
);

$wp_customize->add_control('theme_options[number_of_featured_posts_items]', 
	array(
	'label'       => __('Number Of Items', 'daily-blog'),
	'description' => __('Save & Refresh the customizer to see its effect. Maximum is 3.', 'daily-blog'),
	'section'     => 'section_featured_posts',   
	'settings'    => 'theme_options[number_of_featured_posts_items]',		
	'type'        => 'number',
	'active_callback' => 'daily_blog_featured_posts_active',
	'input_attrs' => array(
			'min'	=> 1,
			'max'	=> 3,
			'step'	=> 1,
		),
	)
);

$wp_customize->add_setting('theme_options[featured_posts_content_type]', 
	array(
	'default' 			=> $default['featured_posts_content_type'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'daily_blog_sanitize_select'
	)
);

$wp_customize->add_control('theme_options[featured_posts_content_type]', 
	array(
	'label'       => __('Content Type', 'daily-blog'),
	'section'     => 'section_featured_posts',   
	'settings'    => 'theme_options[featured_posts_content_type]',		
	'type'        => 'select',
	'active_callback' => 'daily_blog_featured_posts_active',
	'choices'	  => array(
			'featured_posts_page'	  => __('Page','daily-blog'),
			'featured_posts_post'	  => __('Post','daily-blog'),
		),
	)
);

$number_of_featured_posts_items = daily_blog_get_option( 'number_of_featured_posts_items' );

for( $i=1; $i<=$number_of_featured_posts_items; $i++ ) {

	// Page
	$wp_customize->add_setting('theme_options[featured_posts_page_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'daily_blog_dropdown_pages'
		)
	);

	$wp_customize->add_control('theme_options[featured_posts_page_'.$i.']', 
		array(
		'label'       => sprintf( __('Select Page #%1$s', 'daily-blog'), $i),
		'section'     => 'section_featured_posts',   
		'settings'    => 'theme_options[featured_posts_page_'.$i.']',		
		'type'        => 'dropdown-pages',
		'active_callback' => 'daily_blog_featured_posts_page',
		)
	);

	// Posts
	$wp_customize->add_setting('theme_options[featured_posts_post_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'daily_blog_dropdown_pages'
		)
	);

	$wp_customize->add_control('theme_options[featured_posts_post_'.$i.']', 
		array(
		'label'       => sprintf( __('Select Post #%1$s', 'daily-blog'), $i),
		'section'     => 'section_featured_posts',   
		'settings'    => 'theme_options[featured_posts_post_'.$i.']',		
		'type'        => 'select',
		'choices'	  => daily_blog_dropdown_posts(),
		'active_callback' => 'daily_blog_featured_posts_post',
		)
	);
}