<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Johnnys_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		

<div class="entry-content">
		<section class="wrapper" id="hero">
			<div class="inner-wrapper">
				<div class="hero-content">
					<h2>Assassin Agency built <span>for descrete business</span> </h2>
					<p>Find your agent, trust your agent, pay your agent!</p>
					<div class="hero-text">
						<p>easy service</p>
						<p>rapid deployment</p>
						<p>semi risk-free</p>
					</div>
					<button class="btn">
						<a href="" class="book-agent">book your agent</a> 
					</button>
				</div>
			</div>
		</section>

		<section class="wrapper" id="hate">
			<div class="inner-wrapper">
				<div class="hate-someone">
					<div class="hate-content">
						<img src="TODO" alt="">
						<h2>Hate <span>Someone?</span> </h2>
						<p>we can get rid of your headache in an instant...somewhat.</p>
					</div>
				</div>
			</div>
		</section>

		<section class="wrapper" id="need">
			<div class="inner-wrapper">
				<div class="need-hand">
					<div class="need-content">
						<h2>Need a hand? <span>We'll give you a push!</span> </h2>
						<p>We'll make sure you unhappiness is resolved no matter what! 
							We'll stop at nothing to ensure your happiness!
						</p>
					</div>
					<div class="need-more">
						<div class="need-more-content">
							<img src="TODO" alt="">
							<h3>easy service</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
								Ipsa alias iusto numquam voluptatem. Autem omnis eum minima veniam, 
								modi consequuntur illo tempora odit quia ex, fuga architecto!
							</p>
						</div>
						<div class="need-more-content">
							<img src="TODO" alt="">
							<h3>rapid deployment</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
								Ipsa alias iusto numquam voluptatem. Autem omnis eum minima veniam, 
								modi consequuntur illo tempora odit quia ex, fuga architecto!
							</p>
						</div>
						<div class="need-more-content">
							<img src="TODO" alt="">
							<h3>semi risk-free</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
								Ipsa alias iusto numquam voluptatem. Autem omnis eum minima veniam, 
								modi consequuntur illo tempora odit quia ex, fuga architecto!
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="wrapper" id="use">
			<div class="inner-wrapper">
				<div class="use-us">
					<div class="use-content">
						<h2>Why should you use us?</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
							Perspiciatis nisi quis eum totam laudantium itaque autem asperiores doloremque veniam ad 
							illo maxime laboriosam, voluptas neque laborum. Libero id quae nihil?
						</p>
					</div>
					<button class="btn">
						<a href="" class="book-agent">book your agent</a> 
					</button>
				</div>
			</div>
		</section>

		<section class="wrapper" id="review">
			<div class="inner-wrapper">
				<div class="reviews">
					<div class="reviews-content">
						<img src="TODO" alt="">
						<p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. 
							Hic alias iusto quidem odio fuga eaque laborum fugit quae doloremque accusantium!"
						</p>
						<p>-Name</p>
					</div>
					<div class="reviews-content">
						<img src="TODO" alt="">
						<p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. 
							Hic alias iusto quidem odio fuga eaque laborum fugit quae doloremque accusantium!"
						</p>
						<p>-Name</p>
					</div>
					<div class="reviews-content">
						<img src="TODO" alt="">
						<p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. 
							Hic alias iusto quidem odio fuga eaque laborum fugit quae doloremque accusantium!"
						</p>
						<p>-Name</p>
					</div>
				</div>
			</div>
		</section>

		<section class="wrapper" id="how">
			<div class="inner-wrapper">
				<div class="how-it-works">
					<div class="how-content">
						<h2> <span>Here's How it Works</span> </h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, necessitatibus.</p>
						<div class="how-list">
							<h3>Easy Service</h3>
							<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, consectetur?</p>
						</div>
						<div class="how-list">
							<h3>Rapid Deployment</h3>
							<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, consectetur?</p>
						</div>
						<div class="how-list">
							<h3>Semi Risk-Free</h3>
							<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, consectetur?</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<img src="<?php echo get_template_directory_uri(); ?>/img/triangle.svg" alt="">

		

		<?php
			while ( have_posts() ) :
				the_post();
		?>

			<?php
			// get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		<section class="assassins">
			<h2>Assassins</h2>
			<?php 
				// WP_Query arguments
					$args = array(
						'post_type'              => array( 'js_assassin' ),
						'post_status'            => array( 'publish' ),
						'posts_per_page'         => '3',
					);

					// The Query
					$query = new WP_Query( $args );

					?><ul><?php

					// The Loop
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							// do something
							?>
							<li>
								<div>
									<?php echo wp_get_attachment_image( get_field('image')['id'], 'medium' ); ?>
								</div>
								<h3><?php the_title(); ?></h3>
								<?php the_content(); ?>
							</li> 
							<?php
						}
					} else {
						// no posts found
					}

					?></ul><?php

					// Restore original Post Data
					wp_reset_postdata();
			?>

			<a href="<?php echo site_url('people') ?>" class="btn">VIEW ALL ASSASSINS</a>
		</section>
		

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
