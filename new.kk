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
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>



dvvvvvvvvvvvvvvv




<?php
get_footer();








<?php
   $url = get_template_directory_uri();
   echo "<section class='intro_section page_mainslider' style='background-image:url($url/images/k1.png);background-repeat: no-repeat center center fixed;  background-size: cover;
   height: 100%;
   overflow: hidden;'>";
 

?>
  <div class="container">
      <div class="row">
          <div class="col-sm-12 text-center">
              <div class="slide_description_wrapper">
                  <div class="slide_description">
                      <p class="big to_animate" data-animation="fadeInLeft">Discover</p>
                      <p class="to_animate" data-animation="fadeInRight">Living a Life with Passion</p>
                    </div><!-- eof .slide_description -->
                </div><!-- eof .slide_description_wrapper -->
            </div> <!-- eof .col-* -->
        </div><!-- eof .row -->
    </div>
</section>
