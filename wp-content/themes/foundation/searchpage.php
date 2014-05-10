<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>
<div class="row interior white">
	<div class="small-12 large-8 columns" role="main">
	
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<!--
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			-->
			<div class="entry-content">
<?php get_search_form(); ?>

	</div>
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>