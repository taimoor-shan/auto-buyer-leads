<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo("charset"); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="<?php echo esc_url(
        get_template_directory_uri()
    ); ?>/assets/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo esc_url(
        get_template_directory_uri()
    ); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo esc_url(
        get_template_directory_uri()
    ); ?>/assets/css/bootstrap-icon.css" rel="stylesheet">
    <link href="<?php echo esc_url(
        get_template_directory_uri()
    ); ?>/assets/css/boxicons.min.css" rel="stylesheet">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<!-- Animate CSS -->
	 <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
	

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php
 // Get Homepage's fields
 global $post;
 $meta = get_field_objects($post->ID);
 $home_meta = get_field_objects(11);
 ?>
<!-- 	<div class="demo">
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>

	</div> -->
  <header id="header" class="fixed-top">
        <div class="container-fluid">
            <div class="container-lg">
                <div class="row py-3">
                    <div class="col-12">
                        <div class="topCta d-flex justify-content-between align-items-end position-relative">
                           	<a href="<?php bloginfo("url"); ?>"
                                class="logo logoGold d-flex align-items-center mx-md-0"><img src="<?php echo $home_meta[
                                    "header_logo"
                                ]["value"]; ?>" alt="" class="img-fluid"></a>
							<div class="d-flex flex-column gap-2 align-items-md-end align-items-start">

								<div class="contactHeader">
									<a href="tel:<?php echo esc_attr($home_meta['phone']['value']); ?>"><i class="fa-solid fa-phone"></i></a>
									
									<a href="mailto:<?php echo esc_attr($home_meta['email']['value']); ?>"><i class="fa-solid fa-envelope"></i></a>
								</div>
							<i class="mobile-nav-toggle mobile-nav-show fa-solid fa-bars"></i>
							<i class="mobile-nav-toggle mobile-nav-hide d-none fa-solid fa-xmark"></i>

                            <nav id="navbar" class="navbar">
                                <?php if (has_nav_menu("primary")):
                                    wp_nav_menu([
                                        "theme_location" => "primary",
                                        "menu_class" => "",
                                    ]);
                                endif; ?>
					
                            </nav>

                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>




    </header>
