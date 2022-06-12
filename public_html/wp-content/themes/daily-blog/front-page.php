<?php
/**
 * The template for displaying home page.
 * @package Daily Blog
 */

if ( 'posts' != get_option( 'show_on_front' ) ){ 
    get_header(); ?>
    <?php $enabled_sections = daily_blog_get_sections();
    if( is_array( $enabled_sections ) ) {
        foreach( $enabled_sections as $section ) {

            if( $section['id'] == 'featured-slider' ) { ?>
                <?php $enable_featured_slider_section = daily_blog_get_option( 'enable_featured_slider_section' );
                if(true ==$enable_featured_slider_section): ?>
                    <section id="<?php echo esc_attr( $section['id'] ); ?>" class="section-gap">  
                        <div class="wrapper">
                            <?php get_template_part( 'sections/section', esc_attr( $section['id'] ) ); ?>
                        </div><!-- .wrapper -->
                    </section>
            <?php endif; ?>

            <?php } elseif( $section['id'] == 'popular-posts' ) { ?>
                <?php $enable_popular_posts_section = daily_blog_get_option( 'enable_popular_posts_section' );
                if(true ==$enable_popular_posts_section): ?>
                    <section id="<?php echo esc_attr( $section['id'] ); ?>" class="section-gap">  
                        <div class="wrapper">
                            <?php get_template_part( 'sections/section', esc_attr( $section['id'] ) ); ?>
                        </div>
                    </section>
            <?php endif; ?>

            <?php } elseif( $section['id'] == 'latest-posts' ) { ?>
                <?php $enable_latest_posts_section = daily_blog_get_option( 'enable_latest_posts_section' );
                if(true ==$enable_latest_posts_section): ?>
                    <section id="<?php echo esc_attr( $section['id'] ); ?>" class="section-gap">  
                        <div class="wrapper">
                            <?php get_template_part( 'sections/section', esc_attr( $section['id'] ) ); ?>
                        </div>
                    </section>
            <?php endif; ?>

            <?php } elseif( $section['id'] == 'featured-posts' ) { ?>
                <?php $enable_featured_posts_section = daily_blog_get_option( 'enable_featured_posts_section' );
                if(true ==$enable_featured_posts_section): ?>
                    <section id="<?php echo esc_attr( $section['id'] ); ?>" class="section-gap">  
                        <div class="wrapper">
                            <?php get_template_part( 'sections/section', esc_attr( $section['id'] ) ); ?>
                        </div>
                    </section>
            <?php endif;

            }
        }
    }
    if( true == daily_blog_get_option('enable_frontpage_content') ) { ?>
        <div id="content-wrapper" class="wrapper">
            <div class="section-gap clear">
            <?php include( get_page_template() ); ?>
            </div><!-- .section-gap -->
        </div><!-- #content-wrapper -->
    <?php }
    get_footer();
} 
elseif ('posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
} 