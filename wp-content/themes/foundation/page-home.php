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
			<div class="medium-12 columns text-left">
			<h1 class="hero-type">Trusted solutions.</h2>
			<h1 class="hero-type">Dedicated delivery.</h2>
			</div>
			<div class="medium-6 columns text-left">

			</div>
			</div></div>
			
			<!--3 buttons-->
			<div class="row interior brand">
			<div class="medium-4 columns">
			<a href="?page_id=25">
			<div class="front-field">
			<img class="about-button" src="wp-content/themes/foundation/includes/assets/about_button.png">
			<h4 class="text-center">Who We Are</h4>
			<hr class="small-thick">
			<p>Meet our team members and find out what sets us apart from other distributors.</p>
			</div>
			</a>
			</div>

						<div class="medium-4 columns">
			<a href="?page_id=14">
			<div class="front-field">
			<img class="about-button" src="wp-content/themes/foundation/includes/assets/vendors_button.png">
			<h4 class="text-center">Our Vendors</h4>
			<hr class="small-thick">
			<p>Browse acategorized list of all the products that are supplied by our world class manufacturers.</p>
			</div>
			</a>
			</div>

			<div class="medium-4 columns">
			<a href="?post_type=tribe_events">
			<div class="front-field">
			<img class="about-button" src="wp-content/themes/foundation/includes/assets/projects_button.png">
			<h4 class="text-center">Training & Events</h4>
			<hr class="small-thick">
			<p>Take a look at some of our past projects we’ve helped make possible and imagine what we could do for you.</p>
			</div>
			</a>
			</div>


			</div>

			<!--Statement and Calendar widget-->

			<div class="row white interior content-fill">
			<div class="medium-8 columns">
			<h4 class="light">We are a distributer that supplies products that supply:</h4></div>
			<div class="medium-4 columns">
			[do_widget_area events-1]</div>
						<footer>
							<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
							<p><?php the_tags(); ?></p>
						</footer>
						<?php comments_template(); ?>
					</article>
				<?php endwhile; // End the loop ?>

				</div>
					
			<?php get_footer(); ?>