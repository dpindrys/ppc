<?php
/*
Template Name: Waterworks Page
*/
get_header(); ?>
<div class="row interior white toppadding1">
      <div class="medium-9 columns"><h1>Waterworks</h1><hr>
      <p>HD Supply Waterworks is the nation’s largest distributor of water, sewer, storm and fire protection products. We deliver the quality products and superior services our customers demand to get the job done. Our highly knowledgeable associates understand the specific needs of our customers and can be relied upon to provide personal touch service.</p></div>
      <div class="medium-3 columns">

               <ul class="side-nav hide-for-small-only">
        
          <li class=""><a href="?page_id=14">All Equipment</a></li>
          <li class=""><a href="?page_id=19">Agriculture</a></li>
          <li class=""><a href="?page_id=254">Golf</a></li>
          <li class=""><a href="?page_id=16">Irrigation</a></li>
          <li class="active"><a href="?page_id=8">Waterworks</a></li>

        </ul>

</div>

	
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