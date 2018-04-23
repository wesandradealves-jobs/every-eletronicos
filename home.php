<?php get_header(); ?>
	<?php 
	    $args = array('post_type' => 'produtos', 'order' => 'ASC');
	    $query_produtos = new WP_Query($args);
        while($query_produtos -> have_posts()) : $query_produtos -> the_post(); 
    ?>
		<section class="section prod_<?php echo $post->ID; ?>">
			<div class="wrap">
				<div>
					<?php if(wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-7', $post->ID ), 'full' )[0]||wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-8', $post->ID ), 'full' )[0]||wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-9', $post->ID ), 'full' )[0]||wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-10', $post->ID ), 'full' )[0]||wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-11', $post->ID ), 'full' )[0]||wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-12', $post->ID ), 'full' )[0]) { ?>
					<div class="tplHoriz">
						<div>
							<?php
								echo '
									<h2 class="b">'.get_the_excerpt().'</h2>
									<h1 class="b">'.get_the_title().'</h1>
									<a href="'.get_the_permalink().'" title="'.get_the_title().'" class="btn btn_default">Saiba Mais</a>
								';
							?>
						</div>
						<div>
							<div>
								<?php if(wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-7', $post->ID ), 'full' )[0]){ ?>
								<img src="<?php echo wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-7', $post->ID ), 'full' )[0]; ?>" alt="<?php echo get_the_title(); ?>">
								<?php } ?>
								<?php if(wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-8', $post->ID ), 'full' )[0]){ ?>
								<img src="<?php echo wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-8', $post->ID ), 'full' )[0]; ?>" alt="<?php echo get_the_title(); ?>">
								<?php } ?>
								<?php if(wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-9', $post->ID ), 'full' )[0]){ ?>
								<img src="<?php echo wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-9', $post->ID ), 'full' )[0]; ?>" alt="<?php echo get_the_title(); ?>">
								<?php } ?>
								<?php if(wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-10', $post->ID ), 'full' )[0]){ ?>
								<img src="<?php echo wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-10', $post->ID ), 'full' )[0]; ?>" alt="<?php echo get_the_title(); ?>">
								<?php } ?>
								<?php if(wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-11', $post->ID ), 'full' )[0]){ ?>
								<img src="<?php echo wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-11', $post->ID ), 'full' )[0]; ?>" alt="<?php echo get_the_title(); ?>">
								<?php } ?>
								<?php if(wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-12', $post->ID ), 'full' )[0]){ ?>
								<img src="<?php echo wp_get_attachment_image_src( MultiPostThumbnails::get_post_thumbnail_id( get_post_type(), 'featured-image-12', $post->ID ), 'full' )[0]; ?>" alt="<?php echo get_the_title(); ?>">
								<?php } ?>
							</div>
						</div>						
					</div>
					<?php } else { ?>
					<div>
						<div>
							<?php
								echo '
									<h2 class="b">'.get_the_excerpt().'</h2>
									<h1 class="b">'.get_the_title().'</h1>
									<a href="'.get_the_permalink().'" title="'.get_the_title().'" class="btn btn_default">Saiba Mais</a>
								';
							?>
						</div>
					</div>
					<div>
						<div>
							<div>
								<?php echo "<img src='".wp_get_attachment_url(get_post_thumbnail_id($post->ID), full)."'/>"; ?>
							</div>
						</div>
					</div>
				<?php } ?>
				</div>
			</div>
			<style type="text/css">
				<?php echo ".prod_".$post->ID."{"; ?>
					background: <?php echo get_post_meta($post->ID, "Cor Inicial", true); ?>;
				    background: -webkit-linear-gradient(top, <?php echo get_post_meta($post->ID, "Cor Inicial", true); ?> 0%, <?php echo get_post_meta($post->ID, "Cor Final", true); ?> 53%, <?php echo get_post_meta($post->ID, "Cor Final", true); ?> 100%);
				    background: linear-gradient(to bottom, <?php echo get_post_meta($post->ID, "Cor Inicial", true); ?> 0%, <?php echo get_post_meta($post->ID, "Cor Final", true); ?> 53%, <?php echo get_post_meta($post->ID, "Cor Final", true); ?> 100%);	
				}
			</style>
		</section>
    <?php
        endwhile;	
        wp_reset_query();
	?> 
<?php get_footer(); ?>