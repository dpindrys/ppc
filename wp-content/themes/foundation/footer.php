	</div>
</section>

<footer class="row full-width">
	
	<div class="medium-2 columns"><p><ul class="footer-list"><li>Home</li><li>About</li><li>Vendors</li><li>Events</li><li>Contact</li></p></div>
	<div class="medium-4 columns"><p>PACIFIC PIPE CO.<hr></p><p>255 Kuala St</p><p>Pearl City, HI 96782</p></div>
	<div class="medium-4 columns"><p> <?php the_widget( 'WP_Widget_Calendar', $instance, $args ); ?> </p></div>
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