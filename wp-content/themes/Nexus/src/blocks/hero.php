<?php

/**
 * Register Hero Block Fields
 */
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_hero_block',
    'title' => 'Hero Block Fields',
    'fields' => array(
        array(
            'key' => 'field_hero_title',
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
            'key' => 'field_hero_colour_title',
            'label' => 'Colour Title',
            'name' => 'colour_title',
            'type' => 'text',
            'instructions' => 'Enter the colour title',
        ),
        array(
            'key' => 'field_hero_description',
            'label' => 'Description',
            'name' => 'description',
            'type' => 'textarea',
        ),
        array(
            'key' => 'field_hero_button_text',
            'label' => 'Button Text',
            'name' => 'button_text',
            'type' => 'text',
        ),
        array( 
            'key' => 'field_hero_button_url',
            'label' => 'Button URL',
            'name' => 'button_url',
            'type' => 'url',
        ),
        array(
            'key' => 'field_hero_image',
            'label' => 'Image',
            'name' => 'image',
            'type' => 'image',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/hero',
            ),
        ),
    ),
));

endif; 