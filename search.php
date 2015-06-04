
<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package JGB! Neat Design
 */

get_header(); ?>

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 left-content">

				<?php if ( have_posts() ): ?>
					<h2 class="text-center">Résultats pour: <?php echo esc_attr( get_search_query() ); ?></h2>
            	<?php while ( have_posts() ) : the_post(); ?>

					<div class="row">
						<div class="col-sm-4">
								<?php
								$attr = array(
									'class'		=> 'img-responsive img-bordered',
									'alt'		=> get_the_title(),
									'title'		=> get_the_title()
								);?>
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('ah-logo', $attr ); ?>
								</a>
						</div>
						<div class="col-sm-8 ">
				            <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
			               	<?php the_excerpt(); ?>
						</div>
					</div>
					<hr>

				<?php endwhile; ?>
				<?php else: ?>
					<h2 class="text-center">Pas de résultats.</h2>
				<?php endif; ?>

            </div>

			<?php get_sidebar(); ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>