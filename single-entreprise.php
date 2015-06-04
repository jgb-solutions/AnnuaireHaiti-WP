<?php get_header(); ?>


<?php

$tel 		= ahgetfield('tel');
$adresse 	= ahgetfield('adresse');
$email 		= ahgetfield('email');
$facebook 	= ahgetfield('facebook');
$twitter 	= ahgetfield('twitter');
$google 	= ahgetfield('google');
$fax 		= ahgetfield('fax');
$map 		= ahgetfield('map');
$site_web	= ahgetfield('site_web');


?>
<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 left-content bg-white">
                <h2 class="text-center business-title">

                	<?php the_title(); ?>
                    <small> | </small>
                </h2>
                <div class="row">

					<?php if ( ahget('bannerimage' ) ): ?>
                		<img class="img-responsive" src="<?php echo ahget('bannerimage' ); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" width="100%">
              	 	<?php else: ?>
              	 		<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/banner-sample.png" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" style="width:100%">
              	 	<?php endif;?>

                    <div class=" col-sm-12">
                        <div class="row">
                            <div class="col-sm-4">

	                            <?php
			            		$attr = array(
									'class' => "img-rounded img-bordered img-responsive business-logo",
									'alt'   => get_the_title(),
									'title' => get_the_title()
								);
			                	the_post_thumbnail( 'ah-logo', $attr ); ?>

                            </div>
                            <div class="col-sm-8 social-group">
                                <div class="btn-group btn-group-justified" role="group" aria-label="...">

                                  	<?php if ( $twitter ): ?>
                                  	<div class="btn-group" role="group">
                                    	<a  href="<?php echo $twitter; ?>" target="_blank" class="btn btn-info btn-lg">
                                        	<i class="fa fa-twitter"></i>
                                        	<span class="social-icons fab">Twitter</span>
                                    	</a>
                                  	</div>
                                  	<?php endif; ?>

                                  	<?php if ( $facebook ): ?>
                                 	<div class="btn-group" role="group">
                                  		<a href="<?php echo $facebook; ?>" target="_blank" class="btn btn-primary btn-lg">
                                        	<i class="fa fa-facebook"></i>
                                        	<span class="social-icons fab">Facebook</span>
                                    	</a>

                                 	 </div>
                                  	<?php endif; ?>

                                  	<?php if ( $google ): ?>
                                  	<div class="btn-group" role="group">
                                    	<a href="<?php echo $google; ?>" target="_blank" class="btn btn-danger btn-lg">
                                        	<i class="fa fa-google-plus"></i>
                                        	<span class="social-icons fab">Google+</span>
                                    	</a>
                                  	</div>
                              		<?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 data">
                        <div class="panel panel-default">
                            <table class="table table-bordered table-striped">
                                <tbody>

                                	<?php
                                	$cat_ent = '';
									$terms = get_the_terms( $post->$id, 'categorie_dentreprise' );

									if ( $terms && ! is_wp_error( $terms ) ) {

										foreach ( $terms as $term ) {
											$cat_ent = '<a href="' . get_term_link( $term ) . '" title="Naviguer la Catégorie d\'Entreprises: ' . $term->name . '">' . $term->name . '</a>';
										}

										//$cat_ent = join( ", ", $cat_ent_links ); ?>

										<tr>
		                                    <td>
		                                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Catégorie
		                                    </td>
		                                    <td>
		                                        <?php echo $cat_ent; ?>
		                                    </td>
	                                    </tr>
									<?php } ?>

									<?php
                                	$departement = '';
									$terms = get_the_terms( $post->$id, 'dpartement' );

									if ( $terms && ! is_wp_error( $terms ) ) {

										foreach ( $terms as $term ) {
											$departement = '<a href="' . get_term_link( $term ) . '" title="Naviguer les Entreprises du département: ' . $term->name . '">' . $term->name . '</a>';
										}?>

										<tr>
		                                    <td>
		                                        <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> Département
		                                    </td>
		                                    <td>
		                                        <?php echo $departement; ?>
		                                    </td>
	                                    </tr>
									<?php } ?>

                                    <?php
                                    $ville = '';
                                    $terms = get_the_terms( $post->$id, 'ville' );

                                    if ( $terms && ! is_wp_error( $terms ) ) {

                                        foreach ( $terms as $term ) {
                                            $ville = '<a href="' . get_term_link( $term ) . '" title="Naviguer les Entreprises de la ville de: ' . $term->name . '">' . $term->name . '</a>';
                                        }?>

                                        <tr>
                                            <td>
                                                <span class="glyphicon glyphicon-road" aria-hidden="true"></span> Ville
                                            </td>
                                            <td>
                                                <?php echo $ville; ?>
                                            </td>
                                        </tr>
                                    <?php } ?>

									<?php
                                	$commune = '';
									$terms = get_the_terms( $post->$id, 'commune' );

									if ( $terms && ! is_wp_error( $terms ) ) {

										foreach ( $terms as $term ) {
											$commune = '<a href="' . get_term_link( $term ) . '" title="Naviguer les Entreprises de la commune: ' . $term->name . '">' . $term->name . '</a>';
										}?>

										<tr>
		                                    <td>
		                                        <span class="glyphicon glyphicon-th" aria-hidden="true"></span> Commune
		                                    </td>
		                                    <td>
		                                        <?php echo $commune; ?>
		                                    </td>
	                                    </tr>
									<?php } ?>

									<?php if ( $tel ): ?>
										<tr>
	                                        <td>
	                                            <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> Téléphone
	                                        </td>
	                                        <td>
	                                            <a href="tel:+509<?php echo str_replace(' ', '', $tel ); ?>"><?php echo $tel;	 ?></a>
	                                        </td>
                                    	</tr>
									<?php endif; ?>

                                    <?php if ( $fax ): ?>
                                    	<tr>
                                        	<td>
                                            	<span class="glyphicon glyphicon-print" aria-hidden="true"></span> Fax
                                        	</td>
                                        	<td>
                                            	<a href="tel:+509<?php echo str_replace(' ', '', $fax ); ?>"><?php echo $fax; ?></a>
                                        	</td>
                                    	</tr>
                                    <?php endif; ?>

									<?php if ( $email ): ?>
										<tr>
                                        	<td>
                                            	<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> E-mail
                                        	</td>
                                        	<td>
                                            	<a href="mailto:<?php echo $email; ?>" target="_top"><?php echo $email; ?></a>
                                        	</td>
                                    	</tr>
									<?php endif; ?>

									<?php if ( $site_web ): ?>
										<tr>
	                                        <td>
	                                            <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Site web
	                                        </td>
	                                        <td>
	                                            <a href="<?php echo $site_web; ?>" target="_blank"><?php echo $site_web; ?></a>
	                                        </td>
	                                    </tr>
									<?php endif; ?>

									<?php if ( $adresse ): ?>
										<tr>
	                                        <td>
	                                            <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Adresse
	                                        </td>
	                                        <td><?php echo $adresse; ?></td>
	                                    </tr>
									<?php endif; ?>

                                </tbody>
                            </table>
                        </div>

                        <div role="tabpanel">

                          <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#details" aria-controls="details" role="tab" data-toggle="tab">Détails</a>
                                </li>

                                <?php if ( $map ): ?>
                                	<li role="presentation">
                                    	<a href="#carte" aria-controls="carte" role="tab" data-toggle="tab">Position Géographique</a>
                                	</li>
                                <?php endif; ?>

                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="details">
                                    <?php the_content(); ?>
                                </div>

                                <?php if ( $map ): ?>
                                	<div role="tabpanel" class="tab-pane" id="carte">
                                    	<div class="google-maps">
                                    		<?php echo $map; ?>
                                    	</div>
                                	</div>
                                <?php endif; ?>
                            </div>
                        </div>

						<?php include_once 'related-entreprises.php'; ?>

                    </div>
                </div>
            </div>

           	<?php get_sidebar(); ?>

        </div>
    </div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
