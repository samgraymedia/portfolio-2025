<?php

/**
 * Register Large CTA Block Fields
 */
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_large_cta_block',
    'title' => 'Large CTA Block Fields',
    'fields' => array(
        array(
            'key' => 'field_large_cta_title',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text',
            'instructions' => 'Enter the title',
            'required' => 0,
        ),
        array(
            'key' => 'field_large_cta_colour_title',
            'label' => 'Colour Title',
            'name' => 'colour_title',
            'type' => 'text',
            'instructions' => 'Enter the colour title',
        ),
        array(
            'key' => 'field_large_cta_description',
            'label' => 'Description',
            'name' => 'description',
            'type' => 'textarea',
            'instructions' => 'Enter the description',
        ),
        array(
            'key' => 'field_large_cta_buttons',
            'label' => 'Buttons',
            'name' => 'buttons',
            'type' => 'repeater',
            'instructions' => 'Enter the buttons',
            'sub_fields' => array(
                array(
                    'key' => 'field_large_cta_button_text',
                    'label' => 'Button Text',
                    'name' => 'button_text',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_large_cta_button_url',
                    'label' => 'Button URL',
                    'name' => 'button_url',
                    'type' => 'url',
                ),
                array(
                    'key' => 'field_large_cta_button_style',
                    'label' => 'Button Style',
                    'name' => 'button_style',
                    'type' => 'select',
                    'instructions' => 'Select the style of the button',
                    'choices' => array(
                        'primary' => 'Primary',
                        'secondary' => 'Secondary',
                        'glass' => 'Glass',
                    ),
                ),
            ),
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/large-cta',
            ),
        ),
    ),
));

endif;
