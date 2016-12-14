<?php wp_reset_postdata(); ?>
<?php 
###############################

		// Burke County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'burke' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
    <div id='burke' class="popups">
    <h3>Burke County</h3> 
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
      		<div class="popup">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <div class="pop-phone"><?php the_field('phone#'); ?></div>
                <div class="pop-liason"><?php the_field('liason'); ?></div>
            </div><!-- popup -->
		
                   
        <?php endwhile; ?> 
        </div><!-- #burke -->
    </div><!-- display none --> 
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 

<?php 
###############################

		// Cleveland County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'cleveland' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='cleveland' class="popups">
         <h3>Cleveland County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <div class="pop-phone"><?php the_field('phone#'); ?></div>
                <div class="pop-liason"><?php the_field('liason'); ?></div>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #cleveland -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 


<?php 
###############################

		// Catawba County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'catawba' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='catawba' class="popups">
         <h3>Catawba County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <div class="pop-phone"><?php the_field('phone#'); ?></div>
                <div class="pop-liason"><?php the_field('liason'); ?></div>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #catawba -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 



<?php 
###############################

		// Lincoln County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'lincoln' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='lincoln' class="popups">
         <h3>Lincoln County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <div class="pop-phone"><?php the_field('phone#'); ?></div>
                <div class="pop-liason"><?php the_field('liason'); ?></div>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #lincoln -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 



<?php 
###############################

		// Gaston County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'gaston' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='gaston' class="popups">
         <h3>Gaston County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <div class="pop-phone"><?php the_field('phone#'); ?></div>
                <div class="pop-liason"><?php the_field('liason'); ?></div>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #gaston -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 


<?php 
###############################

		// Iredell County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'iredell' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='iredell' class="popups">
         <h3>Iredell County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <div class="pop-phone"><?php the_field('phone#'); ?></div>
                <div class="pop-liason"><?php the_field('liason'); ?></div>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #iredell -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 


<?php 
###############################

		// Mecklenburg County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'mecklenburg' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='mecklenburg' class="popups">
         <h3>Mecklenburg County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <div class="pop-phone"><?php the_field('phone#'); ?></div>
                <div class="pop-liason"><?php the_field('liason'); ?></div>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #mecklenburg -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 


<?php 
###############################

		// Cabarrus County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'cabarus' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='cabarrus' class="popups">
         <h3>Cabarrus County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <div class="pop-phone"><?php the_field('phone#'); ?></div>
                <div class="pop-liason"><?php the_field('liason'); ?></div>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #cabarus -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 



<?php 
###############################

		// Union County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'union' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='union' class="popups">
         <h3>Union County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <div class="pop-phone"><?php the_field('phone#'); ?></div>
                <div class="pop-liason"><?php the_field('liason'); ?></div>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #union -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 





<?php 
###############################

		// Stanly County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'stanly' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='stanly' class="popups">
         <h3>Stanly County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <div class="pop-phone"><?php the_field('phone#'); ?></div>
                <div class="pop-liason"><?php the_field('liason'); ?></div>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #stanly -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 



<?php 
###############################

		// Anson County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'anson' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='anson' class="popups">
         <h3>Anson County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <div class="pop-phone"><?php the_field('phone#'); ?></div>
                <div class="pop-liason"><?php the_field('liason'); ?></div>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #anson -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 



<?php 
###############################

		// Richmond County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'richmond' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='richmond' class="popups">
         <h3>Richmond County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <div class="pop-phone"><?php the_field('phone#'); ?></div>
                <div class="pop-liason"><?php the_field('liason'); ?></div>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #richmond -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 



<?php 
###############################

		// Scotland County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'scotland' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='scotland' class="popups">
         <h3>Scotland County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <div class="pop-phone"><?php the_field('phone#'); ?></div>
                <div class="pop-liason"><?php the_field('liason'); ?></div>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #stanly -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 


<?php 
###############################

		// Scotland County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'other-state-regional-partners' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='other-state-regional-partners' class="popups">
         <h3>Other State Regional Partners</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <div class="pop-phone"><?php the_field('phone#'); ?></div>
                <div class="pop-liason"><?php the_field('liason'); ?></div>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #stanly -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 


