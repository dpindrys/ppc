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

			<div class="home-hero">
				<div class="row interior">
					<div class="medium-6 columns">
						<h1>Trusted solutions, dedicated delivery.</h1>
					</div>
					<div class="medium-6 columns">
						<ul class="industries">
							<li>Agriculture</li> 
							<li>Golf</li>
							<li>Irrigation</li>
							<li>Waterworks</li>
						</ul>
					</div>
					<div class="medium-6 columns text-left">

					</div>
				</div>
			</div>
		
			<!--3 buttons-->
			<div class="row interior white">
			<div class="small-4 columns">
			<a href="?page_id=25">
			<div class="front-field">
			<img class="about-button" src="wp-content/themes/foundation/includes/assets/about_button.png">
			<h4 class="text-center hide-for-small-only">About Us</h4>
			</div>
			</a>
			</div>

						<div class="small-4 columns">
			<a href="?page_id=14">
			<div class="front-field">
			<img class="about-button" src="wp-content/themes/foundation/includes/assets/vendors_button.png">
			<h4 class="text-center hide-for-small-only">Our Vendors</h4>
			</div>
			</a>
			</div>

			<div class="small-4 columns">
			<a href="?post_type=tribe_events">
			<div class="front-field">
			<img class="about-button" src="wp-content/themes/foundation/includes/assets/events_button.png">
			<h4 class="text-center hide-for-small-only">Training & Events</h4>
			</div>
			</a>
			</div>


			</div>

			<!--Statement and Calendar widget-->

			<div class="row white interior white"></div>

						<footer>
							<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
							<p><?php the_tags(); ?></p>
						</footer>
						<?php comments_template(); ?>
					</article>
				<?php endwhile; // End the loop ?>

				</div>
					
			<?php get_footer(); ?>