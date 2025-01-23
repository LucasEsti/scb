<?php

/**
 * Template Name: project
 */
get_header();

global $post;
?>

    <div id="parent-content" class="clearfix">
        <section class="blog-content-title-wrap page-head-project" style="background: #000 url(<?php echo get_field('background_post', 'option')['url']; ?>) no-repeat center; background-size: cover; padding: 102px 0px 101px;">
            <div class="blog-content-title-overlay"> </div>
            <div class="container">
                <div class="blog-content-title-inner block-center">
                    <div class="block-center-inner">
                        <h1><?php echo get_the_title(); ?></h1>
                        <ul class="breadcrumbs">
                            <li>
                                <a class="home" href="/" rel=""> <i class="fa fa-home"></i></a>
                            </li>
                            <li><span>PROJET</span></li>
                            <li><span><?php echo get_the_title(); ?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <main role="main" class="site-content-archive">
            <div class="container">
                <div class="row">
                    <div id="owl-item" class="item-slider col-lg-12">
                        <?php foreach(get_field('gallery', $post->ID) as $element): ?>
                            <div> 
                                <img src="<?php echo $element['url']; ?>" alt=" " /> 
                            </div>
                        <?php endforeach; ?>
                        <!--<div> <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt=" " /> </div>-->
                    </div>
                </div>
                <div class="row">
                    <div class=" content-wrap  col-lg-12">
                        <div class="col-md-3 portfolio-attribute">
                            <div class="portfolio-info border-primary-color">
                                <?php foreach(get_field('detail_reps', $post->ID) as $element): ?>
                                    <div class="portfolio-info-box">
                                        <h6 class="primary-font">
                                            <?php echo $element['icon']; ?>
                                            
                                        </h6>
                                        <div class="portfolio-term bold-color"><?php echo $element['valeur']; ?></div>
                                    </div>
                                <?php endforeach; ?>
                                
                            </div>
                        </div>
                        <div class="col-md-9 portfolio-content">
                            <div class="portfolio-info">
                                <h5 class="clear-top title bold-color border-primary-color">
                                    À propos du projet
                                </h5>
                                <?php  the_field('description', $post->ID); ?>
                                </div>
<!--                            <div class="portfolio-info-box share">
                                <h6 class="menu-font">Share:</h6> <img src="images/share.png" alt="">
                                <div class="portfolio-term icon-wrap"> <span><a class="facebook bold-color" href="#">
							<i class="fa fa-facebook"></i></a></span><span>
							<a class="bold-color" href="#">
							<i class="fa fa-twitter"></i></a></span><span>
							<a class="bold-color" href="#">
							<i class="fa fa-google-plus"></i></a></span></div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="projects-contents">
                <div class="container">
                    <div class="content-head content-head text-center text-uppercase">
                        <h4>Autres Projets</h4>
                        <p>Expérience & Créativité</p>
                    </div>
                </div>
                <div class="container-fluid no-padding" style="margin-bottom: 36px;">
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
                                    <h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4> 
                                    <span class="project-cat"></span> 
                                    <a class="project-view" href="<?php the_permalink();?>"><i class="fa fa-link"></i></a>
                                    <a class="project-expand prettyPhoto" data-rel="prettyPhoto" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id(the_ID()) ); ?>"> <i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                                        
                                <?php endwhile; endif; wp_reset_postdata(); ?>
                            
                        </div>
                        <div id="projects-copy" class="hide"> </div>
                        
                    </div>
                </div>
            </div>
        </main>
    </div>
<?php get_footer(); ?>

