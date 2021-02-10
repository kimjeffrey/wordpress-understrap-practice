<?php
/**
 * Template Name: Template Contact Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="wrapper template-contact-us" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-lg-7" id="primary">
				<main class="site-main" id="main" role="main">
					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'page' );
          }
          ?>
          <div class="contact-form-holder">
            <?php echo do_shortcode('[contact-form-7 id="35" title="Contact Us"]'); ?>
          </div>
        </main><!-- #main -->
      </div><!-- #primary -->
      
      <div class="col-lg-5">
        <div class="iframe-holder">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3360.2442373819013!2d115.85137401593255!3d-32.626318763075886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a326fd638b4eeab%3A0x13cafc53011bbc25!2s49%20Munday%20Ave%2C%20Pinjarra%20WA%206208%2C%20Australia!5e0!3m2!1sen!2suk!4v1612736665662!5m2!1sen!2suk" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="iframe-holder">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3360.2442373819013!2d115.85137401593255!3d-32.626318763075886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a326fd638b4eeab%3A0x13cafc53011bbc25!2s49%20Munday%20Ave%2C%20Pinjarra%20WA%206208%2C%20Australia!5e0!3m2!1sen!2suk!4v1612736665662!5m2!1sen!2suk" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="iframe-holder">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3360.2442373819013!2d115.85137401593255!3d-32.626318763075886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a326fd638b4eeab%3A0x13cafc53011bbc25!2s49%20Munday%20Ave%2C%20Pinjarra%20WA%206208%2C%20Australia!5e0!3m2!1sen!2suk!4v1612736665662!5m2!1sen!2suk" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
