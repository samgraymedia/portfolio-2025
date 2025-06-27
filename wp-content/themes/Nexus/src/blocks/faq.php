<?php

/**
 * Register FAQ Block Fields
 */
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_faq_block',
    'title' => 'FAQ Block Fields',
    'fields' => array(
        array(
            'key' => 'field_faq_title',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text',
            'instructions' => 'Enter the FAQ section title',
            'required' => 0,
        ),
        array(
            'key' => 'field_faq_colour_title',
            'label' => 'Colour Title',
            'name' => 'colour_title',
            'type' => 'text',
            'instructions' => 'Enter the colour title',
            'required' => 0,
        ),
        array(
            'key' => 'field_faq_description',
            'label' => 'Description',
            'name' => 'description',
            'type' => 'textarea',
            'instructions' => 'Enter a short description for the FAQ section',
            'required' => 0,
        ),
        array(
            'key' => 'field_faq_faqs',
            'label' => 'FAQs',
            'name' => 'faqs',
            'type' => 'repeater',
            'instructions' => 'Add FAQ items',
            'required' => 0,
            'sub_fields' => array(
                array(
                    'key' => 'field_faq_question',
                    'label' => 'Question',
                    'name' => 'question',
                    'type' => 'text',
                    'instructions' => 'Enter the question',
                    'required' => 1,
                ),
                array(
                    'key' => 'field_faq_answer',
                    'label' => 'Answer',
                    'name' => 'answer',
                    'type' => 'textarea',
                    'instructions' => 'Enter the answer',
                    'required' => 1,
                ),
            ),
            'min' => 0,
            'layout' => 'row',
            'button_label' => 'Add FAQ',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/faq',
            ),
        ),
    ),
));

endif; 