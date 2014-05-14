	</div>
</section>

<footer class="row full-width">
<div class="row interior">
	

	<div class="medium-4 columns toppadding20"><i class="fa fa-home fa-2x pull-left"></i><h2>Home</h2><hr><i class="fa fa-users fa-2x pull-left"></i><h2>About Us</h2><hr><p></p><i class="fa fa-cogs fa-2x pull-left"></i><h2>Products</h2><hr class="show-for-small-only"></div>
	<div class="medium-4 columns"><i class="fa fa-calendar fa-2x pull-left"></i><h2>Events</h2><?php the_widget( 'TribeEventsListWidget', $instance, $args ); ?><hr class="show-for-small-only"></div>
	<div class="medium-4 columns"><i class="fa fa-microphone fa-2x pull-left"></i><h2>Contact Us</h2>
								 <div class="row">
								 <div class="medium-12 columns"><img src="<?php bloginfo('url'); ?>/wp-content/themes/foundation/includes/assets/map.jpg"></div></div></div>
	



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