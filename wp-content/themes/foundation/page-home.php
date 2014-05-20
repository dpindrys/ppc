<?php
/*
Template Name: Home Page
*/
get_header(); ?>

	
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<!--
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			-->
	
			<?php echo do_shortcode('[rev_slider home-slider]'); ?>
		
			<!--3 buttons-->

			
			<div class="row interior ">

			<div class="medium-3 columns">
			<a href="products/agriculture">
			<div class="front-field">
			<img class="about-button" src="wp-content/themes/foundation/includes/assets/ag-icon.png">
			<h4 class="">Agriculture</h4>
			<p class="hide-for-small-only"> .</p>
			</div>
			</a>
			</div>

						<div class="medium-3 columns">
			<a href="roducts/golf">
			<div class="front-field">
			<img class="about-button" src="wp-content/themes/foundation/includes/assets/golf-icon.png">
			<h4 class="text-center">Golf</h4>
			<p class="hide-for-small-only">.</p>
			</div>
			</a>
			</div>

			<div class="medium-3 columns">
			<a href="roducts/irrigation">
			<div class="front-field">
			<img class="about-button" src="wp-content/themes/foundation/includes/assets/ir-icon.png">
			<h4 class="text-center">Irrigation</h4>
			<p class="hide-for-small-only">.</p>
			</div>
			</a>
			</div>

			<div class="medium-3 columns">
			<a href="roducts/waterworks">
			<div class="front-field">
			<img class="about-button" src="wp-content/themes/foundation/includes/assets/wa-icon.png">
			<h4 class="">Waterworks</h4>
			<p class="hide-for-small-only">.</p>
			</div>
			</a>
			</div>



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