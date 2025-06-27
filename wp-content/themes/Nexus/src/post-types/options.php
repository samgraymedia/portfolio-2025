<?php

/**
 * Register Options Page
 */
if( function_exists('acf_add_local_field_group') ):
	acf_add_local_field_group( array(
	'key' => 'group_684f80a416955',
	'title' => 'Options',
	'fields' => array(
		array(
			'key' => 'field_contact_info_title',
			'label' => 'Contact Info Title',
			'name' => 'contact_info_title',
			'type' => 'text',
		),
		array(
			'key' => 'field_contact_email',
			'label' => 'Email Address',
			'name' => 'contact_email',
			'type' => 'text',
		),
		array(
			'key' => 'field_contact_phone',
			'label' => 'Phone Number',
			'name' => 'contact_phone',
			'type' => 'text',
		),
		array(
			'key' => 'field_contact_location',
			'label' => 'Location',
			'name' => 'contact_location',
			'type' => 'text',
		),
		array(
			'key' => 'field_contact_availability',
			'label' => 'Availability',
			'name' => 'contact_availability',
			'type' => 'text',
		),
		array(
			'key' => 'field_social_media_title',
			'label' => 'Social Media Title',
			'name' => 'social_media_title',
			'type' => 'text',
		),
		array(
			'key' => 'field_social_media_links',
			'label' => 'Social Media Links',
			'name' => 'social_media_links',
			'type' => 'repeater',
			'sub_fields' => array(
				array(
					'key' => 'field_social_media_platform',
					'label' => 'Platform',
					'name' => 'platform',
					'type' => 'text',
				),
				array(
					'key' => 'field_social_media_url',
					'label' => 'URL',
					'name' => 'url',
					'type' => 'url',
				),
			),
			'layout' => 'row',
		),
		array(
			'key' => 'field_response_time_title',
			'label' => 'Response Time Title',
			'name' => 'response_time_title',
			'type' => 'text',
		),
		array(
			'key' => 'field_response_time_text',
			'label' => 'Response Time Text',
			'name' => 'response_time_text',
			'type' => 'textarea',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options',
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