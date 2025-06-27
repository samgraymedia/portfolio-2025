<?php

/**
 * Register Text Block Fields
 */
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_testimonials_block',
    'title' => 'Testimonials Block Fields',
    'fields' => array(
        array(
            'key' => 'field_testimonials_title',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text',
            'instructions' => 'Enter the testimonials title',
            'required' => 0,
            'tabs' => 'all',
            'toolbar' => 'full',
            'media_upload' => 1,
        ),
        array(
            'key' => 'field_testimonials_description',
            'label' => 'Description',
            'name' => 'description',
            'type' => 'textarea',
        ),
        array(
            'key' => 'field_testimonials_testimonials',
            'label' => 'Testimonials',
            'name' => 'testimonials',
            'type' => 'post_object',
            'post_type' => 'testimonials',
            'multiple' => 1,
        ),
        array(
            'key' => 'field_testimonials_cta_text',
            'label' => 'CTA Text',
            'name' => 'cta_text',
            'type' => 'text',
        ),
        array( 
            'key' => 'field_testimonials_cta_link',
            'label' => 'CTA Link',
            'name' => 'cta_link',
            'type' => 'url',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/testimonials',
            ),
        ),
    ),
));

endif; 