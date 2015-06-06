<?php get_header(); ?>

<?php include_once 'carousel.php'; ?>


<?php

$args = array(
	'posts_per_page' => 4,
	'post_type'		=> 'entreprise'
);

$query = new WP_Query( $args );

if ( $query->have_posts() ): ?>

<section class="entries">
    <div class="container">
        <h2 class="text-center">Entreprises récentes entrées dans <a href="<?php echo home_url('/entreprises' ); ?>">notre base</a></h2>
        <div class="row marketing">

        <?php while( $query->have_posts() ) : $query->the_post(); ?>

            <div class="col-sm-3 col-xs-6">

            	<?php
            		$attr = array(
						'class' => "img-rounded img-bordered img-responsive",
						'alt'   => get_the_title(),
						'title' => 'Voir l\'Entreprise ' . get_the_title()
					);
				?>

                <a href="<?php the_permalink(); ?>">
                	<?php the_post_thumbnail( 'ah-logo', $attr ); ?>
                </a>
                <h4 class="text-center">

                	<?php the_title();

	                	$cat_ent = '';
						$terms = get_the_terms( $post->$id, 'categorie_dentreprise' );

						if ( $terms && ! is_wp_error( $terms ) ) {

						foreach ( $terms as $term ) {
								$cat_ent = '<a href="' . get_term_link( $term ) . '" title="Naviguer la Catégorie d\'Entreprises: ' . $term->name . '">' . $term->name . '</a>';
							}
						}
						echo "<br><small>($cat_ent)</small>";
					?>
                </h4>
                <p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-block btn-yellow btn-lg">
                        Voir les détails
                    </a>
                </p>
            </div>

        <?php endwhile ?>

        </div>
    </div>
</section>

<?php endif; wp_reset_postdata(); ?>

<?php get_footer(); ?>