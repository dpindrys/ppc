<?php
/**
 * Sample template for displaying single vendors posts.
 * Save this file as as single-vendors.php in your current theme.
 *
 * This sample code was based off of the Starkers Baseline theme: http://starkerstheme.com/
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	

	<h1><?php the_title(); ?></h1>

		<h2>Custom Fields</h2>	
		
		<strong>Vendor Logo:</strong> <?php print_custom_field('vendor_logo:to_image_tag'); ?><br />
		<strong>Site URL</strong> <?php print_custom_field('URL'); ?><br />
		<br />
		<br />
		<br />




<?php endwhile; // end of the loop. ?>

<?php #get_sidebar(); ?>
<?php get_footer(); ?>