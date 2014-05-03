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
			</div>
			</div>
			<div class="home-hero hide-for-small-only">
				<div class="row interior">
					<div class="medium-12 columns">
						<h1>Trusted solutions,<br>dedicated delivery</h1>
						<h2>Agriculture, Golf, Irrigation and Waterworks destribution.</h2>
					</div>

				</div>
			</div>
		
			<!--3 buttons-->
			<div class="row interior ">
			<div class="medium-4 columns">
			<a href="?page_id=25">
			<div class="front-field">
			<img class="about-button" src="wp-content/themes/foundation/includes/assets/about_button.png">
			<h4 class="text-center">About Us</h4>
			<p>Find out what sets us apart.</p>
			</div>
			</a>
			</div>

						<div class="medium-4 columns">
			<a href="?page_id=14">
			<div class="front-field">
			<img class="about-button" src="wp-content/themes/foundation/includes/assets/vendors_button.png">
			<h4 class="text-center">Our Vendors</h4>
			<p>The best in the world.</p>
			</div>
			</a>
			</div>

			<div class="medium-4 columns">
			<a href="?post_type=tribe_events">
			<div class="front-field">
			<img class="about-button" src="wp-content/themes/foundation/includes/assets/events_button.png">
			<h4 class="text-center">Training & Events</h4>
			<p>Building an empowered community.</p>
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