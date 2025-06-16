<?php
/**
 * Contact Form Options Page Fields
 */

if (function_exists('acf_add_local_field_group')):

    acf_add_local_field_group(array(
        'key' => 'group_contact_options',
        'title' => 'Contact Information',
        'fields' => array(
            array(
                'key' => 'field_contact_info_title',
                'label' => 'Contact Info Title',
                'name' => 'contact_info_title',
                'type' => 'text',
                'default_value' => 'Get in Touch',
            ),
            array(
                'key' => 'field_contact_email',
                'label' => 'Email Address',
                'name' => 'contact_email',
                'type' => 'email',
                'default_value' => 'hello@creative.com',
            ),
            array(
                'key' => 'field_contact_phone',
                'label' => 'Phone Number',
                'name' => 'contact_phone',
                'type' => 'text',
                'default_value' => '+1 (234) 567-890',
            ),
            array(
                'key' => 'field_contact_location',
                'label' => 'Location',
                'name' => 'contact_location',
                'type' => 'text',
                'default_value' => 'New York, NY',
            ),
            array(
                'key' => 'field_contact_availability',
                'label' => 'Availability',
                'name' => 'contact_availability',
                'type' => 'text',
                'default_value' => 'Available worldwide',
            ),
            array(
                'key' => 'field_social_title',
                'label' => 'Social Media Title',
                'name' => 'social_title',
                'type' => 'text',
                'default_value' => 'Follow My Work',
            ),
            array(
                'key' => 'field_social_links',
                'label' => 'Social Media Links',
                'name' => 'social_links',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => array(
                    array(
                        'key' => 'field_social_platform',
                        'label' => 'Platform',
                        'name' => 'platform',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_social_url',
                        'label' => 'URL',
                        'name' => 'url',
                        'type' => 'url',
                    ),
                ),
            ),
            array(
                'key' => 'field_response_title',
                'label' => 'Response Time Title',
                'name' => 'response_title',
                'type' => 'text',
                'default_value' => 'Response Time',
            ),
            array(
                'key' => 'field_response_text',
                'label' => 'Response Time Text',
                'name' => 'response_text',
                'type' => 'textarea',
                'default_value' => 'I typically respond to all inquiries within 24 hours. For urgent projects, feel free to mention it in your message.',
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
    ));

endif; 