	</div>
</section>

<footer class="row full-width">
<div class="row interior">
	<div class="medium-3 columns">
		<i class="fa fa-chevron-down pull-left"></i><h2>Contact Us</h2>
		<hr>
		
		<div class="row">
		<div class="small-2 columns">
			<h2><i class="fa fa-phone fa fa-fw"></i></h2>
			<h2><i class="fa fa-envelope fa fa-fw toppadding1"></i></h2>
			<h2><i class="fa fa-map-marker fa fa-fw"></i></h2>
		</div>
		<div class="small-10 columns">
			<h2>(808) 455-8700</p>
			<p>email@pacificpipe.net</p>
			<p>1255 Kuala St, <br>Pearl City, HI 96782</p>
		</div></div>
		
	</div>
	
	<div class="medium-6 columns">
		<i class="fa fa-chevron-down pull-left"></i><h2>Upcoming Training & Events</h2>
		<hr>
		<?php the_widget( 'TribeEventsListWidget', $instance, $args ); ?><hr class="show-for-small-only">
	</div>
	
	<div class="medium-3 columns toppadding20">
		<i class="fa fa-chevron-down pull-left"></i><h2>Menu</h2>
		<hr>
		<ul class="circle">
		<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><li>Home page</li></a>
		<a href="#"><li>About Us</li></a>
		<a href="3"><li>Our products
			<ul>
			<a href="#"><li>Agriculture</li></a>
			<a href="#"><li>Golf</li></a>
			<a href="#"><li>Irrigation</li></a>
			<a href="#"><li>Waterworks</li></a>
			</ul></li>
		<a href="#"><li>Events</li></a>
		<a href="#"><li>Contact Us</li></a>

		
		<hr class="show-for-small-only">
	</div>



		<?php do_action('foundationPress_before_footer'); ?>
		<?php dynamic_sidebar("footer-widgets"); ?>
		<?php do_action('foundationPress_after_footer'); ?>
</footer>
<a class="exit-off-canvas"></a>
	
  <?php do_action('foundationPress_layout_end'); ?>
  </div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
</body>
</html>