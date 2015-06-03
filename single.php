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
									Catégorie: <a href="<?php echo get_category_link(get_the_category()[0]->term_id); ?>">
									<?php echo get_the_category()[0]->name ?></a>
								</small>
							</h2>

							<?php include 'single-share.php'; ?>
						</header><!-- .entry-header -->
						<hr>
						<div class="entry-content">
							<?php the_content(); ?>
						</div><!-- .entry-content -->

						<footer class="entry-footer">
							<?php the_content(); ?>
						</footer><!-- .entry-footer -->
					</article><!-- #post-## -->

					<!-- Display Tag -->
					<?php	if ( $tags = get_the_tags() ): ?>
					<div>
						Mots clés:
					 	<?php foreach ( $tags as $tag ): ?>
					 	<a class="ui-btn ui-btn-inline ui-icon-tag ui-btn-icon-left" href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
					 	<?php endforeach ?>
					</div>
					<?php endif; ?>

				<?php endwhile; // end of the loop. ?>

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