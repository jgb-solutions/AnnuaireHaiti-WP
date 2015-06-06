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