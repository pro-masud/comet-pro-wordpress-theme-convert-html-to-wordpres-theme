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
 * @package honeyHome
 */

	get_header();

?>

    <!-- End Navigation Bar-->
    <?php while( have_posts()) : the_post(); ?>
    <section class="page-title parallax">
      <div data-parallax="scroll" data-image-src="<?php echo get_post_meta( get_the_ID(), 'page_bg_img', true); ?>" class="parallax-bg"></div>
      <div class="parallax-overlay">
        <div class="centrize">
          <div class="v-center">
            <div class="container">
              <div class="title center">
                <h1 class="upper"><?php echo get_post_meta( get_the_ID(), 'page_title', true); ?><span class="red-dot"></span></h1>
                <h4><?php echo get_post_meta( get_the_ID(), 'page_sub_title', true); ?></h4>
                <hr style="width:<?php echo get_post_meta( get_the_ID(), 'page_pogres_bar', true); ?>%;">
              </div>
            </div>
            <!-- end of container-->
          </div>
        </div>
      </div>
    </section>

<?php endwhile; ?>


	<?php while( have_posts()) : the_post() ?>

		<?php the_content(); ?>


	<?php endwhile; ?>









<?php get_footer(); ?>