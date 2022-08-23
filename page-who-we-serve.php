<?php
/**
 * Template Name: Who We Serve
 */

get_header(); ?>



			
				
                
              <div class="page-content">
              <?php while ( have_posts() ) : the_post(); ?>
            <div class="entry-content">
            
            <h1><?php the_title(); ?></h1>
            
            
				<?php the_content(); ?>
                
            
            <div id="states-container">
             <div class="map-words-container-mobile">
             <h3>Partners</h3>
             <div class="map-words">
                <ul>
                    <li>
                        <a href="#hospitals">Hospitals</a>
                    </li>
                    <li>
                        <a href="#agencies">EMS Agencies</a>
                    </li>
                     <li>
                        <a href="#emergency-management">Emergency Management</a>
                    </li>
                    <li>
                        <a href="#public-health">Public Health</a>
                    </li>
                </ul>
             </div><!-- map words -->
             

             <h3>Counties</h3>
             <div class="map-words">
                
             	<ul>
                	<!-- <li><a class='inline' href="#burke" id="countyburke">Burke</a></li> -->
                    <li><a class='inline' href="#cleveland" alt="cleveland" >Cleveland</a></li>
                    <li><a class='inline' href="#catawba" alt="catawba" >Catawba</a></li>
                    <li><a class='inline' href="#lincoln" alt="lincoln" >Lincoln</a></li>
                    <li><a class='inline' href="#gaston" alt="gaston" >Gaston</a></li>
                    <li><a class='inline' href="#iredell" alt="iredell" >Iredell</a></li>
                    <li><a class='inline' href="#mecklenburg" alt="mecklenburg" >Mecklenburg</a></li>
                    
               </ul>
             </div><!-- map words -->
             
             <div class="map-words">
             	<ul>
                	<li><a class='inline' href="#cabarrus" alt="cabarrus">Cabarrus</a></li>
                    <li><a class='inline' href="#union" alt="union" >Union</a></li>
                    <li><a class='inline' href="#stanly" alt="stanly" >Stanly</a></li>
                    <li><a class='inline' href="#anson" alt="anson" >Anson</a></li>
                    <li><a class='inline' href="#richmond" alt="richmond" >Richmond</a></li>
                    <li><a class='inline' href="#scotland" alt="scotland" >Scotland</a></li>
                   
                
               </ul>
             </div> <!-- map words -->
             
             <div class="clear"></div>
              <ul>
              <li>
                 <a class='inline' href="#other-state-regional-partners" alt="other-state-regional-partners" >
                      Other State Regional Partners
                 </a>
             </li></ul>
             
             </div> <!-- map words container mobile -->


             <div class="map-words-container">
             <div class="map-words">
                <ul>
                    <!-- <li><a class='inline' href="#burke" id="countyburke">Burke</a></li> -->
                    <li><a class='inline' href="#cleveland" alt="cleveland" >Cleveland</a></li>
                    <li><a class='inline' href="#catawba" alt="catawba" >Catawba</a></li>
                    <li><a class='inline' href="#lincoln" alt="lincoln" >Lincoln</a></li>
                    <li><a class='inline' href="#gaston" alt="gaston" >Gaston</a></li>
                    <li><a class='inline' href="#iredell" alt="iredell" >Iredell</a></li>
                    <li><a class='inline' href="#mecklenburg" alt="mecklenburg" >Mecklenburg</a></li>
                    
               </ul>
             </div><!-- map words -->
             
             <div class="map-words">
                <ul>
                    <li><a class='inline' href="#cabarrus" alt="cabarrus">Cabarrus</a></li>
                    <li><a class='inline' href="#union" alt="union" >Union</a></li>
                    <li><a class='inline' href="#stanly" alt="stanly" >Stanly</a></li>
                    <li><a class='inline' href="#anson" alt="anson" >Anson</a></li>
                    <li><a class='inline' href="#richmond" alt="richmond" >Richmond</a></li>
                    <li><a class='inline' href="#scotland" alt="scotland" >Scotland</a></li>
                   
                
               </ul>
             </div> <!-- map words -->
             
             <div class="clear"></div>
              <ul>
              <li>
                 <a class='inline' href="#other-state-regional-partners" alt="other-state-regional-partners" >
                      Other State Regional Partners
                 </a>
             </li></ul>
             
             </div> <!-- map words container -->
             
             <div class="map-image">
             		<img src="<?php bloginfo('template_url'); ?>/images/map3.png" usemap="#Map" id="map"/>
             		<?php get_template_part('includes/map-cords'); ?>
             </div><!-- map image -->
             </div><!-- states container -->   
                
            </div><!-- entry-content -->
            
<?php endwhile; // end of the loop. ?>

<?php wp_reset_postdata(); ?>

<div class="clear"></div>


<?php get_template_part('includes/popups'); ?>

<?php get_template_part('includes/table'); ?>







</div><!-- page-content -->
                
			



<?php get_footer(); ?>