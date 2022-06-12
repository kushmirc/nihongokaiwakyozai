<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Daily Blog
 */
/**
* Hook - daily_blog_action_doctype.
*
* @hooked daily_blog_doctype -  10
*/
do_action( 'daily_blog_action_doctype' );
?>
<head>
<?php
/**
* Hook - daily_blog_action_head.
*
* @hooked daily_blog_head -  10
*/
do_action( 'daily_blog_action_head' );
?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>

<?php

/**
* Hook - daily_blog_action_before.
*
* @hooked daily_blog_page_start - 10
*/
do_action( 'daily_blog_action_before' );

/**
*
* @hooked daily_blog_header_start - 10
*/
do_action( 'daily_blog_action_before_header' );

/**
*
*@hooked daily_blog_site_branding - 10
*@hooked daily_blog_header_end - 15 
*/
do_action('daily_blog_action_header');

/**
*
* @hooked daily_blog_content_start - 10
*/
do_action( 'daily_blog_action_before_content' );

/**
 * Banner start
 * 
 * @hooked daily_blog_banner_header - 10
*/
do_action( 'daily_blog_banner_header' );  
