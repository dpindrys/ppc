<?php
/*
Template Name: Contact Page
*/
get_header(); ?>
<div class="row interior white toppadding1">
      <div class="medium-12 columns"><h1>Contact Us</h1>
<hr>
	<div class="row interior white">
		<div class="medium-6 columns">
<h3 class="light">Visit Us</h3>
<p>1255 Kuala St, Pearl City, HI 96782</p>
<a href="https://www.google.com/maps/preview?ie=UTF-8&q=Pacific+Pipe+Co.&fb=1&gl=us&hq=pacific+pipe+company&cid=17962707371569505338&ei=CaNaU5y4DZKpyATOi4CoCA&ved=0CKQBEPwSMAs" target="new">
<img class="th" src="wp-content/themes/foundation/includes/assets/map.jpg"></a>
</div>
<div class="medium-6 columns"><h3 class="light">Get in Touch</h3>
<p>Office<br>(808) 455-8700</p>
<p>Sales<br>(808) 455-8700</p>
<p>Warehouse<br>(808) 455-8700</p></div>
</div>

<div class="row interior">
<div class="medium-6 columns">
<h3 class="light">Hours</h3>
<p>M-F 7:00am - 4:00pm</p>
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