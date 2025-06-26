<?php

/**
 * Register Services Block Fields
 */
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_services_block',
    'title' => 'Services Block Fields',
    'fields' => array(
        array(
            'key' => 'field_services_title',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text',
            'instructions' => 'Enter the title',
            'required' => 0,
            'tabs' => 'all',
            'toolbar' => 'full',
            'media_upload' => 1,
        ),
        array(
            'key' => 'field_services_colour_title',
            'label' => 'Colour Title',
            'name' => 'colour_title',
            'type' => 'text',
            'instructions' => 'Enter the colour title',
        ),
        array(
            'key' => 'field_services_description',
            'label' => 'Description',
            'name' => 'description',
            'type' => 'text',
            'instructions' => 'Enter the description',
        ),
        array(
            'key' => 'field_services_services',
            'label' => 'Services',
            'name' => 'services',
            'type' => 'post_object',
            'instructions' => 'Select the services',
            'post_type' => 'services',
            'multiple' => 1,
        ),
        array(
            'key' => 'field_services_button_text',
            'label' => 'Button Text',
            'name' => 'button_text',
            'type' => 'text',
            'instructions' => 'Enter the button text',
        ),
        array(
            'key' => 'field_services_button_url',
            'label' => 'Button URL',
            'name' => 'button_url',
            'type' => 'url',
            'instructions' => 'Enter the button URL',
        ),

    ),
    'location' => array(
        array(
            array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/services',
            ),
        ),
    ),
));

endif; 