<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<title><?php
		global $page, $paged;

		wp_title('|', true, 'right');
		bloginfo('name');

		$site_description = get_bloginfo('description', 'display');
		if ($site_description && (is_home() || is_front_page()))
			echo " | $site_description";

		if ($paged >= 2 || $page >= 2)
			echo ' | '.sprintf(__('Page %s', 'pro_motion_ads'), max($paged, $page));
	?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url');?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url');?>" />

	<script type="text/javascript" src="http://use.typekit.com/gqg0gni.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<?php
	if (is_singular() && get_option('thread_comments'))
		wp_enqueue_script('comment-reply');

	wp_head(); ?>
</head>

<body <?php body_class() ?>>
<div id="wrapper" class="hfeed">

	<div id="top">
		<div id="logo">
			<a href="<?php echo home_url('/'); ?>">
				<img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" width="372" height="96" />
			</a>
		</div>

		<div class="skip-link screen-reader-text">
			<a href="#content" title="<?php esc_attr_e('Skip to content', 'pro_motion_ads'); ?>">
				<?php _e('Skip to content', 'pro_motion_ads'); ?>
			</a>
		</div>

		<div id="main-menu"><?php wp_nav_menu(array(
			'theme_location'	=> 'menu-1',
			'link_before'		=> '<span>',
			'link_after'		=> '</span>',
		)); ?></div>

		<div class="clear"></div>
	</div>

	<div id="masthead" class="widget-area" role="compolementary">
		<ul calss="xoxo">
			<?php dynamic_sidebar('masthead-widget-area') ?>
		</ul>
		<div class="clear"></div>
	</div>
