<?php

/**
 * Template Name: Home
 */
get_header();
global $post;
$meta = get_field_objects($post->ID);
$home_meta = get_field_objects(33);
$map = get_field('map');

?>

<section class="homeAddSec1 position-relative">
	<a href="<?php bloginfo("url"); ?>"
		class="mainLogo"><img src="<?php echo $home_meta["header_logo"]["value"]; ?>" alt="" class="img-fluid"></a>
	<div class="owl-carousel owl-theme">

		<?php
		// Use WP_Query for the first section
		$args = [
			"post_type" => "", // Replace with your CPT name
			"order" => "ASC",
			"posts_per_page" => -1,
		];
		$query = new WP_Query($args);

		if ($query->have_posts()) {
			while ($query->have_posts()) {
				$query->the_post();
				$image = wp_get_attachment_image_src(
					get_post_thumbnail_id($post->ID),
					"single-post-thumbnail"
				);
		?>
				<div class="slide container-fluid pt-5" style="background-image:linear-gradient(rgba(203, 228, 246, 0.8), rgba(203, 228, 246, 0.8)), url('<?php echo esc_url($image[0]); ?>'); background-size: cover;">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-xl-8 col-lg-10 col-12">

								<div class="slide-content text-center">
									<div class="slideText">
										<h3 class="tagline"><?php the_title(); ?></h3>

										<div class="post-excerpt">
											<?php the_content(); ?>
										</div>
									</div>

									<a class="redBtn mt-4" href="#">Let's Talk</a>
								</div>
							</div>
						</div>
					</div>
				</div>
		<?php
			}
		}
		wp_reset_postdata(); // Properly reset post data
		?>
	</div>
</section>



<!-- <div id="about" class="id-scroll-fix-special"></div> -->

<!-- Home Section 3 -->

<div class="homeSec2">
	<div class="container">
		<?php

		$page_id = 33; // Replace with the ID of your About page
		$page = get_post($page_id);
		setup_postdata($page);
		?>


		<div class="row align-items-center py-6">


			<div class="col-md-4 col-12">
				<div class="row mb-4 mb-md-0">

					<div class="homeSec2L position-relative ">

						<?php if ($page && !is_wp_error($page)) {
							// Get the featured image for the specified page ID
							$image_id = get_post_thumbnail_id($page_id);
							if ($image_id) {
								$image = wp_get_attachment_image_src($image_id, "single-post-thumbnail");
								if ($image) {
									// Display the image
						?>
									<img src="<?php echo esc_url($image[0]); ?>" alt="About Page Thumbnail">
						<?php
								}
							}
						} else {
							echo "The specified page could not be found.";
						}
						?>

					</div>


				</div>
			</div>


			<div class="col-md-8 col-12">
				<div class="homeSec2R ms-lg-4 myList">
					<?php the_content(); ?>


				</div>
			</div>

		</div>
		<?php wp_reset_postdata(); ?>

	</div>
</div>

<!-- Home Section 3 -->

<div class="homeSec2 homeSec3">
	<div class="container">
		<div class="row align-items-center py-6">
			<div class="col-md-8 col-12">
				<div class="homeSec2R me-lg-4 myList">
					<?php echo $home_meta["homeSec3Text"]["value"]; ?>
				</div>
			</div>
			<div class="col-md-4 col-12">
				<div class="row mb-4 mb-md-0 me-lg-3">
					<div class="homeSec2L position-relative ">
						<img src="<?php echo $home_meta["homeSec3Img"]["value"]; ?>" alt="" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Home Sec 4-->

<div class="homeSec2 bgMuted">
	<div class="container">
		<div class="row align-items-center py-6">
			<div class="col-md-4 col-12">
				<div class="row mb-4 mb-md-0 me-lg-3">
					<div class="homeSec2L position-relative ">
						<img src="<?php echo $home_meta["homeSec4Img"]["value"]; ?>" alt="" class="img-fluid">
					</div>
				</div>
			</div>


			<div class="col-md-8 col-12">
				<div class="homeSec2R ms-lg-4 myList">
					<?php echo $home_meta["homeSec4Text"]["value"]; ?>
					<div class="cta mt-lg-4">
						<a class="redBtn" href="#contact">Let's Talk</a>
					</div>
				</div>
			</div>

		</div>
		<?php wp_reset_postdata(); ?>

	</div>
</div>
<!-- Home Section 5 -->

<div id="contact" class="id-scroll-fix-special"></div>

<div class="homeSec2 homeSec5" style="background-image:linear-gradient(rgba(255, 255, 255, 0.64), rgba(255, 255, 255, 0.64)), url('<?php echo esc_url(get_template_directory_uri() . '/assets/img/contactBg1.png'); ?>'); background-position: center left; background-repeat: no-repeat; background-size: cover;">
	<div class="container">
		<!-- <div class="row justify-content-center py-6 pb-0">
			<div class="col-lg-8 col-12">
				<div class="homeSec2R text-center">
					<?php //echo $home_meta["homeSec5Text"]["value"]; 
					?>
				</div>
			</div>
		</div> -->
		<div class="row py-6 pb-5">

			<div class="col-md-7">
				<div class="homeSec5L me-lg-4 me-xl-5">

					<div class="">
						<?php echo $home_meta["homeSec5Text"]["value"]; ?>
					</div>
					<div class="header mt-4 mt-md-5">
						<h4>Contact Business Owner</h4>


						<div class="darmyan">
							<div class="contactInfo">

								<?php $phone = $home_meta["phone"]["value"]; ?>

								<?php if ($phone) { ?>

									<a href="tel:<?php echo $phone; ?>"><i class="fa-solid fa-phone me-3"></i>
										<?php echo $phone; ?>
									</a>

								<?php } ?>
							</div>
							<div class="contactInfo">

								<?php $email = $home_meta["email"]["value"]; ?>

								<?php if ($email) { ?>

									<a href="tel:<?php echo $email; ?>"><i class="fa-solid fa-envelope me-3"></i>
										<?php echo $email; ?>
									</a>

								<?php } ?>
							</div>

						</div>
					</div>


					<div class="last mt-5">

					</div>

				</div>
			</div>
			<div class="col-md-5">
				<div class="homeSec5R ">

					<div class="contactForm position-relative ">
						<?php echo do_shortcode('[contact-form-7 id="31e3e47" title="Contact Form"]'); ?>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>






<?php get_footer(); ?>


<script>
	$(document).ready(function() {
		$('.owl-carousel').owlCarousel({
			loop: true,
			margin: 10,
			nav: true,
			dots: true,
			autoplay: true,
			autoplayTimeout: 10000,
			// smartSpeed: 10000,
			items: 1,
			animateOut: 'fadeOut',
			navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
		});
	});
</script>