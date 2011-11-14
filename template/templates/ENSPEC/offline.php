<!DOCTYPE html>
<html lang="en">
<head>
	<jdoc:include type="head" />
	
	<style>
	body {
		margin: 0;
		color: #333;
		font-family: Helvetica, Arial, sans-serif;
		font-size: 12px;
	}
	
	#wrapper {
		width: 940px;
		margin: 20px auto 10px;
		padding: 0 10px;
	}
	</style>
	
</head>

<body>
	
	<div class="wrapper">
		<jdoc:include type="message" />
		
		<p class="text-center">
			<img src="/images/default/logo-large.png" />
		</p>
		<p>
			<?php echo $app->getCfg('offline_message'); ?>
		</p>
	</div>
	
</body>
</html>
	