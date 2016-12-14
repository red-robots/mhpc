<?php
/**
 * Template Name: Tools & Info
 */

get_header(); ?>

<div class="page-content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
        <div class="page-left">         
            <div class="entry-content">
                <h1><?php the_title(); ?></h1>
                <?php the_field('resources','option'); ?>
            </div><!-- entry-content -->
        </div><!-- page left -->
        
        
        <div class="page-right">
            <?php if(have_rows('page_picker')) : while(have_rows('page_picker')) : the_row();

                $post_object = get_sub_field('page');
                $altTitle = get_sub_field('page_title');

                if( $post_object ):

                    $post = $post_object; 
                    setup_postdata( $post );

                echo '<li>';
                echo '<a href="' . get_the_permalink() . '">';
                if( $altTitle != '' ) {
                    echo $altTitle;
                } else {
                    the_title();
                }
                echo '</a>';
                echo '</li>';
             ?>
                


                <?php 

                wp_reset_postdata();
                endif; 

            endwhile;
            endif;
                ?>
        </div><!-- page right -->
        
        
    <?php endwhile; // end of the loop. ?>
    <?php endif; // end of the loop. ?>
</div><!-- page-content -->
<?php get_footer(); ?>