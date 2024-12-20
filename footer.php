<?php
/**
 * The footer.
 *
 * This is the template that displays all of the footer section.
 *
 */
global $post;
$meta = get_field_objects($post->ID);
$home_meta = get_field_objects(11);
?>

<!-- ======= Footer ======= -->

<div class="copyright bgMuted">
    <div class="container">
        <div class="footerCopy py-4">
            <p class="">©2024 Auto Buyer Leads. All rights reserved.</p>
            <p class="m-0"><a href="#">Privacy Policy</a> | Website by <a href="https://www.swiftcre.com/" target="_blank">SwiftCRE</a></p>
        </div>
    </div>
</div>

<div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-lg-down">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="container myOffersModal">
                    <?php echo do_shortcode('[contact-form-7 id="8bfe27d" title="My Offer"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->
<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/media-styles.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/73cd4db030.js" crossorigin="anonymous"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/main.js"></script>

<script>
	 window.addEventListener('load', function() {
            document.querySelector('.demo').style.display = 'none';
        });
</script>

</body>
</html>
