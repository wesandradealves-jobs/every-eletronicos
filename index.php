<?php get_header(); ?>
	<?php 
		if ( is_front_page() ){
			if ( have_posts () ) : while (have_posts()):the_post();
				include(get_template_directory()."/".get_post( $post )->post_name.".php");
			endwhile; 
			endif;
		} else if(is_single()){

		} else {
			if ( have_posts () ) : while (have_posts()):the_post();
				include(get_template_directory()."/".get_post( $post )->post_name.".php");
			endwhile; 
			endif;
		}
	?>
<?php get_footer(); ?>

