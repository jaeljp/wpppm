<div id="banner">

<div class="coda-slider-wrapper">
	<div class="coda-slider preload" id="coda-slider-1">


	<!-- .LOOP -->

	<?php query_posts("category_name=Slider&showposts=5"); 
	
	if (have_posts()) : while (have_posts()) : the_post(); ?>

	
		<div class="panel" style="background:url(<?php echo get_post_meta($post->ID,"slider",true)?>)">
			<div class="panel-wrapper">
				<h2><?php the_title();?></h2>
				<?php the_content();?>
			</div>
		</div>
	<?php endwhile;  else :  endif; ?>
	<!-- .FIN LOOP -->


		</div><!-- .coda-slider -->
	</div>

</div>