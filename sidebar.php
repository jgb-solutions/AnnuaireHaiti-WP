<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package JGB! Neat Design
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="col-sm-4 right-content">
    <div class="row">
        <div class="col-sm-12">
            <?php dynamic_sidebar( 'sidebar-right' ); ?>
        </div>
    </div>
</div>
