
	<div id="post-content">
		<ul class="widgets">
			<?php dynamic_sidebar('bottom-widget-area') ?>
		</ul>
		<div class="clear"></div>
	</div>

	<div id="bottom">
		<div id="bottom-menu"><?php wp_nav_menu(array(
			'theme_location' => 'menu-2',
			'link_before'		=> '<span>',
			'link_after'		=> '</span>',
		)); ?></div>
		<div class="clear"></div>
	</div>

	<div id="footer">
		<div id="copyright">&copy; Copyright <span class="blue">Pro</span> Motion <span class="blue">Ads</span> <?php print date('Y'); ?></div>
		<div>Site By <a href="http://www.ccistudios.com" target="_blank">CCI Studios</a></div>

		<ul class="widgets">
			<?php dynamic_sidebar('footer-widget-area') ?>
		</ul>
		<div class="clear"></div>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>
