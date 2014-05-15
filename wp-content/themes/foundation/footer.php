	</div>
</section>

<footer class="row full-width">
<div class="row interior">
	<div class="medium-4 columns toppadding20">
		<a href="#"><i class="fa fa-chevron-down pull-left"></i><h2>Navigate</h2></a>
		<hr>

		
		<hr class="show-for-small-only">
	</div>
	<div class="medium-4 columns">
		<i class="fa fa-chevron-down pull-left"></i><h2>Upcoming Events</h2>
		<hr>
		<?php the_widget( 'TribeEventsListWidget', $instance, $args ); ?><hr class="show-for-small-only">
	</div>
	<div class="medium-4 columns">
		<i class="fa fa-chevron-down pull-left"></i><h2>Contact Us</h2>
		<hr>
		
		<div class="row">
		<div class="small-2 columns">
			<h2><i class="fa fa-phone fa-2x fa-fw"></i></h2>
			<h2><i class="fa fa-envelope fa-2x fa-fw"></i></h2>
			<h2><i class="fa fa-map-marker fa-2x fa-fw"></i></h2>
		</div>
		<div class="small-10 columns">
			<h2>(808) 455-8700</p>
			<p>email@pacificpipe.net</p>
			<p>1255 Kuala St, <br>Pearl City, HI 96782</p>
		</div></div>
		<img class="th" src="<?php bloginfo('url'); ?>/wp-content/themes/foundation/includes/assets/map.jpg">
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