<?php 
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Density
*/
	get_header(); 
	?>
            <?php
				density_breadcrumbs();
			?>
			<div class="density_tm_section pt-100">
                <div class="container">
                    <div class="density_tm_blog_wrap">
                        <div class="density_tm_twicebox_wrap">
                            <div class="leftbox">
                                <div class="blog_list_wrap">
                                    <ul>
                                        <?php 
										if ( have_posts() ) : while ( have_posts() ) : the_post(); 
										?>                                            
                                            <li>
                                                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                                    <?php get_template_part('content-parts/content', get_post_format()); ?>
                                                </div>
                                            </li>
                                        <?php 
                                        endwhile;
                                        else :
                                        get_template_part( 'content-parts/content', 'none' );
                                        endif; 
										?>
                                        <div class="density_tm_section">
                                            <div class="container">
                                                <div class="density_tm_pagination">
                                                    <?php 
														the_posts_pagination(array(
                                                        'prev_text' =>esc_html__(' &laquo; Prev','density'),
                                                        'next_text' =>esc_html__('Next &raquo;','density')
                                                        )
                                                      ); 
													?>
                                                </div>
                                            </div>
                                        </div>  
                                    </ul>
                                </div>
                            </div>
                            <div class="rightbox">
								<div class="density_tm_request_estimate_wrap">
									<?php get_sidebar(); ?>                                     
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
	<?php get_footer(); ?>