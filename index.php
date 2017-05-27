<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package awps
 */

get_header(); ?>



<div class="sidebar-left"></div>

<div class="main">
	<div class="content"></div>
	<div class="teasers">
		<div class="teaser"><a class="btn btn-primary" href="#">Click</a></div>
		<div class="teaser">teaser 2</div>
		<div class="teaser">teaser 3</div>
		<div class="teaser">teaser 4</div>
		<div class="teaser">teaser 5</div>
	</div>
</div>

<div class="sidebar-right"></div>
<div class="footer"></div>




<?php
get_footer();
