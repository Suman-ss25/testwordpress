<?php
/**
 * The template for displaying home page.
 * @package Mega Construction
 */
get_header(); ?>

<main id="maincontent" role="main" class="main-wrap-box py-4">
    <?php
    $mega_construction_left_right = get_theme_mod( 'mega_construction_layout','Right Sidebar');
    if($mega_construction_left_right == 'Right Sidebar'){ ?>
        <section id="blog_post">
    		<div class="container"> 
                <div class="row">       
                    <div class="col-lg-9 col-md-9">
                        <?php if( get_theme_mod( 'mega_construction_blog_nav_position','bottom') == 'top' || get_theme_mod( 'mega_construction_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'mega_construction_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php mega_construction_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>                
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content', get_post_format() );           
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'mega_construction_blog_nav_position','bottom') == 'bottom' || get_theme_mod( 'mega_construction_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'mega_construction_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php mega_construction_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>
                    </div>      
                	<div class="col-lg-3 col-md-3"><?php get_sidebar();?></div>
          		    <div class="clearfix"></div>
                </div>
            </div>
        </section>
    <?php }else if($mega_construction_left_right == 'Left Sidebar'){ ?>
        <section id="blog_post">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3"><?php get_sidebar();?></div>
                    <div class="col-lg-9 col-md-9" > 
                        <?php if( get_theme_mod( 'mega_construction_blog_nav_position','bottom') == 'top' || get_theme_mod( 'mega_construction_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'mega_construction_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php mega_construction_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>               
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content', get_post_format() );           
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'mega_construction_blog_nav_position','bottom') == 'bottom' || get_theme_mod( 'mega_construction_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'mega_construction_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php mega_construction_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>
                    </div>    
                </div>                
            </div>
        </section>
    <?php }else if($mega_construction_left_right == 'One Column'){ ?>
        <section id="blog_post">
            <div class="container">
                <?php if( get_theme_mod( 'mega_construction_blog_nav_position','bottom') == 'top' || get_theme_mod( 'mega_construction_blog_nav_position','bottom') == 'both') { ?>
                    <?php if( get_theme_mod( 'mega_construction_post_navigation',true) != '') { ?>
                        <div class="navigation">
                            <?php mega_construction_posts_pagination();?>
                            <div class="clearfix"></div>
                        </div>
                    <?php }?>
                <?php }?>
                <?php if ( have_posts() ) :
                    /* Start the Loop */
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content', get_post_format() );           
                    endwhile;
                      else :
                        get_template_part( 'no-results' ); 
                    endif; 
                ?>
                <?php if( get_theme_mod( 'mega_construction_blog_nav_position','bottom') == 'bottom' || get_theme_mod( 'mega_construction_blog_nav_position','bottom') == 'both') { ?>
                    <?php if( get_theme_mod( 'mega_construction_post_navigation',true) != '') { ?>
                        <div class="navigation">
                            <?php mega_construction_posts_pagination();?>
                            <div class="clearfix"></div>
                        </div>
                    <?php }?>
                <?php }?>                    
            </div>
        </section>
    <?php }else if($mega_construction_left_right == 'Three Columns'){ ?>
        <section id="blog_post">
            <div class="container">
                <div class="row">
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1');?></div>
                    <?php if( get_theme_mod( 'mega_construction_blog_nav_position','bottom') == 'top' || get_theme_mod( 'mega_construction_blog_nav_position','bottom') == 'both') { ?>
                        <?php if( get_theme_mod( 'mega_construction_post_navigation',true) != '') { ?>
                            <div class="navigation">
                                <?php mega_construction_posts_pagination();?>
                                <div class="clearfix"></div>
                            </div>
                        <?php }?>
                    <?php }?>
                    <div class="col-lg-6 col-md-6">                
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content', get_post_format() );           
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'mega_construction_blog_nav_position','bottom') == 'bottom' || get_theme_mod( 'mega_construction_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'mega_construction_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php mega_construction_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>
                    </div> 
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2');?></div> 
                </div>              
            </div>
        </section>
    <?php }else if($mega_construction_left_right == 'Four Columns'){ ?>
        <section id="blog_post">
            <div class="container">
                <div class="row">
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1');?></div>
                    <div class="col-lg-3 col-md-3"> 
                        <?php if( get_theme_mod( 'mega_construction_blog_nav_position','bottom') == 'top' || get_theme_mod( 'mega_construction_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'mega_construction_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php mega_construction_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>               
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content', get_post_format() );           
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'mega_construction_blog_nav_position','bottom') == 'bottom' || get_theme_mod( 'mega_construction_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'mega_construction_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php mega_construction_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>
                    </div> 
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2');?></div>
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-3');?></div>
                </div>
            </div>
        </section>
    <?php }else if($mega_construction_left_right == 'Grid Layout'){ ?>
        <section id="blog_post">
            <div class="container">
                <?php if( get_theme_mod( 'mega_construction_blog_nav_position','bottom') == 'top' || get_theme_mod( 'mega_construction_blog_nav_position','bottom') == 'both') { ?>
                    <?php if( get_theme_mod( 'mega_construction_post_navigation',true) != '') { ?>
                        <div class="navigation">
                            <?php mega_construction_posts_pagination();?>
                            <div class="clearfix"></div>
                        </div>
                    <?php }?>
                <?php }?>
                <div class="row">
                    <?php if ( have_posts() ) :
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/grid-layout' );
                        endwhile;
                          else :
                            get_template_part( 'no-results' ); 
                        endif; 
                    ?>
                </div>
                <?php if( get_theme_mod( 'mega_construction_blog_nav_position','bottom') == 'bottom' || get_theme_mod( 'mega_construction_blog_nav_position','bottom') == 'both') { ?>
                    <?php if( get_theme_mod( 'mega_construction_post_navigation',true) != '') { ?>
                        <div class="navigation">
                            <?php mega_construction_posts_pagination();?>
                            <div class="clearfix"></div>
                        </div>
                    <?php }?>
                <?php }?>                                        
            </div>
        </section>
    <?php }else {?>
        <section id="blog_post">
            <div class="container"> 
                <div class="row">       
                    <div class="col-lg-9 col-md-9"> 
                        <?php if( get_theme_mod( 'mega_construction_blog_nav_position','bottom') == 'top' || get_theme_mod( 'mega_construction_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'mega_construction_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php mega_construction_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>               
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content', get_post_format() );           
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'mega_construction_blog_nav_position','bottom') == 'bottom' || get_theme_mod( 'mega_construction_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'mega_construction_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php mega_construction_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>
                    </div>      
                    <div class="col-lg-3 col-md-3"><?php get_sidebar();?></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </section>
    <?php } ?>
</main>

<?php get_footer(); ?>