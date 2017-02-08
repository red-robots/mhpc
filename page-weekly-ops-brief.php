<?php
/**
 * Template Name: Weekly Ops Brief
 */

get_header(); 

while ( have_posts() ) : the_post(); 
// Setup availablity array 
$statusSMAT = array();
$statusMED = array();
$statusStaff = array();

// Staff
$available_travis_c = get_field_object('available_travis_c');
$value = $available_travis_c['value'];
$label = $available_travis_c['choices'][ $value ];
$on_call = get_field('on_call');
$days_available_travis_c = get_field('days_available_travis_c');
$statusStaff[] = array(
	'name' => 'Travis Cryan', 
	'availabilityClass' => $value, 
	'availability' => $label, 
	'oncall' => $on_call, 
	'days' => $days_available_travis_c );

// echo '<pre>';
// print_r($available_travis_c);
// echo '</pre>';

$available_hannah_g = get_field_object('available_hannah_g');
$value = $available_hannah_g['value'];
$label = $available_hannah_g['choices'][ $value ];
$on_call_hannah_g = get_field('on_call_hannah_g');
$days_available_hannah_g = get_field('days_available_hannah_g');
$statusStaff[] = array(
	'name' => 'Hannah Gompers', 
	'availabilityClass' => $value, 
	'availability' => $label, 
	'oncall' => $on_call_hannah_g, 
	'days' => $days_available_hannah_g );

$available_scott_h = get_field_object('available_scott_h');
$value = $available_scott_h['value'];
$label = $available_scott_h['choices'][ $value ];
$on_call_scott_h = get_field('on_call_scott_h');
$days_available_scott_h = get_field('days_available_scott_h');
$statusStaff[] = array(
	'name' => 'Scott Hess', 
	'availabilityClass' => $value, 
	'availability' => $label, 
	'oncall' => $on_call_scott_h, 
	'days' => $days_available_scott_h );

$available_kc_bernesser = get_field_object('available_kc_bernesser');
$value = $available_kc_bernesser['value'];
$label = $available_kc_bernesser['choices'][ $value ];
$on_call_kc_bernesser = get_field('on_call_kc_bernesser');
$days_available_kc_bernesser = get_field('days_available_kc_bernesser');
$statusStaff[] = array(
	'name' => 'KC Bernesser', 
	'availabilityClass' => $value, 
	'availability' => $label, 
	'oncall' => $on_call_kc_bernesser, 
	'days' => $days_available_kc_bernesser );


// Content
$intro_content = get_field('intro_content');

// Availablility
$availability_f550 = get_field('availability_f550');
$notes_f550 = get_field('notes_f550');
$statusSMAT[] = array('name' => 'F-550', 'availability' => $availability_f550, 'notes' => $notes_f550 );

$availability_volvo_tractor = get_field('availability_volvo_tractor');
$notes_volvo_tractor = get_field('notes_volvo_tractor');
$statusSMAT[] = array('name' => 'Volvo Tractor', 'availability' => $availability_volvo_tractor, 'notes' => $notes_volvo_tractor );

$availability_m8_trailer = get_field('availability_m8_trailer');
$notes_m8_trailer = get_field('notes_m8_trailer');
$statusSMAT[] = array('name' => 'M-8 Trailer', 'availability' => $availability_m8_trailer, 'notes' => $notes_m8_trailer );

$availability_smss_trailer = get_field('availability_smss_trailer');
$notes_smss_trailer = get_field('notes_smss_trailer');
$statusSMAT[] = array('name' => 'SMSS Trailer', 'availability' => $availability_smss_trailer, 'notes' => $notes_smss_trailer );

$availability_ast_trailer = get_field('availability_ast_trailer');
$notes_ast_trailer = get_field('notes_ast_trailer');
$statusSMAT[] = array('name' => 'AST Trailer', 'availability' => $availability_ast_trailer, 'notes' => $notes_ast_trailer );

$availability_msu_1 = get_field('availability_msu_1');
$notes_msu_1 = get_field('notes_msu_1');
$statusSMAT[] = array('name' => 'MSU 1', 'availability' => $availability_msu_1, 'notes' => $notes_msu_1 );

$availability_msu_2 = get_field('availability_msu_2');
$notes_msu_2 = get_field('notes_msu_2');
$statusSMAT[] = array('name' => 'MSU 2', 'availability' => $availability_msu_2, 'notes' => $notes_msu_2 );

$availability_resupply_trailer = get_field('availability_resupply_trailer');
$notes_resupply_trailer = get_field('notes_resupply_trailer');
$statusSMAT[] = array('name' => 'Re-Supply Trailer', 'availability' => $availability_resupply_trailer, 'notes' => $notes_resupply_trailer );

$availability_decon_trailer = get_field('availability_decon_trailer');
$notes_decon_trailer = get_field('notes_decon_trailer');
$statusSMAT[] = array('name' => 'Decon Trailer', 'availability' => $availability_decon_trailer, 'notes' => $notes_decon_trailer );

