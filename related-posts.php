<?php

$args = array(
 	'posts_per_page'	=> 3,
	'tax_query'	    	=> array(
		array(
			'taxonomy' 	=> 'category',
			'field'		=> 'slug',
			'terms'		=> get_the_category()[0]->slug
		)
	),
	'orderby'			=> 'rand',
  'post__not_in' 		=> array( $post->ID )
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) : ?>

<hr>
<div class="col-sm-12">
	<div class="row">
		<h3 class="text-center">Vous pourriez aussi être intéressé par:</h3>
		<div class="row marketing">
		  <?php while ( $query->have_posts() ) : $query->the_post(); ?>

			<div class="col-sm-4 col-xs-6">

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
					<a href="<?php the_permalink(); ?>">
						<?php the_title();?>
					</a>
				</h4>
			</div>

		  <?php endwhile; ?>

		</div>
	</div>
</div>

<?php wp_reset_postdata(); ?>
<?php endif; ?>