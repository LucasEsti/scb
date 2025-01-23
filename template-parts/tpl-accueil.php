<?php

/**
 * Template Name: Accueil
 */
get_header(); ?>
<?php if( have_rows('carrousel') ): 
     while( have_rows('carrousel') ): the_row(); ?>
    <div class="slider">
        <div id="rev_slider_204_1_wrapper" class="rev_slider fullwidthabanner revslider-initialised tp-simpleresponsive">
            <div id="rev_slider_204_1" class="rev_slider fullwidthabanner" data-version="5.1.1RC" style="display: none;">
                <ul>
                    <?php 
                    $element = get_sub_field('contenu');
//                    foreach(get_sub_field('contenu') as $element): ?>
                    <li data-description="" data-easein="default" data-easeout="default" data-index="rs-6" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-slotamount="7" data-thumb="<?php echo $element[0]["image"]["url"]; ?>" data-title="Slide 3" data-transition="random"> 
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" data-no-retina="" src="<?php echo $element[0]["image"]["url"]; ?>">
                        <div id="slide-6-layer-1" class="tp-caption darnalargetext   tp-resizeme" data-height="auto" data-hoffset="0" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="500" data-transform_idle="" data-transform_in="y:top;s:1000;e:easeOutElastic;" data-transform_out="x:50;y:150;z:0;rX:0;rY:0;rZ:0;sX:0.5;sY:0.5;skX:0;skY:0;opacity:0;s:300;s:300;" data-width="auto" data-x="center" data-y="185" style="z-index: 5; white-space: nowrap; border-color: rgba(255, 255, 255, 1.00);"> 
                            <?php echo $element[0]["titre"]; ?>
                        </div>
                        <div id="slide-6-layer-2" class="tp-caption darnalargeprimarybg   tp-resizeme" data-elementdelay="0.1" data-height="auto" data-hoffset="0" data-responsive_offset="on" data-splitin="chars" data-splitout="none" data-start="500" data-transform_idle="" data-transform_in="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:1000;e:easeInOutBack;" data-transform_out="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:300;s:300;" data-width="auto" data-x="center" data-y="250" style="z-index: 6; white-space: nowrap; color: rgba(255, 255, 255, 1.00); background-color: rgb(241, 132, 22); padding: 15px 20px 15px 20px; border-color: rgba(255, 255, 255, 1.00);"> 
                            <?php echo $element[0]["accroche"]; ?>
                        </div>
                        <div id="slide-6-layer-3" class="tp-caption darnasmalltext2   tp-resizeme" data-height="auto" data-hoffset="0" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="1000" data-transform_idle="" data-transform_in="x:50;y:150;z:0;rX:0;rY:0;rZ:0;sX:0.5;sY:0.5;skX:0;skY:0;opacity:0;s:1000;e:Elastic.easeOut;" data-transform_out="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:300;s:300;" data-width="auto" data-x="center" data-y="343" style="z-index: 7; white-space: nowrap; border-color: rgba(255, 255, 255, 1.00);"> 
                            <div style="width:100vw;">
                                <span class="descr-carrouss1">
                                    <?php echo $element[0]["description"]; ?>
                                </span>
                            </div>
                        </div>
                    </li>
                        
                    <?php // endforeach; ?>
                    <li data-description="" data-easein="default" data-easeout="default" data-index="rs-4" data-masterspeed="1500" data-rotate="0" data-saveperformance="off" data-slotamount="7" data-thumb="<?php echo $element[1]["image"]["url"]; ?>" data-title="Slide 1" data-transition="random"> 
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="<?php echo $element[1]["image"]["url"]; ?>">
                        <div id="slide-4-layer-1" class="tp-caption darnaverylargetextprimary   tp-resizeme" data-height="auto" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="500" data-transform_idle="" data-transform_in="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:1000;e:easeInOutBack;" data-transform_out="x:left;skX:45px;s:500;s:500;" data-width="auto" data-x="30" data-y="200" style="z-index: 5; white-space: nowrap; border-color: rgba(255, 255, 255, 1.00);">
                            <?php echo $element[1]["titre"]; ?>
                        </div>
                        <div id="slide-4-layer-2" class="tp-caption darnaverylargetext   tp-resizeme" data-height="auto" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="1000" data-transform_idle="" data-transform_in="x:50;y:150;z:0;rX:0;rY:0;rZ:0;sX:0.5;sY:0.5;skX:0;skY:0;opacity:0;s:1000;e:Power3.easeInOut;" data-transform_out="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:500;s:500;" data-width="auto" data-x="30" data-y="270" style="z-index: 6; white-space: nowrap; border-color: rgba(255, 255, 255, 1.00);"> 
                        <?php echo $element[1]["accroche"]; ?>
                        </div>
                        <div id="slide-4-layer-3" class="tp-caption darnamediumtext   tp-resizeme" data-height="auto" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="1500" data-transform_idle="" data-transform_in="x:50;y:150;z:0;rX:0;rY:0;rZ:0;sX:0.5;sY:0.5;skX:0;skY:0;opacity:0;s:1000;e:Power4.easeInOut;" data-transform_out="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:300;s:300;" data-width="auto" data-x="30" data-y="355" style="z-index: 7; white-space: nowrap; border-color: rgba(255, 255, 255, 1.00);">
                            <div style="width:100vw;">
                                <span class="descr-carrouss">
                                    <?php echo $element[1]["description"]; ?>
                                </span>
                            </div>
                        </div>
                    </li>
                    
                    <li data-description="" data-easein="default" data-easeout="default" data-index="rs-5" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-slotamount="7" data-thumb="<?php echo $element[2]["image"]["url"]; ?>" data-title="Slide 2" data-transition="random"> 
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" data-no-retina="" src="<?php echo $element[2]["image"]["url"]; ?>">
                        <div id="slide-5-layer-1" class="tp-caption darnalargetext   tp-resizeme" data-height="auto" data-hoffset="0" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="500" data-transform_idle="" data-transform_in="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:1000;e:easeOutBounce;" data-transform_out="x:left;skX:45px;s:300;s:300;" data-width="auto" data-x="center" data-y="200" style="z-index: 5; white-space: nowrap; border-color: rgba(255, 255, 255, 1.00);"> 
                            <span class="darna-slider-border-bottom"><?php echo $element[2]["accroche"]; ?></span>
                        </div>
                        <div id="slide-5-layer-2" class="tp-caption darnasmalltext   tp-resizeme" data-height="auto" data-hoffset="0" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="1000" data-transform_idle="" data-transform_in="x:50;y:150;z:0;rX:0;rY:0;rZ:0;sX:0.5;sY:0.5;skX:0;skY:0;opacity:0;s:1000;e:easeInOutBack;" data-transform_out="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:500;s:500;" data-width="auto" data-x="center" data-y="300" style="z-index: 6; white-space: nowrap; border-color: rgba(255, 255, 255, 1.00);"> 
                            <div style="width:100vw;">
                                <span class="descr-carrouss">
                                    <?php echo $element[2]["description"]; ?>
                                </span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"> </div>
            </div>
        </div>
    </div>

