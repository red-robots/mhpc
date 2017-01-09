<?php
/**
 * Template Name: Weekly Ops Brief
 */

get_header(); ?>



			<?php while ( have_posts() ) : the_post(); ?>
				
                
              <div class="page-content">
            	
				
				
               
              
 
                
                
            <div class="entry-content">
            
            <h1><?php the_title(); ?></h1>
            
            
				<?php the_content(); ?>
            </div><!-- entry-content -->
            
            </div><!-- page-content -->
                
                
                
			
			<?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>