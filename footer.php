<?php include_once 'cta.php'; ?>

<?php include_once 'sponsors.php'; ?>


<section class="footer" >
    <div class="container">
        <div class="row">

            <?php if ( ! dynamic_sidebar('sidebar-footer-1') ): ?>

            <div class="col-sm-3 col-xs-6">
                <h4 class="cat-entreprise-foot">Catégorie d'Entreprises</h4>
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

            <?php endif; ?>

            <?php if ( ! dynamic_sidebar('sidebar-footer-2') ): ?>

            <div class="col-sm-3 col-xs-6">
                <h4 class="cat-entreprise-foot">Entreprises par Département</h4>
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

                <h4 class="cat-entreprise-foot">Entreprises par Ville</h4>
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

            <?php endif; ?>

            <?php if ( ! dynamic_sidebar('sidebar-footer-3') ): ?>

            <div class="col-sm-3 col-xs-6">
                <h4 class="cat-entreprise-foot">Entreprises par Commune</h4>
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

            <?php endif; ?>

            <?php if ( ! dynamic_sidebar('sidebar-footer-4') ): ?>

            <div class="col-sm-3 col-xs-12">
                <h4>À Propos de L'Annuaire d'Haiti</h4>
                <p>
                    L'Annuaire d'Haiti est le plus grand site de référencement d'entreprises du pays. Nous offrons un service de recensement pour petites, moyennes et grosses entreprises. Notre base de données grandit quotidiennement avec l'ajout de nouvelles entreprises, qui comprennent l'importance d'être visible en ligne et être à disposition de nouveaux clients qui veulent savoir comment bénéficier de leur service au pays. En plus, à AH nous sommes une famille. <a href="/inscription">Rejoignez-nous</a>!
                </p>
            </div>

            <?php endif; ?>

        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 text-center">
                <div class="row">
                    <div class="col-xs-3"><a href="https://twitter.com/annuairehaiti" target="_blank" class="btn btn-info btn-large btn-block"><i class="fa fa-2x fa-twitter"></i></a></div>
                    <div class="col-xs-3"><a href="https://www.facebook.com/annuairehaiti" target="_blank" class="btn btn-primary btn-large btn-block"><i class="fa fa-2x fa-facebook"></i></a></div>
                    <div class="col-xs-3"><a href="https://plus.google.com/106816270262102955445/posts" target="_blank" class="btn btn-danger btn-large btn-block"><i class="fa fa-2x fa-google-plus"></i></a></div>
                </div>
                <br>
                <p>
                    <a href="http://annuairehaiti.com">
                        <img class="img-responsive img-rounded" src="<?php echo get_template_directory_uri(); ?>/images/lannuaire-dhaiti-300x111.png">
                    </a>
                </p>
                <p>&copy; 2015 <strong><a href="http://annuairehaiti.com">L'Annuaire d'Haiti</a></strong></p>
            </div>
            <br class="visible-xs">
             <br class="visible-xs">
            <div class="col-sm-6 text-center">
                <div class="row">
                    <div class="col-xs-3"><a href="https://twitter.com/jgbneatdesign" target="_blank" class="btn btn-info btn-large btn-block"><i class="fa fa-2x fa-twitter"></i></a></div>
                    <div class="col-xs-3"><a href="https://www.facebook.com/jgbnd" target="_blank" class="btn btn-primary btn-large btn-block"><i class="fa fa-2x fa-facebook"></i></a></div>
                    <div class="col-xs-3"><a href="https://plus.google.com/+JeanGerardBousiquot_ND" target="_blank" class="btn btn-danger btn-large btn-block"><i class="fa fa-2x fa-google-plus"></i></a></div>
                    <div class="col-xs-3"><a href="https://github.com/jgbneatdesign" target="_blank" class="btn btn-default text-black btn-block"><i class="fa fa-github fa-2x"></i></a></div>
                </div>
                <br>
                <p>
                    <a href="http://jgbnd.com" target="_blank">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/logo-jgbnd.png">
                    </a>
                </p>
                <p>
                    Une production de <strong>
                    <a href="http://jgbnd.com" target="_blank">JGB! Neat Design</a></strong>
                </p>
            </div>
        </div>
    </div>
</section>

<?php include_once 'ah-search-modal.php'; ?>

<?php wp_footer(); ?>

</body>
</html>
