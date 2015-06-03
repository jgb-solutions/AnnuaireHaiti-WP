<?php

$number = $number2 = 0;

$args = array(
    'post_type'     => array('post', 'entreprise'),
	'post_per_page' => 5,
	'meta_key'		=> 'ahshowslider',
	'meta_value'	=> 1
);
$query = new WP_Query( $args );

if ( $query->have_posts() ): ?>

<div class="container-fluid">
    <div class="row">
        <div id="ah-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">

            	<?php while( $query->have_posts() ): $query->the_post(); ?>

	    		<li class="<?php echo ( $number < 1 ) ? 'active' : ''; ?>"data-target="#ah-carousel" data-slide-to="<?php echo $number++; ?>"></li>

	    		<?php endwhile; ?>

            </ol>

            <div class="carousel-inner">

				<?php while( $query->have_posts() ): $query->the_post(); ?>

                <div class="item <?php echo ( $number2 < 1 ) ? 'active' : ''; ?>">
                    <a href="<?php the_permalink(); ?>">
                    	<img width="100%" src="<?php echo ahget('ahsliderimage' ); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                    </a>
                </div>

            	<?php $number2++; endwhile; ?>
            </div>

            <a class="left carousel-control" href="#ah-carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#ah-carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
</div>

<?php endif; wp_reset_postdata(); ?>