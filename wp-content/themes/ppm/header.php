<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
	<?php wp_head(); ?>
</head>

<body>
	<!--header-->
	<div id="header">
		<div class="wrap">
			<!--Logo-->
			<div id="logo">
				<a href="<?php bloginfo('url')?>"><img src="<?php bloginfo('template_url')?>/images/logo.png" alt="logo" width="100"/></a>
			</div>
			<!--Fin Logo-->
			<!--Menu-->
			<div id="menu">
				<ul>
					<?php wp_list_pages( 'title_li=&depth=1' ); ?>
				</ul>
			</div>
			<!--Fin Menu-->
			<?php include_once("banner.php"); ?>	<!--Slider-->
		</div>
	</div>
	<!--Fin Header-->