<?php endwhile; endif; ?>
 <?php if( have_rows('histoire') ): 
     while( have_rows('histoire') ): the_row(); ?>
    <div class="home-about">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12"> 
                    
                    <div id="owl-histoire" class="owl-carousel owl-theme">
                        <?php foreach(get_sub_field('galery') as $element): ?>
                            <div class="item"> <img alt="" class="img-responsive" src="<?php echo $element['url']; ?>" /> </div>
                        <?php endforeach; ?>
                    </div>
                    
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12 text-center">
                    <div class="content-head text-uppercase">
                        <h4><?php echo get_sub_field('titre'); ?></h4>
                        <p><?php echo get_sub_field('supplement'); ?></p>
                    </div>
                    <?php echo get_sub_field('description'); ?>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>

<?php if( have_rows('etude') ): 
     while( have_rows('etude') ): the_row(); ?>
    <div class="service-box1 overlay-wrap" style="background: #000 url(<?php echo get_sub_field('background')["url"]; ?>) no-repeat center top; background-size: cover; padding: 100px 0 90px;">
    <div class="overlay"> </div>
        <div class="container">
            <div class="row">
                <?php foreach(get_sub_field('etude_rept') as $element): ?>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="s1-box text-center">
                        <h4><?php echo $element["numero"]; ?></h4>
                        <h5><?php echo $element["titre"]; ?></h5>
                        <?php echo $element["description"]; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php endwhile; endif; ?>

<?php if( have_rows('activity') ): 
     while( have_rows('activity') ): the_row(); ?>
    <div class="home-features">
        <div class="container">
            <div class="content-head text-uppercase text-center">
                <h4><?php echo get_sub_field('titre'); ?></h4>
                <p><?php echo get_sub_field('supplement'); ?></p>
            </div>
            <div class="row descr-feature">
                <span class="">
                    <?php echo get_sub_field('description_1'); ?>
                </span>
            </div>
            <div class="row ">
                <div class="col-md-4 col-sm-12">
                    <?php foreach(get_sub_field('activite_1') as $element): ?>
                        <div class="feature-box">
                            <a href="<?php echo $element["lien"]['url']; ?>" class="feature-box-ico"> 
                                <?php echo $element["icon"]; ?>
                            </a>
                            <h3 class="building"><a href="<?php echo $element["lien"]['url']; ?>"><?php echo $element["titre"]; ?></a></h3>
                            <?php echo $element["descr"]; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
                
                <div class="col-md-4 hidden-sm hidden-xs">
                    <div class="img-border">
                        <img src="<?php echo get_sub_field('image')["url"]; ?>" class="img-responsive" alt="" />
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-12">
                    <?php foreach(get_sub_field('activite_2') as $element): ?>
                        <div class="feature-box">
                            <a href="<?php echo $element["lien"]['url']; ?>" class="feature-box-ico"> 
                                <?php echo $element["icon"]; ?>
                            </a>
                            <h3 class="building"><a href="<?php echo $element["lien"]['url']; ?>"><?php echo $element["titre"]; ?></a></h3>
                            <?php echo $element["descr"]; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <div class=" descr2-feature">
                    <?php echo get_sub_field('description_2'); ?>
                
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>

<?php if( have_rows('projects') ): 
     while( have_rows('projects') ): the_row(); ?>
    <div id="project" class="home-projects projects-content">
        <div class="container">
            <div class="content-head content-head-lite text-center text-uppercase">
                <h4><?php echo get_sub_field('titre'); ?></h4>
                <p><?php echo get_sub_field('supplement'); ?></p>
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
        <div class="container text-center space-top-45"> <a class="bttn bttn-bdr-black bttn-md center-block" href="<?php echo get_sub_field('lien_all')['url']; ?>">Voir tout</a> </div>
    </div>
    <?php endwhile; endif; ?>
    
<?php if( have_rows('client') ): 
     while( have_rows('client') ): the_row(); ?>
    <div class="clients">
        <div class="container">
            <div class="content-head text-center text-uppercase">
                <h4><?php echo get_sub_field('titre'); ?></h4>
            </div>
        </div>
        <div class="container">
            <div id="clients2" class="owl-carousel owl-theme">
                <?php foreach(get_sub_field('liste') as $element): ?>
                    <div class="item"> <img alt="" class="img-responsive" src="<?php echo $element['url']; ?>" /> </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>