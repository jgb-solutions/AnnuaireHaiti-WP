<?php
/**
 * Template Name: Page de Recherche
 */
?>

<?php get_header(); ?>

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 left-content bg-white">

                <h2>Recher une entreprise</h2>

                <?php get_search_form(); ?>

                <div id="searchResults"></div>

            </div>

			<?php get_sidebar(); ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>