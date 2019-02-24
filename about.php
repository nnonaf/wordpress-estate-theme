<?php /* Template Name: AboutPage*/ ?>

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




<section class="page_breadcrumbs ds parallax section_padding_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h1 class="weight-black">About</h1>
							<ol class="breadcrumb darklinks grey">
								<li>
									<a href="./">
										HomePage
									</a>
								</li>
								<li>
									<a href="#">Pages</a>
								</li>
								<li class="active">About</li>
							</ol>
						</div>
					</div>
				</div>
			</section>

			<section class="ls columns_padding_bottom section_padding_top_50 table_section table_section_md">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h3 class="bottommargin_40">
								<strong class="highlight weight-black fontsize_76">HI</strong> I’m Florence Green!</h3>
							<p>
								Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dgolores et ea rebum. Stet clita kasd gubergren, no sea takimata
								sanctus est Lorem ipsum dolor sit amet lorem ipsum dolor sit amet.
							</p>
							<a href="about.html" class="theme_button inverse topmargin_30">About me</a>
							<p class="lato grey fontsize_20 text-uppercase topmargin_40">
								Call now
								<br>
								<span class="fontsize_38 weight-black">800-123-4567</span>
							</p>
						</div>
						<div class="col-md-6 text-center bottommargin_0">
							<img src="images/person.png" alt="">
						</div>
					</div>
				</div>
			</section>

<?php
get_footer();






