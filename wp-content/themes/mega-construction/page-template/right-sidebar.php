<?php
/**
 * Template Name: Page with Right Sidebar
**/
get_header(); ?>

<?php do_action('mega_construction_page_right_header'); ?>

<div class="container">
    <main id="maincontent" role="main" class="main-wrap-box py-4 row">
		<div class="col-lg-9 col-md-9 p-3 mb-4" id="wrapper">
			<?php while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <?php the_post_thumbnail(); ?>
                <?php the_content(); ?>

                <?php wp_link_pages( array(
                    'before'      => '<div class="page-links"><span class="page-links-title p-3">' . __( 'Pages:', 'mega-construction' ) . '</span>',
                    'after'       => '</div>',
                    'link_before' => '<span class="page-number py-2 px-3">',
                    'link_after'  => '</span>',
                    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'mega-construction' ) . ' </span>%',
                    'separator'   => '<span class="screen-reader-text">, </span>',
                ) ); 

                //If comments are open or we have at least one comment, load up the comment template
                	if ( comments_open() || '0' != get_comments_number() )
                    	comments_template();
                ?>
            <?php endwhile; wp_reset_postdata(); ?>            
        </div>
        <div id="sidebar" class="col-lg-3 col-md-3">
			<?php dynamic_sidebar('sidebar-2'); ?>
		</div>
        <div class="clearfix"></div>    
    </main>
</div>

<?php do_action('mega_construction_page_right_footer'); ?>

<?php get_footer(); ?>