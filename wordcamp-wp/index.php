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
 */

	get_header();

?>

<ul class="slideshow">


	<!-- //Loads a template part into a template. fancy name for an include, useful in child themes. -->
	<?php get_template_part('/template-parts/slider' , 'home'); ?>

</ul>

<div class="upper-posts">

	<?php get_template_part('/template-parts/blog' , 'home'); ?>

</div>
	
<?php get_footer(); ?>
