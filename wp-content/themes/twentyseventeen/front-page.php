<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>



		<?php
		// Get each of our panels and show the post data.
		if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) : // If we have pages to show.

			/**
			 * Filter number of front page sections in Twenty Seventeen.
			 *
			 * @since Twenty Seventeen 1.0
			 *
			 * @param int $num_sections Number of front page sections.
			 */
			$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
			global $twentyseventeencounter;

			// Create a setting and control for each of the sections available in the theme.
			for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
				$twentyseventeencounter = $i;
				twentyseventeen_front_page_section( null, $i );
			}

	endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here.
		?>
		<div class="homePageMenus">
			<div class="trevor-menus">
				
				<?php
					echo '<div class="trevor-menu-label">About OCDLA</div>';
					wp_nav_menu( array('theme_location' => 'aboutOCDLA'));
				?>
				<?php
					echo '<div class="trevor-menu-label">About OCDLA</div>';
					wp_nav_menu( array('theme_location' => 'moreAboutOCDLA'));
				?>
			</div>
			<div class="trevor-menus">
				<?php
				 echo '<div class="trevor-menu-label">About OCDLA</div>';
				 wp_nav_menu( array('theme_location' => 'resourcesAndDatabases'));?>
			</div>
		</div>
		<div class="theImage" id="theImage">
			<!-- <img src="wp-content\themes\twentyseventeen\assets\images\Capture.PNG" /> -->
		</div>
		<div class="trevor-posts-container">
			<div class="trevor-posts" >
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<?php
					wp_reset_query();
					$query = new WP_Query( array( 'post_type' => 'post' ) );
					//$recent_posts = wp_get_recent_posts();


					// Show the selected front page content.
					if ($query->have_posts() ) :
						while ( $query->have_posts() ) :
							$query->the_post();
							get_template_part( 'template-parts/page/content', 'front-page-trevor' );
						endwhile;
					else :
						get_template_part( 'template-parts/post/content', 'none' );
					endif;
					?>
					
				</div>
			</div>
		</div>

		
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
