<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<title><?php bloginfo('name'); ?></title>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>"/>
<?php wp_head();?>
	<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/jquery.coda-slider-2.0.js"></script>
		 <script type="text/javascript">
			$().ready(function() {
				$('#coda-slider-1').codaSlider();
			});
		 </script>
</head>

<body>

	<!--HEADER-->
	<div id="header">
	
	
		<!--WRAP--->
		<div class="wrap">
		
		
			<!--logo-->
			<div id="logo">
			
			<a href="<?php bloginfo('url')?>"><img src="<?php bloginfo('template_url')?>/images/logo.png" alt="logo"/></a>
			
			</div>
			<!--fin logo-->
			
			<!--menu-->
			<div id="menu">
			
				<ul>
					<?php wp_list_pages( 'title_li=&depth=1' ); ?>
				</ul>
				
			</div>
			<!--fin menu-->
			
			
			<!--banner-->
			<?php include_once('banner.php'); ?>
			<!--fin banner-->
		
		</div>
		<!--fin WRAP--->
		
		
		
	</div>	
	<!-FIn header--->
