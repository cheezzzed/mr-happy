<?php
/**
 * The template for displaying about Johnny Sanchez page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Johnnys_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<h2>Gabriel Jesus</h2>
		<p>Arsenal F.C.</p>
		<p>#9 Forward</p>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
