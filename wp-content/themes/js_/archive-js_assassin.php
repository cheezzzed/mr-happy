<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Johnnys_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

            <h1>Archive of Assassins</h1>
            <ul>
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();?>

                <li class="assassins">
                    <a class="assassin-content" href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                    <p>
                        <?php the_field('job_count'); ?> Jobs completed successfully
                    </p>
                    <p>
                        Weapon of choice: <?php the_field('weapon_of_choice'); ?> 
                    </p>
                    
                </li>

			<?php endwhile; ?>
            </ul>

		<?php endif;
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
