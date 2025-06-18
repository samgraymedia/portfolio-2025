<?php

/**
 * Register Text Block Fields
 */
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_tabs_block',
    'title' => 'Tabs Block Fields',
    'fields' => array(
        array(
            'key' => 'field_tabs_title',
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
            'key' => 'field_tabs_colour_title',
            'label' => 'Colour Title',
            'name' => 'colour_title',
            'type' => 'text',
            'instructions' => 'Enter the colour title',
        ),
        array(
            'key' => 'field_tabs_description',
            'label' => 'Description',
            'name' => 'description',
            'type' => 'textarea',
        ),
        array(
            'key' => 'field_tabs_tabs',
            'label' => 'Tabs',
            'name' => 'tabs',
            'type' => 'repeater',
            'sub_fields' => array(
                array(
                    'key' => 'field_tabs_tab_control',
                    'label' => 'Control',
                    'name' => 'control',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_tabs_tab_title',
                    'label' => 'Title',
                    'name' => 'title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_tabs_tab_description',
                    'label' => 'Description',
                    'name' => 'description',
                    'type' => 'textarea',
                ),
                array(
                    'key' => 'field_tabs_tab_items',
                    'label' => 'Items',
                    'name' => 'items',
                    'type' => 'repeater',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_tabs_tab_item_title',
                            'label' => 'Title',
                            'name' => 'title',
                            'type' => 'text',
                        ),
                    ),
                ),
                array(
            'key' => 'field_tabs_cta_text',
            'label' => 'CTA Text',
            'name' => 'cta_text',
            'type' => 'text',
        ),
        array(
            'key' => 'field_tabs_cta_link',
            'label' => 'CTA Link',
            'name' => 'cta_link',
            'type' => 'url',
        ),
        array(
            'key' => 'field_tabs_image',
            'label' => 'Image',
            'name' => 'image',
            'type' => 'image',
        ),

            ),
        ),
      
    ),
    'location' => array(
        array(
            array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/tabs',
            ),
        ),
    ),
));

endif; 