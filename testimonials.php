<?php /* Template Name: TestimonialPage*/ ?>

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage startuproom
 * @since 1.0.0
 */

get_header();
?>


<section class="ls ms section_padding_top_120 section_padding_bottom_100 parallax page_testimonials">
<div class="container">
    <div class="row">
        <div class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8 text-center">
            <div class="owl-carousel" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-dots="true">
                <blockquote class="blockquote-item">
                    <div class="item-meta">
                        <img src="images/faces/01.jpg" alt="">
                        <h5 class="small-text">Christopher M. Jiles, Businessman</h5>
                    </div>
                    <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                </blockquote>
                <blockquote class="blockquote-item">
                    <div class="item-meta">
                        <img src="images/faces/02.jpg" alt="">
                        <h5 class="small-text">David S. Wells, CEO</h5>
                    </div>
                    <p>Tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est ipsum dolor sit amet.</p>
                </blockquote>
                <blockquote class="blockquote-item">
                    <div class="item-meta">
                        <img src="images/faces/03.jpg" alt="">
                        <h5 class="small-text">Elizabeth M. Lloyd, Lawyer</h5>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum.</p>
                </blockquote>

            </div>
        </div>
    </div>
</div>
</section>



<?php
get_footer();






