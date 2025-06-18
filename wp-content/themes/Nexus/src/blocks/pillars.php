<?php

/**
 * Register Text Block Fields
 */
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_pillars_block',
    'title' => 'Pillars Block Fields',
    'fields' => array(
        array(
            'key' => 'field_pillars_title',
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
            'key' => 'field_pillars_colour_title',
            'label' => 'Colour Title',
            'name' => 'colour_title',
            'type' => 'text',
            'instructions' => 'Enter the colour title',
        ),
        array(
            'key' => 'field_pillars_description',
            'label' => 'Description',
            'name' => 'description',
            'type' => 'textarea',
        ),
        array(
            'key' => 'field_pillars_items',
            'label' => 'Items',
            'name' => 'items',
            'type' => 'repeater',
            'sub_fields' => array(
                array(
                    'key' => 'field_pillars_item_icon',
                    'label' => 'Icon',
                    'name' => 'icon',
                    'type' => 'image',
                ),
                array(
                    'key' => 'field_pillars_item_title',
                    'label' => 'Title',
                    'name' => 'title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_pillars_item_description',
                    'label' => 'Description',
                    'name' => 'description',
                    'type' => 'textarea',
                ),
            ),
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/pillars',
            ),
        ),
    ),
));

endif; 