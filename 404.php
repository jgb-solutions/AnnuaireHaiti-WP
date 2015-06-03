
<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package JGB! Neat Design
 */

get_header(); ?>

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 left-content bg-white">
				<h2 class="text-center">404! Vous vous êtes perdu, c'est sûr.</h2>
				<p>Utilisez la forme pour rechercher une entreprise ou un article ou retournez sur <a href="<?php echo home_url('/'); ?>">la page d'accueil.</a></p>
				<p><?php get_search_form(); ?></p>
            </div>

			<?php get_sidebar(); ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>