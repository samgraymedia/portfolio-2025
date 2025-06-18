<?php

/**
 * Register Feature Overview Block Fields
 */
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_feature_overview_block',
    'title' => 'Feature Overview Block Fields',
    'fields' => array(
        array(
            'key' => 'field_feature_overview_pill_text',
            'label' => 'Pill Text',
            'name' => 'pill_text',
            'type' => 'text',
            'instructions' => 'Enter the pill text',
        ),
        array(
            'key' => 'field_feature_overview_title',
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
            'key' => 'field_feature_overview_colour_title',
            'label' => 'Colour Title',
            'name' => 'colour_title',
            'type' => 'text',
            'instructions' => 'Enter the colour title',
        ),
        array(
            'key' => 'field_feature_overview_description',
            'label' => 'Description',
            'name' => 'description',
            'type' => 'textarea',
        ),
        array(
            'key' => 'field_feature_overview_list',
            'label' => 'List',
            'name' => 'list',
            'type' => 'repeater',
            'sub_fields' => array(
                array(
                    'key' => 'field_feature_overview_list_item_title',
                    'label' => 'List Item Title',
                    'name' => 'title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_feature_overview_list_item_text',
                    'label' => 'List Text',
                    'name' => 'text',
                    'type' => 'text',
                ),
            ),
        ),
        array(
            'key' => 'field_feature_overview_button_text',
            'label' => 'Button Text',
            'name' => 'button_text',
            'type' => 'text',
        ),

        array( 
            'key' => 'field_feature_overview_button_url',
            'label' => 'Button URL',
            'name' => 'button_url',
            'type' => 'url',
        ),
        array(
            'key' => 'field_feature_overview_image',
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
                'value' => 'acf/feature-overview-block',
            ),
        ),
    ),
));

endif; 