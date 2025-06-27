	<?php

/**
 * Register Contact Form Block Fields
 */
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group( array(
	'key' => 'group_684f425a594f8',
	'title' => 'Block - Contact Form',
	'fields' => array(
		array(
			'key' => 'field_684f425a92631',
			'label' => 'Full Screen',
			'name' => 'full_screen',
			'aria-label' => '',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'allow_in_bindings' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/contact-form',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );

endif; 