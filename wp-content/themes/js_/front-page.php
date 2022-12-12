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
					<img id="triangle" src="<?php echo get_template_directory_uri(); ?>/img/triangle.svg" alt="">
					<img id="trianglep" src="<?php echo get_template_directory_uri(); ?>/img/trianglep.svg" alt="">
					<img id="trianglet" src="<?php echo get_template_directory_uri(); ?>/img/trianglet.svg" alt="">
					<img id="trianglepi" src="<?php echo get_template_directory_uri(); ?>/img/trianglepi.svg" alt="">
					<img class="triangle" src="<?php echo get_template_directory_uri(); ?>/img/triangle.svg" alt="">
					<img class="trianglep" src="<?php echo get_template_directory_uri(); ?>/img/trianglep.svg" alt="">
					<img class="trianglet" src="<?php echo get_template_directory_uri(); ?>/img/trianglet.svg" alt="">
					<img class="trianglepi" src="<?php echo get_template_directory_uri(); ?>/img/trianglepi.svg" alt="">
				</div>
			</div>
		</section>

		<section class="wrapper" id="hate">
			<div class="inner-wrapper">
				<div class="hate-someone">
					<img class="trump" src="<?php echo get_template_directory_uri(); ?>/img/trump.jpeg" alt="">
					<div class="hate-content">
						<h2>Hate <span>Someone?</span> </h2>
						<p>We can get rid of your headache in an instant...somewhat.</p>
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
							<img class="easy" src="<?php echo get_template_directory_uri(); ?>/img/easy.png" alt="">
							<h3>easy service</h3>
							<p>
								The infrastructure and experience you need to pay, get rid of, and be <span>HAPPY</span> is already in
								place.
							</p>
						</div>
						<div class="need-more-content">
							<img class="rapid" src="<?php echo get_template_directory_uri(); ?>/img/rapid-deployment.png" alt="">
							<h3>rapid deployment</h3>
							<p>
								We'll ensure that your request is complete in a matter of <span>HOURS</span> (instead of <span>DAYS</span>) to ignite pure happiness.
							</p>
						</div>
						<div class="need-more-content">
							<img class="risk" src="<?php echo get_template_directory_uri(); ?>/img/risk-free.png" alt="">
							<h3>semi risk-free</h3>
							<p>
								We're the happiness experts. We specialize in making you <span>HAPPY</span>. Our track record for success is based on the ratings.
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
						<p>
							We combine deep knowledge of your hatred proven research expertise to fill your <span>HAPPINESS</span> pipeline.
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
				<div class="assassins">
					<h2>Testimonial</h2>
					<?php 
						// WP_Query arguments
							$args = array(
								'post_type'              => array( 'js_testimonial' ),
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

					<a href="<?php echo site_url('testimonal') ?>" class="btn">VIEW ALL ASSASSINS</a>
				</div>
				</div>
			</div>
		</section>

		<section class="wrapper" id="how">
			<div class="inner-wrapper">
				<div class="assassins">
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
				</div>
			</div>
		</section>

		

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
		

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
