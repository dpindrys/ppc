	</div>
</section>

<footer class="row full-width">
<div class="row interior">
	

	<div class="medium-4 columns"><p>Home</p><p>About</p><p>Products</p><ul class="footer-list"><li>Agriculture</li><li>Golf</li><li>Irrigation</li><li>Waterworks</li></div>
	<div class="medium-4 columns"><p>Events</p><hr> <?php the_widget( 'WP_Widget_Calendar', $instance, $args ); ?> </p></div>
	<div class="medium-4 columns"><p>Contact Us<hr></p></div>
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