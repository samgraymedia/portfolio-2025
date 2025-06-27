<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_featured_post',
    'title' => 'Featured Post',
    'fields' => array(
        array(
            'key' => 'field_is_featured',
            'label' => 'Featured Post',
            'name' => 'is_featured',
            'type' => 'true_false',
            'instructions' => 'Tick to make this the featured post. Only one can be featured at a time.',
            'default_value' => 0,
            'ui' => 1
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'post',
            ),
        ),
    ),
));

endif;
