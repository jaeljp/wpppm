<?php get_header(); ?>
<!--Content-->
	<div id="Content">
		<!--Wrap-->
		<div class="wrap">
			<div id="blanco">
				<!--Columna Uno-->
					<div class="columna">
					<?php 
						query_posts("category_name=Publicidad&showposts=1");
						if (have_posts()) :  while (have_posts()) : the_post(); ?>
						<!--Imagen-->
						<?php $postimageurl = get_post_meta($post->ID, 'thumb', true);
						if ($postimageurl) {
						?>
						<img src="<?php echo $postimageurl; ?>" alt="alt"/>
						<?php } else { ?>
						<img src="<?php bloginfo('template_url'); ?>/images/publicidad.jpg" alt="alt" width="150" height="190"/>
						<?php } ?>
						<!--Fin Imagen-->
						<!--TITULO DE LA NOTICIA-->
						<h1><a href="<?php the_permalink();?>" rel="bookmark"><?php the_title(); ?></a></h1>
						<!--FIN TITULO-->
						<!--POST Contenido de la Noticia-->
						<?php the_excerpt(); ?>
					<?php endwhile;  else :  endif; ?>

					</div>
				<!--Fin Columna Uno-->
				<!--Columna dos-->
					<div class="col_medio">
						<?php 
						query_posts("category_name=Desarrollo&showposts=1");
						if (have_posts()) :  while (have_posts()) : the_post(); ?>
						<!--Imagen-->
						<?php $postimageurl = get_post_meta($post->ID, 'thumb', true);
						if ($postimageurl) {
						?>
						<img src="<?php echo $postimageurl; ?>" alt="alt"/>
						<?php } else { ?>
						<img src="<?php bloginfo('template_url'); ?>/images/desarrollo.jpg" alt="alt" width="190" height="190"/>
						<?php } ?>
						<!--Fin Imagen-->
						<!--TITULO DE LA NOTICIA-->
						<h1><a href="<?php the_permalink();?>" rel="bookmark"><?php the_title(); ?></a></h1>
						<!--FIN TITULO-->
						<!--POST Contenido de la Noticia-->
						<?php the_excerpt(); ?>
					<?php endwhile;  else :  endif; ?>
					</div>
				<!--Fin Columna dos-->
				<!--Columna tres-->
					<div class="columna">
						<?php 
						query_posts("category_name=Artes&showposts=1");
						if (have_posts()) :  while (have_posts()) : the_post(); ?>
						<!--Imagen-->
						<?php $postimageurl = get_post_meta($post->ID, 'thumb', true);
						if ($postimageurl) {
						?>
						<img src="<?php echo $postimageurl; ?>" alt="alt"/>
						<?php } else { ?>
						<img src="<?php bloginfo('template_url'); ?>/images/dise.jpg" alt="alt" width="150" height="190"/>
						<?php } ?>
						<!--Fin Imagen-->
						<!--TITULO DE LA NOTICIA-->
						<h1><a href="<?php the_permalink();?>" rel="bookmark"><?php the_title(); ?></a></h1>
						<!--FIN TITULO-->
						<!--POST Contenido de la Noticia-->
						<?php the_excerpt(); ?>
					<?php endwhile;  else :  endif; ?>
					</div>
				<!--Fin Columna tres-->
			</div>
		</div>
		<!--Fin Wrap-->
	</div>
<!-- FIn Content-->
<?php get_footer(); ?>