$availability_reefer_trailer = get_field('availability_reefer_trailer');
$notes_reefer_trailer = get_field('notes_reefer_trailer');
$statusSMAT[] = array('name' => 'Reefer Trailer', 'availability' => $availability_reefer_trailer, 'notes' => $notes_reefer_trailer );

$availability_comms_unit = get_field('availability_comms_unit');
$notes_comms_unit = get_field('notes_comms_unit');
$statusSMAT[] = array('name' => 'Comms Unit', 'availability' => $availability_comms_unit, 'notes' => $notes_comms_unit );

$availability_25kw_gen = get_field('availability_25kw_gen');
$notes_25kw_gen = get_field('notes_25kw_gen');
$statusSMAT[] = array('name' => '25kw Gen', 'availability' => $availability_25kw_gen, 'notes' => $notes_25kw_gen );

$availability_genie_light_tower = get_field('availability_genie_light_tower');
$notes_genie_light_tower = get_field('notes_genie_light_tower');
$statusSMAT[] = array('name' => 'Genie Light Tower', 'availability' => $availability_genie_light_tower, 'notes' => $notes_genie_light_tower );

$availability_bioseal_remains_containment_system = get_field('availability_bioseal_remains_containment_system');
$notes_bioseal_remains_containment_system = get_field('notes_bioseal_remains_containment_system');
$statusSMAT[] = array('name' => 'BioSeal Remains Containment System', 'availability' => $availability_bioseal_remains_containment_system, 'notes' => $notes_bioseal_remains_containment_system );

$availability_medial_equipment = get_field('availability_medial_equipment');
$notes_medial_equipment = get_field('notes_medial_equipment');
$statusSMAT[] = array('name' => 'Medical Equipment', 'availability' => $availability_medial_equipment, 'notes' => $notes_medial_equipment );

$availability_mack_tractor_m_1 = get_field('availability_mack_tractor_m_1');
$notes_mack_tractor_m_1 = get_field('notes_mack_tractor_m_1');
$statusMED[] = array('name' => 'Mack Tractor M-1', 'availability' => $availability_mack_tractor_m_1, 'notes' => $notes_mack_tractor_m_1 );

$availability_mack_tractor_m_2 = get_field('availability_mack_tractor_m_2');
$notes_mack_tractor_m_2 = get_field('notes_mack_tractor_m_2');
$statusMED[] = array('name' => 'Mack Tractor M-2', 'availability' => $availability_mack_tractor_m_2, 'notes' => $notes_mack_tractor_m_2 );

$availability_f650_prime_mover_1 = get_field('availability_f650_prime_mover_1');
$notes_f650_prime_mover_1 = get_field('notes_f650_prime_mover_1');
$statusMED[] = array('name' => 'F650 Prime Mover-1', 'availability' => $availability_f650_prime_mover_1, 'notes' => $notes_f650_prime_mover_1 );

$availability_f650_prime_mover_2 = get_field('availability_f650_prime_mover_2');
$notes_f650_prime_mover_2 = get_field('notes_f650_prime_mover_2');
$statusMED[] = array('name' => 'F650 Prime Mover-2', 'availability' => $availability_f650_prime_mover_2, 'notes' => $notes_f650_prime_mover_2 );

$availability_f350_prime_mover = get_field('availability_f350_prime_mover');
$notes_f350_prime_mover = get_field('notes_f350_prime_mover');
$statusMED[] = array('name' => 'F-350 Prime Mover', 'availability' => $availability_f350_prime_mover, 'notes' => $notes_f350_prime_mover );

$availability_suv_prime_mover = get_field('availability_suv_prime_mover');
$notes_suv_prime_mover = get_field('notes_suv_prime_mover');
$statusMED[] = array('name' => 'SUV Prime Mover', 'availability' => $availability_suv_prime_mover, 'notes' => $notes_suv_prime_mover );

$availability_mission_support_unit = get_field('availability_mission_support_unit');
$notes_mission_support_unit = get_field('notes_mission_support_unit');
$statusMED[] = array('name' => 'Mission Support Unit', 'availability' => $availability_mission_support_unit, 'notes' => $notes_mission_support_unit );

$availability_med1_mobile_ed = get_field('availability_med1_mobile_ed');
$notes_med1_mobile_ed = get_field('notes_med1_mobile_ed');
$statusMED[] = array('name' => 'MED-1 Mobile ED', 'availability' => $availability_med1_mobile_ed, 'notes' => $notes_med1_mobile_ed );

$availability_med2_medical_support = get_field('availability_med2_medical_support');
$notes_med2_medical_support = get_field('notes_med2_medical_support');
$statusMED[] = array('name' => 'MED-2 Medical Support', 'availability' => $availability_med2_medical_support, 'notes' => $notes_med2_medical_support );

$availability_logistics_trailers = get_field('availability_logistics_trailers');
$notes_logistics_trailers = get_field('notes_logistics_trailers');
$statusMED[] = array('name' => 'Logistics Trailers', 'availability' => $availability_logistics_trailers, 'notes' => $notes_logistics_trailers );

$availability_logistics_support_unit = get_field('availability_logistics_support_unit');
$notes_logistics_support_unit = get_field('notes_logistics_support_unit');
$statusMED[] = array('name' => 'Logistics Support Unit', 'availability' => $availability_logistics_support_unit, 'notes' => $notes_logistics_support_unit );

