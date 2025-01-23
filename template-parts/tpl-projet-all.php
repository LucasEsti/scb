<?php

/**
 * Template Name: projet all
 */
get_header(); ?>
    <div class="page-head overlay-wrap" style="background: #000 url(<?php echo get_field('background_post', 'option')['url']; ?>) no-repeat center; background-size: cover; padding: 102px 0px 101px;">
        <div class="overlay"></div>
        <div class="container text-uppercase">
            <ul class="bcrumbs">
                <li><a href="/"><i class="fa fa-home"></i></a></li>
                <li><?php echo get_the_title(); ?></li>
            </ul>
        </div>
    </div>

    <div id="project" class="home-projects projects-content">
        <div class="container">
            <div class="content-head content-head-lite text-center text-uppercase">
                <h4><?php echo get_the_title(); ?></h4>
                <p>De la conception à la realisation</p>
            </div>
        </div>
        <div class="container-fluid no-padding">
                    <div class="project-info">
                        <div id="home-projects" class="owl-carousel">
                            <?php 
                                $args = array(
                                'post_type'=> 'post',
                                'orderby'    => 'ID',
                                'post_status' => 'publish',
                                'order'    => 'DESC',
                                'posts_per_page' => -1 // this will retrive all the post that is published 
                                );
                                $result = new WP_Query( $args );
                                if ( $result-> have_posts() ) : 
                                    while ( $result->have_posts() ) : $result->the_post(); 
                                ?>
                            <div class="project-item item Architecture Construction">
                                <img alt="" class="img-responsive" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>" />
                                <div class="project-overlay">
                                    <h4><a href="<?php the_permalink();?>"><?php echo get_field('titre' ); ?></a></h4> 
                                    <span class="project-cat"><?php echo get_field('descr' ); ?></span> 
                                    <a class="project-view" href="<?php the_permalink();?>"><i class="fa fa-link"></i></a>
                                    <a class="project-expand prettyPhoto" data-rel="prettyPhoto" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>"> <i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                                        
                                <?php endwhile; endif; wp_reset_postdata(); ?>
                        </div>
                        <div id="projects-copy" class="hide"> </div>
                    </div>
                </div>
        </div>
<?php get_footer(); ?>