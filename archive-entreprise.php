
<?php get_header(); ?>

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 left-content bg-white">

				<?php if ( have_posts() ): ?>

					<h2 class="text-center"><span class="glyphicon glyphicon-th"></span> Toutes les entreprises</h2>

				<?php while ( have_posts() ) : the_post(); ?>

					<hr>
					<div class="row">
						<div class="col-sm-4 col-xs-4">

							<?php
							if ( has_post_thumbnail() ):
								$attr = array(
									'class'		=> 'img-responsive img-rounded img-bordered',
									'alt'		=> get_the_title(),
									'title'		=> get_the_title()
								);?>
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('ah-logo', $attr ); ?>
								</a>
							<?php else: ?>
								<a href="<?php the_permalink(); ?>">
									<img src="https://placeholdit.imgix.net/~text?txtsize=17&txt=Featured+Image&w=319&h=319&txttrack=0">
								</a>
							<?php endif; ?>
						</div>
						<div class="col-sm-8 col-xs-8">
				            <a href="<?php the_permalink(); ?>"><h3 class="noMarginTop forced"><?php the_title(); ?></h3></a>
			               	<?php the_excerpt(); ?>
						</div>
					</div>

				<?php endwhile; ?>
				<?php else: ?>
					<h2 class="text-center">Désolé! Pas encore d'entreprises dans notre base.</h2>
					<hr>
					<p>Utilisez la forme pour rechercher une entreprise ou un article ou retournez sur <a href="<?php echo home_url('/'); ?>">la page d'accueil.</a></p>
					<p><?php get_search_form(); ?></p>
				<?php endif; ?>

				<hr>
				<div class="col-sm-12 text-center">
					<?php paginate(); ?>
				</div>

            </div>

			<?php get_sidebar(); ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>