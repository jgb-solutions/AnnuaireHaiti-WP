<?php

$args = array(
	'post_type'	    	=> 'entreprise',
 	'posts_per_page'	=> 3,
	'tax_query'	    	=> array(
		array(
			'taxonomy' 	=> 'categorie_dentreprise',
			'field'		=> 'slug',
			'terms'		=> $cat_ent
		)
	),
	'orderby'			=> 'rand',
  'post__not_in' 		=> array( $post->ID )
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) : ?>

<div class="row">
	<hr>
	<div class="col-sm-12">
		<div class="row">
			<h3 class="text-center">Vous pourriez aussi être intéressé par:</h3>
			<div class="row marketing">
			  <?php while ( $query->have_posts() ) : $query->the_post(); ?>

				<div class="col-sm-4 col-xs-4">

					<?php
					$attr = array(
						'class' => "img-rounded img-bordered img-responsive",
						'alt'   => get_the_title(),
						'title' => 'Voir l\'Entreprise ' . get_the_title()
					);?>

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
						echo "<br><small>($cat_ent)</small>"; ?>
					</h4>
					<p>
						<a href="<?php the_permalink(); ?>" class="btn btn-block btn-yellow btn-lg">
							Voir <?php the_title(); ?>
						</a>
					</p>
				</div>

			  <?php endwhile; ?>

			</div>
		</div>
	</div>
</div>

<?php wp_reset_postdata(); ?>
<?php endif; ?>