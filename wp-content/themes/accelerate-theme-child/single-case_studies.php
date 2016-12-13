<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

 $services = get_field('services');
 $client = get_field('client');
 $site_link = get_field('site_link');
 $image_1 = get_field('image_1');
 $image_2 = get_field('image_2');
 $image_3 = get_field('image_3');
 $size = "full";

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
        <div class="case-study-title"><h2><?php wp_title(); ?></h2></div>
        <div style="float: left; width: 300px;">
          <?php echo $services; ?><br /><br />
          Client: <?php echo $client; ?><br /><br />
          <a href="<?php echo $site_link; ?>">Visit Live Site</a><br /><br />
        </div>
        <div style="margin-left: 300px;">
          <?php if($image_1) { ?>
            <img src="<?php echo $image_1; ?>" />
          <?php } ?><br /><br />
          <?php if($image_2) { ?>
            <img src="<?php echo $image_2; ?>" />
          <?php } ?><br /><br />
          <?php if($image_3) { ?>
            <img src="<?php echo $image_3; ?>" />
          <?php } ?>
        </div>
        <div style="clear: both;"></div>
        <?php the_category(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
