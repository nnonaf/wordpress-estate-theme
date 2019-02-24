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
 * @since 1.0.0
 */
?>

<!DOCTYPE html>

<html class="no-js">

<head <?php language_attributes(); ?>>
	<title>LifeGuide</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>

    <div class="preloader">
        <div class="preloader_image">

        </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
        <div class="widget widget_search">
            <form role="search" method="get" class="searchform form-inline" action="/">
                <div class="form-group">
                    <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
                </div>
                <button type="submit" class="theme_button">Search</button>
            </form>
        </div>
    </div><!-- wrappers for visual page editor and boxed version of template -->


<div id="canvas"> 
	<div id="box_wrapper" class="">



	<section class="page_topline ls ms section_padding_0 table_section table_section_md">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center text-md-left">
                    <div class="page_social_icons">
                        <a class="social-icon soc-facebook" href="#" title="Facebook">&nbsp;</a>
                        <a class="social-icon soc-twitter" href="#" title="Twitter">&nbsp;</a>
                        <a class="social-icon soc-google" href="#" title="Google">&nbsp;</a>
                        <a class="social-icon soc-linkedin" href="#" title="LinkedIn">&nbsp;</a>
                        <a class="social-icon soc-dribbble" href="#" title="Dribble">&nbsp;</a>
                    </div>
                </div>
                <div class="col-md-9 text-center text-md-right">
                    <span class="">
                        <i class="rt-icon2-map2 highlight fontsize_24"></i>&nbsp;25 Salvation road opebi, ikeja</span>
                        <span class=""><i class="rt-icon2-printer2 highlight fontsize_24"></i>&nbsp;<b><span>2348037215368</span></b>4</span>
                        <span class=""><i class="rt-icon2-mail2 highlight fontsize_24"></i>&nbsp;info@adeyemiadeniyi.com.ng</span>
                    </div>
                </div>
            </div>
         </div>
    </section>

<header class="page_header header_white affix-header table_section columns_padding_0 toggle_menu_right">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-xs-6">
                <?php
                //  get root url and add it to image link
                $url = get_template_directory_uri();
                echo "<img src='$url/images/!uploads/logo.jpg' alt='image is loading.....' width='100' height='80' class=''>";
                
                ?>
                
                &nbsp;Real Estate Bishop
                <br class=""><span class="toggle_menu" style="">
                    <span></span></span>
            </div>
            <div class="col-md-6 text-center selected">
                <!-- main nav start -->
                <nav class="mainmenu_wrapper">
                    <ul class="mainmenu nav sf-menu">
                        <li><a href="http://localhost/wordpress/" data-mce-href="#">Home</a></li>
                        <li><a href="http://localhost/wordpress/64-2" data-mce-href="#">about</a></li>
                        <li><a href="#" data-mce-href="#">blog</a></li>
                        <li><a href="http://localhost/wordpress/59-2" data-mce-href="#">testimonials</a></li>

                        
                        <li><a href="#" data-mce-href="#">store</a></li>
                        <li>
                             <?php
                             $url = get_template_directory_uri();
                                echo " <a href=' $url/57-2' data-mce-href=''>contact</a></li>";
                             ?>
                    </ul>
                </nav>
                <!-- eof main nav -->
            </div>
            <div class="col-md-3 text-right">
                <span class="hidden-xs">
                    <a href="#" class="social-icon border-icon rounded-icon color-icon soc-facebook"></a>
                    <a href="#" class="social-icon border-icon rounded-icon color-icon soc-twitter"></a>
                    <a href="#" class="social-icon border-icon rounded-icon color-icon soc-google"></a>
                    <a href="#" class="social-icon border-icon rounded-icon color-icon soc-youtube"></a>
                </span>
            </div>
        </div>
    </div>
</header>