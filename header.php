<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <!--<title><?php echo get_the_title(); ?></title>-->
    <?php wp_head(); ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/SCB_favicone.png">
    
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
<!--    <meta name="image" property="og:image" content="https://sidef.mg/wp-content/uploads/2021/09/sidef-logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    
    <!--<link href="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/css/font-awesome/css/font-awesome.css" media="screen" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--<link href="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css">-->
    <!-- flaticon -->
    <link href="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/css/flaticon/css/flaticon.css" media="screen" rel="stylesheet" type="text/css">
    <!-- owl-carousel -->
    <link href="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/css/owl.carousel.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/css/owl.theme.css" media="screen" rel="stylesheet" type="text/css">
    <!-- sidebar on small screens -->
    <link href="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/css/easy-sidebar.css" media="screen" rel="stylesheet" type="text/css">
    <!-- prettyPhoto -->
    <link href="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/js/pp/css/prettyPhoto.css" media="screen" rel="stylesheet" type="text/css">
    <!-- isotope -->
    <link href="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/js/vendors/isotope/isotope.css" media="screen" rel="stylesheet" type="text/css">
    <!-- preloader CSS -->
    <link href="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/css/spinkit/spinkit.css" media="screen" rel="stylesheet" type="text/css">
    <!-- Main CSS -->
    <link href="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/css/style.css" media="screen" rel="stylesheet" type="text/css">
    <!--<link href="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/style.css" media="screen" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_directory");  ?>/assets/justifiedGallery/justifiedGallery.min.css" />
</head>

<body>

<!--    <div id="preloader">
        <div id="status">
            <div class="spinner"> </div>
        </div>
    </div>-->
    <header class="header-2">
        <div class="container">
            <div class="navbar-header">
                <button class=" burger-menu easy-sidebar-toggle"></button>
                <a class="navbar-brand" href="#">
                    <img id="logo_scb" alt="" src="<?php bloginfo("stylesheet_directory");  ?>/assets/img/SCB_logo.webp" src_noir="<?php bloginfo("stylesheet_directory");  ?>/assets/img/SCB_logo.webp" src_blanc="<?php bloginfo("stylesheet_directory");  ?>/assets/img/SCB_logo_blanc.webp">
                </a>
            </div>
            <nav class="navbar navbar-default">
                <div class="container">
                    <div id="navbar" class="navbar-collapse ">
                        <ul class="nav navbar-nav navbar-right ">
                            
                             <?php 
                                $menu_name = 'menu-principal';
                                
                                $menus = wp_get_nav_menu_items( $menu_name, array() );
                                $taille = count($menus);
                                
                                ?>
                                <?php for ($i = 0; $i < $taille; $i++) { 
                                    $autre_actif = false;
                                    if($menus[$i]->{'menu_item_parent'} == "0"): 
                                        if($menus[$i]->{'object'} == "page"): ?>

                                            <li class="<?php if ($menus[$i]->{'object_id'} == get_queried_object_id()): $autre_actif = true;?>active<?php endif; ?>"> 
                                                <a  href="<?php echo $menus[$i]->{'url'}; ?>" role="button">
                                                    <?php echo $menus[$i]->{'title'}; ?>
                                                </a>
                                            </li>
                                        <?php elseif ($menus[$i]->{'object'} == "custom"): 
                                            $idParent = $menus[$i]->{'object_id'};
                                            ?>
                                            <li class="dropdown 
                                               <?php for ($j = $i + 1; $j < $taille; $j++) { if($menus[$j]->{'menu_item_parent'} == $idParent): if ($menus[$j]->{'object_id'} == get_queried_object_id()): ?>active<?php break; endif; endif; } ?>
                                                "> 
                                                <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                                                    <?php echo $menus[$i]->{'title'}; ?><span class="x-caret"></span>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-left">
                                                    <?php for ($j = $i + 1; $j < $taille; $j++) { ?>
                                                        <?php if($menus[$j]->{'menu_item_parent'} == $idParent): ?>
                                                        <li class="<?php if ($menus[$j]->{'object_id'} == get_queried_object_id()): ?>active<?php endif; ?>">
                                                            <a href="<?php echo $menus[$j]->{'url'}; ?>"><?php echo $menus[$j]->{'title'}; ?></a>
                                                        </li>
                                                        <?php else: break;?>
                                                        
                                                        <?php endif; ?>
                                                    <?php } ?>
                                                </ul>
                                            </li>
                                        <?php endif;endif;
                                    } ?>
                            
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>