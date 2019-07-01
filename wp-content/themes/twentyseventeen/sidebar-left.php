<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
if ( ! is_active_sidebar( 'sidebar-5' ) ) {
	return;
}
?>

<aside id="sidebar-left" class="nav-menu-sidebar widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Left Sidebar', 'twentyseventeen' ); ?>">
	<?php dynamic_sidebar( 'sidebar-5' ); ?>
</aside><!-- #secondary -->
