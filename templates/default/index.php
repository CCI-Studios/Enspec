<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]> <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]> <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<?php
// get current menu name
$menu = JSite::getMenu();
//if ($menu && $menu->getActive())
//    $menu = $menu->getActive()->alias;

if ($_SERVER['SERVER_PORT'] === 8888 ||
		$_SERVER['SERVER_ADDR'] === '127.0.0.1' ||
		stripos('ccistaging', $_SERVER['SERVER_NAME']) !== false ||
		stripos('dev.', $_SERVER['SERVER_NAME']) === 0) {

	$testing = true;
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
} else {
	$testing = false;
}
?>

<head>
	<meta charset="utf-8" />
	<?= ($testing)? '':  '<meta http-equiv="X-UA-Compatible" contents="IE=edge,chrome=1">' ?>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="/templates/<?= $this->template ?>/resources/favicon.ico">
	<link rel="apple-touch-icon" href="/templates/<?= $this->template ?>/resources/apple-touch-icon.png">

	<!-- load css -->
	<?php if ($testing): ?>
		<link rel="stylesheet" href="/templates/<?= $this->template ?>/css/template.css">
	<?php else: ?>
		<link rel="stylesheet" href="/templates/<?= $this->template ?>/css/template.min.css">
	<?php endif; ?>

	<!-- load modernizer, all other at bottom -->
	<?php if ($testing): ?>
		<script src="/templates/<?= $this->template ?>/js/libs/modernizr-1.7.js"></script>
	<?php else: ?>
		<script src="/templates/<?= $this->template ?>/js/libs/modernizr-1.7.min.js"></script>
	<?php endif; ?>
</head>

<body>
	<pre>
	<?= htmlentities(print_r($_SERVER, 1)); ?>
	</pre>

	<input type="text" name="Adf"/>
	<input type="text" name="Adfadsf" placeholder="asdf" /><Br/>
	<input type="radio"><label>asdf</label>

	<!-- load scripts -->
	<?php if ($testing): ?>
		<script src="/templates/<?= $this->template ?>/js/libs/mootools-1.1.1.js"></script>
		<!-- FIXME Add all js files here -->
		<script src="/templates/<?= $this->template ?>/js/log.js"></script>
		<script src="/templates/<?= $this->template ?>/js/columns.js"></script>
		<script src="/templates/<?= $this->template ?>/js/dropmenu.js"></script>
		<script src="/templates/<?= $this->template ?>/js/html5.js"></script>
	<?php else: ?>
		<script>
			var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // FIXME Update to clients ID
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
				g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
				s.parentNode.insertBefore(g,s)}(document,"script"));
	  </script>
		<script src="//ajax.googleapis.com/ajax/libs/mootools/1.1.1/mootools-yui-compressed.js"></script>
		<script>window.MooTools || document.write('<script src="/templates/<?= $this->template; ?>/js/libs/mootools-1.1.1.min.js">\x3c/script>')</script>
		<script src="/templates/<?= $this->template ?>/js/scripts.js"></script>

		<!-- FIXME minimize scripts -->
		<script src="/templates/<?= $this->template ?>/js/log.js"></script>
		<script src="/templates/<?= $this->template ?>/js/columns.js"></script>
		<script src="/templates/<?= $this->template ?>/js/dropmenu.js"></script>
		<script src="/templates/<?= $this->template ?>/js/html5.js"></script>
	<?php endif; ?>
</body>
</html>
