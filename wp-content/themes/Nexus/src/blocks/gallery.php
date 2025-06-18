<?php

/**
 * Register Gallery Block Fields
 */
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_gallery_block',
    'title' => 'Gallery Block Fields',
    'fields' => array(
        array(
            'key' => 'field_gallery_title',
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
            'key' => 'field_gallery_colour_title',
            'label' => 'Colour Title',
            'name' => 'colour_title',
            'type' => 'text',
        ),
        array(
            'key' => 'field_gallery_description',
            'label' => 'Description',
            'name' => 'description',
            'type' => 'textarea',
        ),
        array(  
            'key' => 'field_gallery_images',
            'label' => 'Images',
            'name' => 'images',
            'type' => 'gallery',
            'instructions' => 'Select the images for the gallery',
            'required' => 0,
            'tabs' => 'all',
            'toolbar' => 'full',
            'media_upload' => 1,
        ),
    
        array(
            'key' => 'field_gallery_image_title',
            'label' => 'Image Title',
            'name' => 'image_title',
            'type' => 'text',
        ),
        array(
            'key' => 'field_gallery_image_description',
            'label' => 'Image Description',
            'name' => 'image_description',
            'type' => 'textarea',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/gallery',
            ),
        ),
    ),
));

endif; 