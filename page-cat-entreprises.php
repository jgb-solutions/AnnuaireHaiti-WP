<?php get_header(); ?>

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 left-content">
				<h2><span class="glyphicon glyphicon-th"></span> Toutes les catégories d'Entreprises.</h2>
				<hr>
				<?php
				$args = array(
					'orderby' 	=> 'name',
					'order' 	=> 'ASC',
					'taxonomy'	=> 'categorie_dentreprise',
					);

				$categories = get_categories($args);

				foreach( $categories as $category )
				{

					$pod = pods( $category->taxonomy , $category->slug );
					$attachment_id = $pod->field( 'logo_catgorie_entreprise' )['ID'];
					$attr = array(
						'class'	=> "img-responsive img-rounded img-bordered",
						'alt'   => $category->name
					);
					?>

					<div class="row marginTop10">
						<div class="col-sm-4 col-xs-6">
							<a href="<?php echo get_category_link( $category ); ?>"><?php echo wp_get_attachment_image( $attachment_id, 'ah-logo', false, $attr ); ?></a>
						</div>
						<div class="col-sm-8 col-xs-6">
							<h3 class="noMarginTop"><a href="<?php echo get_category_link( $category ); ?>"><?php echo $category->name ?></a></h3>
							<?php echo $category->description; ?>
						</div>
					</div>

					<?php }?>
            </div>

			<?php get_sidebar(); ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>