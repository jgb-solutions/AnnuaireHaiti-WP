<section class="call-to-action bg-yellow">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="">
                    Votre entreprise n'est pas encore dans notre base? <br><hr>
                    N'attendez pas plus longtemps, inscrivez votre entreprise dans l'annuaire du pays, nous offrons un service de haute qualité à un prix abordable.
                    <hr>$100 US ou 5000 Gourdes / Année!
                </h3>
            </div>
            <div class="col-sm-6">
                <h3>
                    Aller, assurez la visiblité de votre entreprise. <hr>Inscrivez votre entreprise aujourd'hui, et faites partie de la famille!
                    <hr>Vous payez seulement $100 US ou 5000 Gourdes pour une année!
                </h3>
            </div>
            <br>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <hr>
                        <a href="<?php echo home_url('/inscription'); ?>" class="btn btn-call-to-action btn-lg btn-block">
                            Inscrivez votre entreprise!
                        </a>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
$args = array(
    'post_type'     => array('post', 'entreprise'),
    'posts_per_page' => 8,
    'meta_key'      => 'ahshowsponsor',
    'meta_value'    => 1
);
$query = new WP_Query( $args );

if ( $query->have_posts() ): ?>

<section class="sponsors bg-white">
    <div class="container">
        <h3 class="text-center"><span class="glyphicon glyphicon-heart"></span> L'Annuaire d'Haiti est fièrement parrainé par:</h3>
        <div class="row marketing">

         <?php while( $query->have_posts() ) : $query->the_post();?>
            <div class="col-sm-3 col-xs-6">
               <p>
                    <?php
                    $attr = array(
                        'class' => "img-bordered img-rounded img-responsive",
                        'alt'   => get_the_title(),
                        'title' => get_the_title()
                    ); ?>

                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( 'ah-logo', $attr ); ?>
                    </a>
               </p>
            </div>

            <?php endwhile; ?>

        </div>
        <h3 class="text-center"><span class="glyphicon glyphicon-star"></span> Nous parrainer, ça vous tente? Aller, <a href="<?php echo home_url('/contact' ); ?>">Contactez-nous</a>.</h3>
    </div>
</section>

<?php endif; ?>


<section class="footer" >
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-xs-6">
                <h4 id="cat-entreprise-foot">Catégorie d'Entreprises</h4>
                <ul class="list-unstyled">
                    <?php

                        $args = array(
                            'orderby'   => 'name',
                            'order'     => 'ASC',
                            'taxonomy'  => 'categorie_dentreprise',
                        );

                        $categories = get_categories($args);

                        foreach( $categories as $category )
                        {
                            echo "<li><a href='" . get_term_link( $category ) . "'>$category->name</a>";
                        }
                    ?>
                </ul>
            </div>
            <div class="col-sm-3 col-xs-6">
                <h4 id="cat-entreprise-foot">Entreprises par Département</h4>
                <ul class="list-unstyled">
                    <?php

                        $args = array(
                            'orderby'   => 'name',
                            'order'     => 'ASC',
                            'taxonomy'  => 'dpartement',
                        );

                        $categories = get_categories($args);

                        foreach( $categories as $category )
                        {
                            echo "<li><a href='" . get_term_link( $category ) . "'>$category->name</a>";
                        }
                    ?>
                </ul>

                <h4 id="cat-entreprise-foot">Entreprises par Ville</h4>
                <ul class="list-unstyled">
                    <?php

                        $args = array(
                            'orderby'   => 'name',
                            'order'     => 'ASC',
                            'taxonomy'  => 'ville',
                        );

                        $categories = get_categories($args);

                        foreach( $categories as $category )
                        {
                            echo "<li><a href='" . get_term_link( $category ) . "'>$category->name</a>";
                        }
                    ?>
                </ul>
            </div>
            <div class="col-sm-3 col-xs-6">
                <h4 id="cat-entreprise-foot">Entreprises par Commune</h4>
                <ul class="list-unstyled">
                    <?php

                        $args = array(
                            'orderby'   => 'name',
                            'order'     => 'ASC',
                            'taxonomy'  => 'commune',
                        );

                        $categories = get_categories($args);

                        foreach( $categories as $category )
                        {
                            echo "<li><a href='" . get_term_link( $category ) . "'>$category->name</a>";
                        }
                    ?>
                </ul>
            </div>

            <?php $sidebars = array( 2, 3, 4 );
            foreach ($sidebars  as $sidebar ): ?>
                <div class="col-sm-3 col-xs-12">
                    <?php dynamic_sidebar( 'sidebar-footer-' . $sidebar ); ?>
                </div>
            <?php endforeach ?>

        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <p>
                    <a href="http://www.annuairehaiti.com">
                        <img class="img-responsive img-rounded" src="<?php echo get_template_directory_uri(); ?>/images/lannuaire-dhaiti-300x111.png">
                    </a>
                </p>
                <p class="text-center">&copy; 2015 <strong>L'Annuaire d'Haiti</strong></p>
            </div>
            <div class="col-sm-6 text-center">
                <p>
                    <a href="http://www.jgbnd.com" target="_blank">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/logo-jgbnd.png">
                    </a>
                </p>
                <p>
                    Une production de <strong>
                    <a href="http://www.jgbnd.com" target="_blank">JGB! Neat Design</a></strong>
                </p>
            </div>
        </div>
    </div>
</section>

<?php include_once 'ah-search-modal.php'; ?>

<?php wp_footer(); ?>

</body>
</html>
