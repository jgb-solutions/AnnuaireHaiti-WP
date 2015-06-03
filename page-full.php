<?php
/**
 * Template Name: Full Width
 */
?>

<?php get_header(); ?>

<?php get_header(); ?>

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 left-content bg-white">

            	<?php while ( have_posts() ) : the_post(); ?>

	                <h2 class="text-center"><?php the_title(); ?></h2>

	                <?php the_content(); ?>

				<?php endwhile; // end of the loop. ?>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>