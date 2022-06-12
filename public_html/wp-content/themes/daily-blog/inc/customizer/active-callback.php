<?php
/**
 * Active callback functions.
 *
 * @package Daily Blog
 */

function daily_blog_featured_slider_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[enable_featured_slider_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function daily_blog_featured_slider_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featured_slider_content_type]' )->value();
    return ( daily_blog_featured_slider_active( $control ) && ( 'featured_slider_page' == $content_type ) );
}

function daily_blog_featured_slider_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featured_slider_content_type]' )->value();
    return ( daily_blog_featured_slider_active( $control ) && ( 'featured_slider_post' == $content_type ) );
}

function daily_blog_popular_posts_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[enable_popular_posts_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function daily_blog_popular_posts_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[popular_posts_content_type]' )->value();
    return ( daily_blog_popular_posts_active( $control ) && ( 'popular_posts_page' == $content_type ) );
}

function daily_blog_popular_posts_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[popular_posts_content_type]' )->value();
    return ( daily_blog_popular_posts_active( $control ) && ( 'popular_posts_post' == $content_type ) );
}

function daily_blog_latest_posts_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[enable_latest_posts_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function daily_blog_latest_posts_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[latest_posts_content_type]' )->value();
    return ( daily_blog_latest_posts_active( $control ) && ( 'latest_posts_page' == $content_type ) );
}

function daily_blog_latest_posts_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[latest_posts_content_type]' )->value();
    return ( daily_blog_latest_posts_active( $control ) && ( 'latest_posts_post' == $content_type ) );
}

function daily_blog_featured_posts_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[enable_featured_posts_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function daily_blog_featured_posts_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featured_posts_content_type]' )->value();
    return ( daily_blog_featured_posts_active( $control ) && ( 'featured_posts_page' == $content_type ) );
}

function daily_blog_featured_posts_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featured_posts_content_type]' )->value();
    return ( daily_blog_featured_posts_active( $control ) && ( 'featured_posts_post' == $content_type ) );
}