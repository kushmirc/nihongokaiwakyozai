<?php 
/**
 * Template part for displaying Latest Posts Section
 *
 *@package Daily Blog
 */
    $latest_posts_section_title           = daily_blog_get_option( 'latest_posts_section_title' );
    $latest_posts_content_type            = daily_blog_get_option( 'latest_posts_content_type' );
    $number_of_latest_posts_items         = daily_blog_get_option( 'number_of_latest_posts_items' );
    $latest_posts_category                = daily_blog_get_option( 'latest_posts_category' );

    if( $latest_posts_content_type == 'latest_posts_page' ) :
        for( $i=1; $i<=$number_of_latest_posts_items; $i++ ) :
            $latest_posts_posts[] = daily_blog_get_option( 'latest_posts_page_'.$i );
        endfor;  
    elseif( $latest_posts_content_type == 'latest_posts_post' ) :
        for( $i=1; $i<=$number_of_latest_posts_items; $i++ ) :
            $latest_posts_posts[] = daily_blog_get_option( 'latest_posts_post_'.$i );
        endfor;
    endif;
    ?>

    <?php if( !empty($latest_posts_section_title) ):?>
        <div class="section-header">
            <h2 class="section-title"><?php echo esc_html($latest_posts_section_title);?></h2>
        </div><!-- .section-header -->
    <?php endif;?>

    <?php if( $latest_posts_content_type == 'latest_posts_page' ) : ?>
        <div class="section-content col-3 clear">
            <?php $args = array (
                'post_type'     => 'page',
                'posts_per_page' => absint( $number_of_latest_posts_items ),
                'post__in'      => $latest_posts_posts,
                'orderby'       =>'post__in',
            );        
            $loop = new WP_Query($args);                        
            if ( $loop->have_posts() ) :
            $i=-1;
                while ($loop->have_posts()) : $loop->the_post(); $i++; ?>          
                
                <article>
                    <div class="post-item">
                        <?php if ( has_post_thumbnail() ) { ?>
                            <div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
                                <a href="<?php the_permalink();?>" class="post-thumbnail-link"></a>
                            </div><!-- .featured-image -->
                        <?php } ?>

                        <div class="entry-container">
                            <div class="entry-meta">
                                <?php daily_blog_posted_on(); ?>
                            </div><!-- .entry-meta -->

                            <header class="entry-header">
                                <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                            </header>

                            <div class="entry-content">
                                <?php
                                    $excerpt = daily_blog_the_excerpt( 20 );
                                    echo wp_kses_post( wpautop( $excerpt ) );
                                ?>
                            </div><!-- .entry-content -->

                            <?php $readmore_text = daily_blog_get_option( 'readmore_text' );?>
                            <?php if (!empty($readmore_text) ) :?>
                                <div class="read-more">
                                    <a href="<?php the_permalink();?>"><?php echo esc_html($readmore_text);?><i class="fas fa-long-arrow-alt-right"></i></a>
                                </div><!-- .read-more -->
                            <?php endif; ?>
                        </div><!-- .entry-container -->
                    </div><!-- .post-item -->
                </article>

                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div><!-- .section-content -->
    
    <?php else: ?>
        <div class="section-content col-3 clear">
            <?php $args = array (
                'post_type'     => 'post',
                'posts_per_page' => absint( $number_of_latest_posts_items ),
                'post__in'      => $latest_posts_posts,
                'orderby'       =>'post__in',
                'ignore_sticky_posts' => true,
            );        
            $loop = new WP_Query($args);                        
            if ( $loop->have_posts() ) :
            $i=-1;
                while ($loop->have_posts()) : $loop->the_post(); $i++; ?>              
                
                <article>
                    <div class="post-item">
                        <?php if ( has_post_thumbnail() ) { ?>
                            <div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
                                <a href="<?php the_permalink();?>" class="post-thumbnail-link"></a>
                            </div><!-- .featured-image -->
                        <?php } ?>

                        <div class="entry-container">
                            <div class="entry-meta">
                                <?php daily_blog_entry_meta(); ?>
                                <?php daily_blog_posted_on(); ?>
                            </div><!-- .entry-meta -->

                            <header class="entry-header">
                                <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                            </header>

                            <div class="entry-content">
                                <?php
                                    $excerpt = daily_blog_the_excerpt( 20 );
                                    echo wp_kses_post( wpautop( $excerpt ) );
                                ?>
                            </div><!-- .entry-content -->

                            <?php $readmore_text = daily_blog_get_option( 'readmore_text' );?>
                            <?php if (!empty($readmore_text) ) :?>
                                <div class="read-more">
                                    <a href="<?php the_permalink();?>"><?php echo esc_html($readmore_text);?><i class="fas fa-long-arrow-alt-right"></i></a>
                                </div><!-- .read-more -->
                            <?php endif; ?>
                        </div><!-- .entry-container -->
                    </div><!-- .post-item -->
                </article>

                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div><!-- .section-content -->
    <?php endif;