	</div>
</section>

<footer class="row full-width">
	<div class="row interior">
	<div class="medium-4 columns grey"><p><ul><li>Home</li><li>About</li><li>Vendors</li><li>Events</li><li>Contact</li></p></div>
	<div class="medium-4 columns"><p>PACIFIC PIPE CO.</p><p>1255 Kuala St, Pearl City, HI 96782</p></div>
	<div class="medium-4 columns"><p>Social media</p></div>
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