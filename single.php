<?php get_header(); ?>

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 left-content bg-white">

            	<?php while ( have_posts() ) : the_post(); ?>

	              	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<h2>
								<?php the_title(); ?>
								<br>
								<small>Posté le <?php the_date('d/m/Y (h:i a)'); ?> |
									Catégorie:
										<a href="<?php echo get_category_link(get_the_category()[0]->term_id); ?>">
											<?php echo get_the_category()[0]->name ?>
										</a>
								</small>
							</h2>

							<div class="row">
																<?php
								$attr = array(
									'class'		=> 'img-block img-responsive',
									'alt'		=> get_the_title(),
									'title'		=> get_the_title()
								);
								the_post_thumbnail('ah-banner', $attr ); ?>
							</div>
							<br>
							<?php include 'single-share.php'; ?>
						</header><!-- .entry-header -->
						<hr>
						<div class="entry-content">
							<?php the_content(); ?>
						</div><!-- .entry-content -->

						<footer class="entry-footer">
							<hr>
							<?php the_tags( 'Mots Clés: ', ', ', '' ); ?>
						</footer><!-- .entry-footer -->
					</article><!-- #post-## -->

				<?php endwhile; // end of the loop. ?>

				<?php include_once 'related-posts.php'; ?>

				<hr>

				<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				?>

            </div>

			<?php get_sidebar(); ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>