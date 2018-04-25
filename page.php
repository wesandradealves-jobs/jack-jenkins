<?php get_header(); ?>
<main>
	<?php 
		if ( have_posts () ) : while (have_posts()):the_post(); 
			if(is_front_page()||$post->post_name=="blog"){
				include(get_template_directory()."/".get_post( $post )->post_name.".php");
			} else {
				the_content(); 
			}
		endwhile; 
		endif;
	?>
</main>
<?php get_footer(); ?>