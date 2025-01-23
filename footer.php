<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>
<footer class="overlay-wrap" style="background: url(<?php echo get_field('background', 'option')['url']; ?>) no-repeat fixed;background-size: cover;">
    <div class="overlay"> </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-push-3 text-center">
                    <div class="footer-logo ">
                        <a href="/"> 
                            <img alt="" src="<?php bloginfo("stylesheet_directory");  ?>/assets/img/SCB_logo_footer_2.webp" class="img-fluid">
                        </a>
                        
                        <div class="clear"> </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget">
                        <?php echo get_field('siege', 'option'); ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget">
                        <?php echo get_field('heure', 'option'); ?>
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
<!--                    <div class="footer-widget">
                        <h5>Twitter Feeds</h5>
                        <div id="tweecool"> </div>
                    </div>-->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget">
                        
                        <h5>Liens</h5>
                        <ul class="footer-contact">
                            <?php echo get_field('autres_lien', 'option'); ?>
                        </ul>
<!--                        <div class="footer-newsletter">
                            <p>Entrez votre adresse e-mail pour notre liste de diffusion afin de vous tenir au courant de nos dernières mises à jour.</p>
                            <form>
                                <input placeholder="Email Address" required="" type="email">
                                <button type="submit"><i class="fa fa-paper-plane">
							</i></button>
                            </form>
                        </div>-->
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="row">
                    <div class="col-md-6">
<!--                        <ul class="footer-menu list-inline text-uppercase">
                            <li class="active"><a href="index.html">Accueil</a></li>
                            <li><a href="#">Projets</a></li>
                            <li><a href="#">Recrutement</a></li>
                            <li><a href="#">HSE</a></li>
                        </ul>-->
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
back-to-top start
-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <a class="back-to-top" href=".top-bar"> <i aria-hidden="true" class="fa fa-chevron-up"></i></a>
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
back-to-top end
-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
overlay div start
-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <div class="overlay hided"></div>
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
overlay div end
-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <!--//asina copyright-->
<!--    </div>-->
    
