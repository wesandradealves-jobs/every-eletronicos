<?php get_header(); ?>
	<?php 
		if ( is_front_page() ){
			if ( have_posts () ) : while (have_posts()):the_post();
				include(get_template_directory()."/".get_post( $post )->post_name.".php");
			endwhile; 
			endif;
		} else { ?>
			<section id="webdoor" class="b">
				<div class="wrap">
					<div>
						<div>
							<div>
								<?php
									echo '<h1 class="b">'.get_the_title().'</h1><p class="b">'.get_the_content().'</p>';
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
					</div>
				</div>
			</section>
		<?php
			if ( have_posts () ) : while (have_posts()):the_post(); 
				include(get_template_directory()."/".get_post( $post )->post_name.".php");
			endwhile; 
			endif;
		}
	?>
<?php get_footer(); ?>

