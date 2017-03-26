<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 */

get_header(); ?>

<?php  
  while( have_rows('modules')): the_row();
?> 
     
	<?php
	$post_object = get_sub_field('select_module');
	if( $post_object ): 

		// override $post
		$post = $post_object;
		setup_postdata( $post ); // variable must be called $post (IMPORTANT)

		?>
	    <?php 
 		    get_template_part( 'template-parts/content', 'page' );
 		?>
	    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	<?php endif; ?>

<?php  
  endwhile; 
?>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>
