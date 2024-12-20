<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Focused_CRE
 */

get_header();
?>

<div class="newsSingle py-6 d-flex align-items-center mt-header">
    <div class="container">
        <div class="row">
          
            <div class="col-md-8 col-sm-8 col-xs-12">
				<?php
                if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
                    ?>
                    <div class="newsThumb">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                    <?php
                }
                ?>
                <div class="newsAddSec2RightCol">
					 
                    <h1><?php the_title(); ?></h1>
                    <span class="date"><?php the_time(get_option('date_format')); ?></span>
                    <?php the_content(); ?>
<!--                     <h5><?php the_time(get_option('date_format')); ?></h5> -->
                </div>
            </div>
			  <div class="col-md-4 col-sm-4 col-xs-12">
               <div class="widget_popular_post">
				   <?php get_sidebar(); ?>
                    
                    
                    <div class="row singleBlogForm">
						<h2 class="mb-1">LET'S CONNECT</h2>
                    <p>Enter your details below and we will be in touch.</p>
                        <?php
                            echo do_shortcode('[contact-form-7 id="108" title="Blog Contact"]');
                        ?>
                    </div>
                </div>
				
				
				    
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
