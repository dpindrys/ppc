<?php
/*
Template Name: Events Page
*/
get_header(); ?>
<div class="row interior white toppadding1">
      <div class="medium-9 columns"><h1>Events</h1></div>
      <div class="medium-3 columns"></div>
</div>
<div class="row interior white">
	<div class="medium-12 columns">
    
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<!--
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			-->
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php comments_template(); ?>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
		
<?php get_footer(); ?>