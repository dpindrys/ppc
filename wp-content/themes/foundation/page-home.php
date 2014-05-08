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
	
			<div class="home-hero hide-for-small-only">
				<div class="row interior">
					<div class="medium-12 columns">
						<h1>Trusted solutions,<br>dedicated delivery:</h1>
						<h2><a href="products/agriculture/">Agriculture</a>, <a herf="products/golf/">Golf</a>, <a href="products/irrigation/">Irrigation</a> and <a href="products/waterworks/">Waterworks</a> distribution.</h2>
					</div>

				</div>
			</div>
		
			<!--3 buttons-->
			<div class="row interior ">
			<div class="medium-4 columns">
			<a href="?page_id=25">
			<div class="front-field">
			<img class="about-button" src="wp-content/themes/foundation/includes/assets/about-button.png">
			<h4 class="">About Us</h4>
			<p class="hide-for-small-only">Find out what sets us apart.</p>
			</div>
			</a>
			</div>

						<div class="medium-4 columns">
			<a href="?page_id=14">
			<div class="front-field">
			<img class="about-button" src="wp-content/themes/foundation/includes/assets/products-button.png">
			<h4 class="text-center">Our Products</h4>
			<p class="hide-for-small-only">The best in the world.</p>
			</div>
			</a>
			</div>

			<div class="medium-4 columns">
			<a href="?post_type=tribe_events">
			<div class="front-field">
			<img class="about-button" src="wp-content/themes/foundation/includes/assets/calendar-button.png">
			<h4 class="">Training & Events</h4>
			<p class="hide-for-small-only">Building an empowered community.</p>
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