<!--    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>-->
    
    <!-- jquery -->
    <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/js/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    
    <!--<script src="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/js/bootstrap.min.js"></script>-->
    <!-- owl-carousel -->
    <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/js/owl.carousel.min.js"></script>
    <!-- twitter -->
    <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/js/twitter.js"></script>
    <!-- counterup -->
    <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/js/waypoints.min.js"></script>
    <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/js/vendors/jquery.counterup.min.js"></script>
    <!-- isotope -->
    <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/js/vendors/isotope/isotope.pkgd.js"></script>
    
    <!-- cookie js -->
    <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/js/jquery.cookie.js"></script>
    <!-- pretty Photo -->
    <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/js/pp/js/jquery.prettyPhoto.js"></script>
    <!-- jquery-ui.min -->
    <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/js/jquery-ui.min.js"></script>
    <!-- REVOLUTION JS FILES -->
    <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/revolution/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/revolution/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
			(Load Extensions only on Local File Systems !  
			The following part can be removed on Server for On Demand Loading) -->
    <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/revolution/js/extensions/revolution.extension.actions.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/revolution/js/extensions/revolution.extension.carousel.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/revolution/js/extensions/revolution.extension.kenburn.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/revolution/js/extensions/revolution.extension.layeranimation.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/revolution/js/extensions/revolution.extension.migration.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/revolution/js/extensions/revolution.extension.navigation.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/revolution/js/extensions/revolution.extension.parallax.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/revolution/js/extensions/revolution.extension.slideanims.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/revolution/js/extensions/revolution.extension.video.min.js" type="text/javascript"></script>
    <link href="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/revolution/css/navigation.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/revolution/css/settings.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/justifiedGallery/jquery.justifiedGallery.min.js"></script>
    <?php // wp_footer(); ?>
    <script type="text/javascript">
        var tpj = jQuery;
        var revapi204;
        tpj(document).ready(function () {
            $("#basicExample").justifiedGallery({
    rowHeight : 220,
    lastRow : 'center',
    margins : 3
});
            
            if (tpj("#rev_slider_204_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_204_1");
            }
            else {
                revapi204 = tpj("#rev_slider_204_1").show().revolution({
                    sliderType: "standard"
                    , jsFileLocation: "revolution/js/"
                    , sliderLayout: "fullwidth"
                    , dottedOverlay: "none"
                    , delay: 9000
                    , navigation: {
                        keyboardNavigation: "off"
                        , keyboard_direction: "horizontal"
                        , mouseScrollNavigation: "off"
                        , onHoverStop: "off"
                        , touch: {
                            touchenabled: "on"
                            , swipe_threshold: 75
                            , swipe_min_touches: 1
                            , swipe_direction: "horizontal"
                            , drag_block_vertical: false
                        }
                        , arrows: {
                            style: "persephone"
                            , enable: true
                            , hide_onmobile: true
                            , hide_under: 0
                            , hide_onleave: false
                            , tmp: ''
                            , left: {
                                h_align: "left"
                                , v_align: "center"
                                , h_offset: 20
                                , v_offset: 0
                            }
                            , right: {
                                h_align: "right"
                                , v_align: "center"
                                , h_offset: 20
                                , v_offset: 0
                            }
                        }
                        , bullets: {
                            enable: false
                            , hide_onmobile: true
                            , hide_under: 600
                            , style: "metis"
                            , hide_onleave: true
                            , hide_delay: 200
                            , hide_delay_mobile: 1200
                            , direction: "horizontal"
                            , h_align: "center"
                            , v_align: "bottom"
                            , h_offset: 0
                            , v_offset: 30
                            , space: 5
                            , tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                        }
                    }
                    , viewPort: {
                        enable: true
                        , outof: "pause"
                        , visible_area: "80%"
                    }
                    , responsiveLevels: [1240, 1024, 778, 480]
                    , visibilityLevels: [1240, 1024, 778, 480]
                    , gridwidth: [1240, 1024, 778, 480]
                    , gridheight: [700, 650, 600, 500]
                    , lazyType: "none"
                    , parallax: {
                        type: "mouse"
                        , origo: "slidercenter"
                        , speed: 2000
                        , levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 46, 47, 48, 49, 50, 55]
                        , type: "mouse"
                    , }
                    , shadow: 0
                    , spinner: "off"
                    , stopLoop: "off"
                    , stopAfterLoops: -1
                    , stopAtSlide: -1
                    , shuffle: "off"
                    , autoHeight: "off"
                    , hideThumbsOnMobile: "on"
                    , hideSliderAtLimit: 0
                    , hideCaptionAtLimit: 0
                    , hideAllCaptionAtLilmit: 0
                    , debugMode: false
                    , fallbacks: {
                        simplifyAll: "off"
                        , nextSlideOnWindowFocus: "off"
                        , disableFocusListener: false
                    , }
                });
            }
        }); /*ready*/
    </script>
    <!-- Main Javascript -->
    <!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
    <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/js/jquery.style.switcher.js"></script>
    <script src="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/js/main.js"></script>
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
        !!WARINING THIS IS FOR DEMO ONLY YOU CAN DELETE IT 
         COLOR SWITCHER AND BOXED/WIDE VIEW STARTS
         -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    <link href="<?php bloginfo("stylesheet_directory");  ?>/assets/darna/css/color.css" rel="stylesheet" id="theme-switch">
    <style>
        #colour-variations li a[data-theme=style-rtl],
        #colour-variations li a[data-theme=ltr] {
            border: 1px solid #ccc;
            padding: 10px;
            width: auto;
            height: auto;
        }
        
        #colour-variations {
            padding: 10px;
            -webkit-transition: 0.5s;
            -o-transition: 0.5s;
            transition: 0.5s;
            width: 140px;
            position: fixed;
            left: 0;
            top: 160px;
            z-index: 999999;
            background: #fff;
            border-radius: 4px;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
            -webkit-box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
            -moz-box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
            -ms-box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
        }
        
        #colour-variations.sleep {
            margin-left: -140px;
        }
        
        #colour-variations h3 {
            text-align: center;
            ;
            font-size: 11px;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #777;
            margin: 0 0 10px 0;
            padding: 0;
            ;
        }
        
        #colour-variations ul,
        #colour-variations ul li {
            padding: 0;
            margin: 0;
        }
        
        #colour-variations ul {
            margin-bottom: 20px;
            float: left;
        }
        
        #colour-variations li {
            list-style: none;
            display: inline;
        }
        
        #colour-variations li a {
            width: 20px;
            height: 20px;
            position: relative;
            float: left;
            margin: 5px;
        }
        
        #colour-variations li a[data-theme=style] {
            background: #fff;
            border: 1px solid #ccc
        }
        
        #colour-variations li a[data-theme=red] {
            background: #FA5555;
        }
        
        #colour-variations li a[data-theme=turquoise] {
            background: #27E1CE;
        }
        
        #colour-variations li a[data-theme=blue] {
            background: #2772DB;
        }
        
        #colour-variations li a[data-theme=orange] {
            background: #FF7844;
        }
        
        #colour-variations li a[data-theme=yellow] {
            background: #FCDA05;
        }
        
        #colour-variations li a[data-theme=pink] {
            background: rgb(251, 137, 155);
        }
        
        #colour-variations li a[data-theme=purple] {
            background: #7045FF;
        }
        
        #colour-variations a[data-layout=boxed],
        #colour-variations a[data-layout=wide] {
            padding: 2px 0;
            width: 48%;
            border: 1px solid #ededed;
            text-align: center;
            color: #777;
            display: block;
        }
        
        #colour-variations a[data-layout=boxed]:hover,
        #colour-variations a[data-layout=wide]:hover {
            border: 1px solid #777;
        }
        
        #colour-variations a[data-layout=boxed] {
            float: left;
        }
        
        #colour-variations a[data-layout=wide] {
            float: right;
        }
        
        .option-toggle {
            position: absolute;
            right: 0;
            top: 0;
            margin-top: 5px;
            margin-right: -30px;
            width: 30px;
            height: 30px;
            background: #8dc63f;
            text-align: center;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
            color: #fff;
            cursor: pointer;
            -webkit-box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
            -moz-box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
            -ms-box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
        }
        
        .option-toggle i {
            top: 5px;
            position: relative;
            font-size: 20px;
        }
        
        .option-toggle:hover,
        .option-toggle:focus,
        .option-toggle:active {
            color: #fff;
            text-decoration: none;
            outline: none;
        }
    </style>
    
    <script>
        
        $(document).ready(function() {
            
        });
    </script>
     <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KWH2B82FC1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KWH2B82FC1');
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NHX3LKM0JX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-NHX3LKM0JX');
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-386079901"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-386079901');
</script>
<!-- Event snippet for Website traffic conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-386079901/NkkxCJisl_YCEJ25jLgB',
      'event_callback': callback
  });
  return false;
}
</script>


</body>
</html>
