<?php

/**
 * Template Name: activite
 */
get_header(); ?>
    <div class="page-head overlay-wrap" style="background: #000 url(<?php echo get_field('background_activite')['url']; ?>) no-repeat center; background-size: cover; padding: 102px 0px 101px;">
        <div class="overlay"></div>
        <div class="container text-uppercase">
            <ul class="bcrumbs">
                <li><a href="/"><i class="fa fa-home"></i></a></li>
                <li><?php echo get_the_title(); ?></li>
            </ul>
        </div>
    </div>
    <div class="home-profile">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12" style="margin-bottom: 15px;">
                    <div class="row">
                        <div class="col-12">
                            <div class="img-border"><img src="<?php echo get_field('image')['url']; ?>" class="img-responsive" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-sm-12" style="padding-left: 25px;">
                    <h3>
                        <?php echo get_field('icon'); ?>
                        <a><?php echo get_the_title(); ?></a>
                    </h3>
                    <?php echo get_field('description_1'); ?>   
                </div>
            </div>
            <div class=" descr3-feature">
                <?php echo get_field('description_2'); ?>
                
            </div>
        </div>
    </div>
    
    <div id="basicExample" class="mb-5 ">
        <?php 
        if (get_field('gallery')) :
        foreach(get_field('gallery') as $element): ?>
        <a class="justified-gallery">
            <img alt="<?php echo $element["alt"]; ?>" src="<?php echo $element["url"]; ?>"/>
        </a>
        <?php endforeach;endif; ?>
    </div>

<?php get_footer(); ?>