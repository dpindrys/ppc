	</div>
</section>

<footer class="row full-width">
<div class="row interior">
	

	<div class="medium-2 columns"><p>Home</p></div>
	<div class="medium-2 columns"><p>About Us</p><hr></div>
	<div class="medium-4 columns"><p>Products</p><hr></p><ul class="footer-list"><li>Agriculture</li><li>Golf</li><li>Irrigation</li><li>Waterworks</li></div>


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