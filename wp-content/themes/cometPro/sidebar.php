<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package honeyHome
 */

// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
// 	return;
// }
?>

          <div class="col-md-3 col-md-offset-1">
            <div class="sidebar hidden-sm hidden-xs">
              <?php dynamic_sidebar('right_sidebar'); ?>
            </div>
          </div>
