<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Johnnys_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		

		<?php
		while ( have_posts() ) :
			the_post(); ?>

            <h1><?php the_title(); ?></h1>

            <?php the_content(); ?>    
            
            <!-- <img  src="<?php echo get_field('image')['sizes']['medium'] ?>" alt=""> -->

            <?php echo wp_get_attachment_image(get_field('image')['id'], 'medium', false, ['class' => 'assassin-pic']) ?>
            
			

		<?php endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
