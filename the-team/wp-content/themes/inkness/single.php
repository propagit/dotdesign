<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Inkness
 */

get_header(); ?>

	<?php
		/**
		 	# customized to have the feature image on the top as a banner	
		*/
	?>
	<?php 
		if (has_post_thumbnail() ) : 
	?>
    <div class="featured-image-single carousel">
        <?php
           	the_post_thumbnail();
        ?>
        <div class="carousel-caption">
        	<h1><?php echo get_the_title(); ?></h1>
        	<h4><?php echo get_staff_location();?> | <?php echo get_staff_role();?></h4>
        </div>
    </div>
    <?php endif; ?>
    
    
    
	<div id="primary" class="content-area col-md-6 col-offset-3">
		<main id="main" class="site-main" role="main">
        

		<?php while ( have_posts() ) : the_post(''); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php inkness_content_nav( 'nav-below' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>