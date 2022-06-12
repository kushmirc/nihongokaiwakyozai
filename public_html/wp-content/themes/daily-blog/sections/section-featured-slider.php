<?php 
/**
 * Template part for displaying Featured Slider Section
 *
 *@package Daily Blog
 */

    $featured_slider_content_type            = daily_blog_get_option( 'featured_slider_content_type' );
    $number_of_featured_slider_items         = daily_blog_get_option( 'number_of_featured_slider_items' );
    $featured_slider_category                = daily_blog_get_option( 'featured_slider_category' );

    if( $featured_slider_content_type == 'featured_slider_page' ) :
        for( $i=1; $i<=$number_of_featured_slider_items; $i++ ) :
            $featured_slider_posts[] = daily_blog_get_option( 'featured_slider_page_'.$i );
        endfor;  
    elseif( $featured_slider_content_type == 'featured_slider_post' ) :
        for( $i=1; $i<=$number_of_featured_slider_items; $i++ ) :
            $featured_slider_posts[] = daily_blog_get_option( 'featured_slider_post_'.$i );
        endfor;
    endif;
    ?>

    <?php if( $featured_slider_content_type == 'featured_slider_page' ) : ?>
        <div class="slider-wrapper" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "infinite": false, "speed": 500, "dots": true, "arrows": true, "autoplay": false, "draggable": true, "fade": true }'>
            <?php $args = array (
                'post_type'     => 'page',
                'posts_per_page' => absint( $number_of_featured_slider_items ),
                'post__in'      => $featured_slider_posts,
                'orderby'       =>'post__in',
            );        
            $loop = new WP_Query($args);                        
            if ( $loop->have_posts() ) :
            $i=-1;
                while ($loop->have_posts()) : $loop->the_post(); $i++;

                $class='';
                if ($i==0) {
                    $class='display-block';
                } else{
                    $class='display-none';}
                ?>              
                
                <article class="<?php echo esc_attr($class); ?>" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
                    <div class="wrapper">
                        <div class="featured-content-wrapper">
                            <div class="entry-meta">
                                <?php daily_blog_posted_on(); ?>
                            </div><!-- .entry-meta -->

                            <header class="entry-header">
                                <h2 class="entry-title"><a href="<?php the_permalink();?>" class="animate-typing" data-animate-loop="true"><?php the_title();?></a></h2>
                            </header>

                            <?php $readmore_text = daily_blog_get_option( 'readmore_text' );?>
                            <?php if (!empty($readmore_text) ) :?>
                                <div class="read-more">
                                    <a href="<?php the_permalink();?>"><?php echo esc_html($readmore_text);?><i class="fas fa-long-arrow-alt-right"></i></a>
                                </div><!-- .read-more -->
                            <?php endif; ?>
                        </div><!-- .featured-content-wrapper -->
                    </div><!-- .wrapper -->
                </article>

                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div><!-- .slider-wrapper -->
    
    <?php else: ?>
        <div class="slider-wrapper" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "infinite": false, "speed": 500, "dots": true, "arrows": true, "autoplay": false, "draggable": true, "fade": true }'>
            <?php $args = array (
                'post_type'     => 'post',
                'posts_per_page' => absint( $number_of_featured_slider_items ),
                'post__in'      => $featured_slider_posts,
                'orderby'       =>'post__in',
                'ignore_sticky_posts' => true,
            );        
            $loop = new WP_Query($args);                        
            if ( $loop->have_posts() ) :
            $i=-1;
                while ($loop->have_posts()) : $loop->the_post(); $i++;

                $class='';
                if ($i==0) {
                    $class='display-block';
                } else{
                    $class='display-none';}
                ?>            
                
                <article class="<?php echo esc_attr($class); ?>" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
                    <div class="wrapper">
                        <div class="featured-content-wrapper">
                            <div class="entry-meta">
                                <?php daily_blog_entry_meta(); ?>
                                <?php daily_blog_posted_on(); ?>
                            </div><!-- .entry-meta -->

                            <header class="entry-header">
                                <h2 class="entry-title"><a href="<?php the_permalink();?>" class="animate-typing" data-animate-loop="true"><?php the_title();?></a></h2>
                            </header>

                            <?php $readmore_text = daily_blog_get_option( 'readmore_text' );?>
                            <?php if (!empty($readmore_text) ) :?>
                                <div class="read-more">
                                    <a href="<?php the_permalink();?>"><?php echo esc_html($readmore_text);?><i class="fas fa-long-arrow-alt-right"></i></a>
                                </div><!-- .read-more -->
                            <?php endif; ?>
                        </div><!-- .featured-content-wrapper -->
                    </div><!-- .wrapper -->
                </article>

                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div><!-- .slider-wrapper -->
    <?php endif;