$availability_satellite_trailer = get_field('availability_satellite_trailer');
$notes_satellite_trailer = get_field('notes_satellite_trailer');
$statusMED[] = array('name' => 'Satellite Trailer', 'availability' => $availability_satellite_trailer, 'notes' => $notes_satellite_trailer );



// echo '<pre>';
// print_r($statusStaff);
// echo '</pre>';

?>
				
<div class="page-content">
	<div class="entry-content">
		<h1><?php the_title(); ?></h1>
		
		<?php echo $intro_content; ?>
		<h2>MHPC Staff Availability:</h2>

		<div class="status-wrap">
			<div class="status-row mobile-header">
				<div class="resource">Staff</div>
				<div class="availability">Availability</div>
				<div class="days">Days Unavailable</div>
				<div class="notes">Notes</div>
			</div>
			<!-- jdks -->
			<?php foreach( $statusStaff as $info ) : 
				// echo $info['availabilityClass'];
				if( $info['availabilityClass'] == 'available' ) {
					$class = 'green';
				} elseif( $info['availabilityClass'] == 'limited' ) {
					$class = 'yellow';
				} elseif( $info['availabilityClass'] == 'not' ) {
					$class = 'yellow';
				} elseif( $info['availabilityClass'] == 'out' ) {
					$class = 'red';
				} else {
					$class = '';
				}
				// on call
				if( $info['oncall'] == 'Yes' ) {
					$status = 'On Call';
					$span = 'oncall';
				} elseif( $info['oncall'] == 'No' ) {
					$status = '';
					$span = '';
				} else {
					$status = '';
				}

			?>
				<div class="status-row">

					<div class="resource js-blocks"><?php echo $info['name']; ?></div>
					<div class="mobile-col-headers">Availability</div>
					<div class="availability js-blocks <?php echo $class; ?>"><?php echo $info['availability']; ?></div>
					<div class="mobile-col-headers">Days Unavailable</div>
					<div class="days js-blocks <?php //echo $class; ?>">
					<?php 
					// Loop through the days array
					$days = $info['days']; 
					// $comma_separated = implode(', ',$days);
					// echo $comma_separated;
					if($days):
						foreach ($days as $day) {
							echo '<li>' . $day . '</li>';
						}
					endif;

					?>
					</div>
					<div class="mobile-col-headers">Notes</div>
					<div class="notes js-blocks <?php echo $span; ?>"><?php echo $status ?></div>
				</div>
			<?php endforeach; ?>
		</div><!-- status wrap -->

		<?php the_content(); ?>

		<h2>Metrolina SMAT Equipment Status:</h2>

		<div class="status-wrap">
			<div class="status-row mobile-header">
				<div class="resource">Resource</div>
				<div class="availability">Availability</div>
				<div class="notes-equip">Notes</div>
			</div>

			<?php foreach( $statusSMAT as $info ) : 
				//echo $info['availability'];
				if( $info['availability'] == 'available' ) {
					$class = 'green';
				} elseif( $info['availability'] == 'delayed' ) {
					$class = 'yellow';
				} elseif( $info['availability'] == 'out of service' ) {
					$class = 'red';
				} elseif( $info['availability'] == 'call for info' ) {
					$class = 'yellow';
				} else {
					$class = '';
				}

			?>
				<div class="status-row">
					<div class="mobile-col-headers">Resource</div>
					<div class="resource js-blocks"><?php echo $info['name']; ?></div>
					<div class="mobile-col-headers">Availability</div>
					<div class="availability js-blocks <?php echo $class; ?>"><?php echo $info['availability']; ?></div>
					<div class="mobile-col-headers">Notes</div>
					<div class="notes-equip js-blocks"><?php echo $info['notes']; ?></div>
				</div>
			<?php endforeach; ?>
		</div><!-- status wrap -->

		<h2>MED-1 Equipment Status:</h2>

		<div class="status-wrap">
			<div class="status-row mobile-header">
				<div class="resource">Resource</div>
				<div class="availability">Availability</div>
				<div class="notes-equip">Notes</div>
			</div>

			<?php foreach( $statusMED as $info ) : 
				//echo $info['availability'];
				if( $info['availability'] == 'available' ) {
					$class = 'green';
				} elseif( $info['availability'] == 'delayed' ) {
					$class = 'yellow';
				} elseif( $info['availability'] == 'out of service' ) {
					$class = 'red';
				} elseif( $info['availability'] == 'call for info' ) {
					$class = 'yellow';
				} else {
					$class = '';
				}

			?>
				<div class="status-row">
					<div class="resource js-blocks"><?php echo $info['name']; ?></div>
					<div class="availability js-blocks <?php echo $class; ?>"><?php echo $availability_f550; ?></div>
					<div class="notes-equip js-blocks"><?php echo $notes_f550; ?></div>
				</div>
			<?php endforeach; ?>
		</div><!-- status wrap -->



	</div><!-- entry-content -->
</div><!-- page-content -->

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>