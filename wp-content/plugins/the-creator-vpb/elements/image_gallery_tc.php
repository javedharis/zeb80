<?php

/*********** Shortcode: Image Gallery ************************************************************/

$tcvpb_elements['image_gallery_tc'] = array(
	'name' => esc_html__('Image Gallery', 'the-creator-vpb' ),
	'description' => esc_html__('Image', 'the-creator-vpb' ),
	'type' =>  'block',
	'icon' => 'pi-image-gallery',
	'category' =>  esc_html__('Media', 'the-creator-vpb'),
	'attributes' => array(
		'url' => array(
			'type' => 'gallery',
			'description' => esc_html__('Select Images', 'the-creator-vpb'),
		),
		'columns' => array(
			'description' => esc_html__('Number of columns', 'the-creator-vpb'),
			'default' => 'four_columns',
			'type' => 'select',
			'values' => array(
				'two_columns' =>  esc_html__('Two Columns', 'the-creator-vpb'),
				'three_columns' =>  esc_html__('Three Columns', 'the-creator-vpb'),
				'four_columns' =>  esc_html__('Four Columns', 'the-creator-vpb'),
				'five_columns' =>  esc_html__('Five Columns', 'the-creator-vpb'),
				'six_columns' =>  esc_html__('Six Columns', 'the-creator-vpb'),
				'seven_columns' =>  esc_html__('Seven Columns', 'the-creator-vpb'),
				'eight_columns' =>  esc_html__('Eight Columns', 'the-creator-vpb'),
				'nine_columns' =>  esc_html__('Nine Columns', 'the-creator-vpb'),
			),
			'divider' => 'true',
		),
		'animation' => array(
			'default' => 'none',
			'description' => esc_html__('Entrance Animation', 'the-creator-vpb'),
			'type' => 'select',
			'values' => array(
				'flip' => esc_html__('Flip', 'the-creator-vpb'),
				'flipInX' => esc_html__('Flip In X', 'the-creator-vpb'),
				'flipInY' => esc_html__('Flip In Y', 'the-creator-vpb'),
				'fadeIn' => esc_html__('Fade In', 'the-creator-vpb'),
				'fadeInUp' => esc_html__('Fade In Up', 'the-creator-vpb'),
				'fadeInDown' => esc_html__('Fade In Down', 'the-creator-vpb'),
				'fadeInLeft' => esc_html__('Fade In Left', 'the-creator-vpb'),
				'fadeInRight' => esc_html__('Fade In Right', 'the-creator-vpb'),
				'fadeInUpBig' => esc_html__('Fade In Up Big', 'the-creator-vpb'),
				'fadeInDownBig' => esc_html__('Fade In Down Big', 'the-creator-vpb'),
				'fadeInLeftBig' => esc_html__('Fade In Left Big', 'the-creator-vpb'),
				'fadeInRightBig' => esc_html__('Fade In Right Big', 'the-creator-vpb'),
				'slideInLeft' => esc_html__('Slide In Left', 'the-creator-vpb'),
				'slideInRight' => esc_html__('Slide In Right', 'the-creator-vpb'),
				'bounceIn' => esc_html__('Bounce In', 'the-creator-vpb'),
				'bounceInDown' => esc_html__('Bounce In Down', 'the-creator-vpb'),
				'bounceInUp' => esc_html__('Bounce In Up', 'the-creator-vpb'),
				'bounceInLeft' => esc_html__('Bounce In Left', 'the-creator-vpb'),
				'bounceInRight' => esc_html__('Bounce In Right', 'the-creator-vpb'),
				'rotateIn' => esc_html__('Rotate In', 'the-creator-vpb'),
				'rotateInDownLeft' => esc_html__('Rotate In Down Left', 'the-creator-vpb'),
				'rotateInDownRight' => esc_html__('Rotate In Down Right', 'the-creator-vpb'),
				'rotateInUpLeft' => esc_html__('Rotate In Up Left', 'the-creator-vpb'),
				'rotateInUpRight' => esc_html__('Rotate In Up Right', 'the-creator-vpb'),
				'lightSpeedIn' => esc_html__('Light Speed In', 'the-creator-vpb'),
				'rollIn' => esc_html__('Roll In', 'the-creator-vpb'),
				'flash' => esc_html__('Flash', 'the-creator-vpb'),
				'bounce' => esc_html__('Bounce', 'the-creator-vpb'),
				'shake' => esc_html__('Shake', 'the-creator-vpb'),
				'tada' => esc_html__('Tada', 'the-creator-vpb'),
				'swing' => esc_html__('Swing', 'the-creator-vpb'),
				'wobble' => esc_html__('Wobble', 'the-creator-vpb'),
				'pulse' => esc_html__('Pulse', 'the-creator-vpb'),
			),
			'tab' => esc_html__('Animation', 'the-creator-vpb'),
		),
		'duration' => array(
			'description' => esc_html__('Animation Duration (in ms)', 'the-creator-vpb'),
			'default' => '1000',
			'tab' => esc_html__('Animation', 'the-creator-vpb'),
		),		
		'delay' => array(
			'description' => esc_html__('Animation Delay (in ms)', 'the-creator-vpb'),
			'default' => '0',
			'tab' => esc_html__('Animation', 'the-creator-vpb'),
		),
		'lightbox' => array(
			'description' => esc_html__( 'Lightbox', 'the-creator-vpb' ),
			'default' => '0',
			'type' => 'checkbox',
		),
		'lightbox_icon' => array(
			'description' => esc_html__( 'Lightbox Icon', 'the-creator-vpb' ),
			'info' => esc_html__('Lightbox Icon that will be shown on hover', 'the-creator-vpb'),
			'type' => 'icon',
		),			
		'id' => array(
			'description' => esc_html__('ID', 'the-creator-vpb'),
			'info' => esc_html__('Additional custom ID', 'the-creator-vpb'),
			'tab' => esc_html__('Advanced', 'the-creator-vpb'),
		),	
		'class' => array(
			'description' => esc_html__('Class', 'the-creator-vpb'),
			'info' => esc_html__('Additional custom classes for custom styling', 'the-creator-vpb'),
			'tab' => esc_html__('Advanced', 'the-creator-vpb'),
		),
	),
);
function tcvpb_image_gallery_tc_shortcode( $attributes, $content = null ) {
	extract(shortcode_atts(tcvpb_extract_attributes('image_gallery_tc'), $attributes));
	$id_out = ($id!='') ? 'id='.$id.'' : '';

	$animation = ($animation!='') ? $animation  : 'fadeIn';
	$duration = ($duration!='') ? $duration : '1000';

	$lightbox_icon = ($lightbox_icon!='') ? '<i class="'.esc_attr($lightbox_icon).'"></i>' : '';

	$lightbox_out = ( $lightbox != 0 ) ? 'lightbox' : '';
	if($lightbox == 1){
    	$lightbox_overlay = '<canvas class="grey-effect"></canvas>'.$lightbox_icon.'';
    }
              
	$return = '<div '.esc_attr($id_out).' class="tcvpb-image-gallery '.esc_attr($columns).''.esc_attr($class).'">';

		$attachments = explode(",", $url);
        foreach ( $attachments as $attachment ) {
        	$images = wp_get_attachment_url($attachment);
           	$return .= '
           		<div class="tcvpb-gallery tcvpb-animo" data-animation="'.esc_attr($animation).'" data-duration="'.esc_attr($duration).'" data-delay="'.esc_attr($delay).'">
       				<a href="'.esc_url($images).'" class="'.esc_attr($lightbox_out).'" data-lightbox="image-gallery">
						<img src="'.esc_url($images).'">
						'.$lightbox_overlay.'
					</a>
				</div>';
		}

	$return .= '</div>';
	return $return;
}