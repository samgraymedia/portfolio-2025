<?php
class Starter_Theme_Post_Types {
    public function register_post_types() {
        // Register Services post type
        register_post_type('services', array(
            'labels' => array(
                'name'               => __('Services', 'starter-theme-1.x'),
                'singular_name'      => __('Service', 'starter-theme-1.x'),
                'add_new'           => __('Add New', 'starter-theme-1.x'),
                'add_new_item'      => __('Add New Service', 'starter-theme-1.x'),
                'edit_item'         => __('Edit Service', 'starter-theme-1.x'),
                'new_item'          => __('New Service', 'starter-theme-1.x'),
                'view_item'         => __('View Service', 'starter-theme-1.x'),
                'search_items'      => __('Search Services', 'starter-theme-1.x'),
                'not_found'         => __('No services found', 'starter-theme-1.x'),
                'not_found_in_trash'=> __('No services found in Trash', 'starter-theme-1.x'),
                'parent_item_colon' => '',
                'menu_name'         => __('Services', 'starter-theme-1.x')
            ),
            'public'              => true,
            'publicly_queryable'  => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array('slug' => 'services'),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 6,
            'menu_icon'          => 'dashicons-clipboard',
            'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
            'show_in_rest'       => false, // Enable Gutenberg editor
        ));

        // Register Testimonials post type
        register_post_type('testimonials', array(
            'labels' => array(
                'name'               => __('Testimonials', 'starter-theme-1.x'),
                'singular_name'      => __('Testimonial', 'starter-theme-1.x'),
                'add_new'           => __('Add New', 'starter-theme-1.x'),
                'add_new_item'      => __('Add New Testimonial', 'starter-theme-1.x'),
                'edit_item'         => __('Edit Testimonial', 'starter-theme-1.x'),
                'new_item'          => __('New Testimonial', 'starter-theme-1.x'),
                'view_item'         => __('View Testimonial', 'starter-theme-1.x'),
                'search_items'      => __('Search Testimonials', 'starter-theme-1.x'),
                'not_found'         => __('No testimonials found', 'starter-theme-1.x'),
                'not_found_in_trash'=> __('No testimonials found in Trash', 'starter-theme-1.x'),
                'parent_item_colon' => '',
                'menu_name'         => __('Testimonials', 'starter-theme-1.x')
            ),
            'public'              => true,
            'publicly_queryable'  => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array('slug' => 'testimonials'),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 6,
            'menu_icon'          => 'dashicons-format-quote',
            'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
            'show_in_rest'       => false, // Enable Gutenberg editor
        ));
        register_post_type('portfolio', array(
            'labels' => array(
                'name' => __('Portfolio', 'starter-theme-1.x'),
                'singular_name' => __('Portfolio Item', 'starter-theme-1.x'),
                'add_new' => __('Add New', 'starter-theme-1.x'),
                'add_new_item' => __('Add New Portfolio Item', 'starter-theme-1.x'),
                'edit_item' => __('Edit Portfolio Item', 'starter-theme-1.x'),
                'new_item' => __('New Portfolio Item', 'starter-theme-1.x'),
                'view_item' => __('View Portfolio Item', 'starter-theme-1.x'),
                'search_items' => __('Search Portfolio', 'starter-theme-1.x'),
                'not_found' => __('No portfolio items found', 'starter-theme-1.x'),
                'not_found_in_trash' => __('No portfolio items found in Trash', 'starter-theme-1.x'),
                'parent_item_colon' => '',
                'menu_name' => __('Portfolio', 'starter-theme-1.x')
            ),
            'rewrite' => array('slug' => 'portfolio'),
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => 6,
            'menu_icon' => 'dashicons-portfolio',
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
        ));
    }
}

// Initialize the post types
add_action('init', function() {
    $post_types = new Starter_Theme_Post_Types();
    $post_types->register_post_types();
});

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
        'key' => 'group_services',
        'title' => 'Service Details',
        'fields' => array(
            array(
                'key' => 'field_service_description',
                'label' => 'Description',
                'name' => 'service_description',
                'type' => 'textarea',
            ),
            array(
                'key' => 'field_service_price',
                'label' => 'Price',
                'name' => 'service_price',
                'type' => 'text',
            ),
            array(
                'key' => 'field_service_features',
                'label' => 'Features',
                'name' => 'service_features',
                'type' => 'repeater',
                'sub_fields' => array(
                    array(
                        'key' => 'field_service_feature',
                        'label' => 'Feature',
                        'name' => 'service_feature',
                        'type' => 'text',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'services',
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

acf_add_local_field_group(array(
        'key' => 'group_testimonials',
        'title' => 'Testimonial Details',
        'fields' => array(
            array(
                'key' => 'field_testimonial_rating',
                'label' => 'Rating',
                'name' => 'testimonial_rating',
                'type' => 'range',
                'instructions' => 'Select the rating (1-5 stars)',
                'required' => 1,
                'min' => 1,
                'max' => 5,
                'step' => 1,
                'default_value' => 5,
            ),
            array(
                'key' => 'field_testimonial_text',
                'label' => 'Testimonial',
                'name' => 'testimonial_text',
                'type' => 'textarea',
                'instructions' => 'Enter the testimonial text',
                'required' => 1,
                'rows' => 4,
            ),
            array(
                'key' => 'field_testimonial_job_title',
                'label' => 'Job Title',
                'name' => 'testimonial_job_title',
                'type' => 'text',
                'instructions' => 'Enter the job title of the person who gave the testimonial',
                'required' => 1,
            ),
            array(
                'key' => 'field_testimonial_company',
                'label' => 'Company',
                'name' => 'testimonial_company',
                'type' => 'text',
                'instructions' => 'Enter the company name',
                'required' => 1,
            ),
            array(
                'key' => 'field_related_service',
                'label' => 'Related Service',
                'name' => 'related_service',
                'type' => 'post_object',
                'instructions' => 'Select the related service this testimonial is for.',
                'required' => 0,
                'post_type' => array('services'),
                'return_format' => 'object',
                'ui' => 1,
                'allow_null' => 1,
                'multiple' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'testimonials',
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
    add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_684f47b1a30f8',
	'title' => 'Post Type – Testimonials',
	'fields' => array(
		array(
			'key' => 'field_684f47ddc06c0',
			'label' => 'Company',
			'name' => 'company',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'allow_in_bindings' => 0,
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_684f47e6c06c1',
			'label' => 'Job Title',
			'name' => 'job_title',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'allow_in_bindings' => 0,
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_684f47f9c06c2',
			'label' => 'Testimonial',
			'name' => 'testimonial',
			'aria-label' => '',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'allow_in_bindings' => 0,
			'rows' => '',
			'placeholder' => '',
			'new_lines' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'testimonial',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );
} );

acf_add_local_field_group(array(
    'key' => 'group_portfolio',
    'title' => 'Portfolio Details',
    'fields' => array(
        array(
            'key' => 'field_project_description',
            'label' => 'Project Description',
            'name' => 'project_description',
            'type' => 'textarea',
        ),
        array(
            'key' => 'field_client_name',
            'label' => 'Client Name',
            'name' => 'client_name',
            'type' => 'text',
        ),
        array(
            'key' => 'field_project_date',
            'label' => 'Project Date',
            'name' => 'project_date',
            'type' => 'date_picker',
        ),
        array(
            'key' => 'field_project_url',
            'label' => 'Project URL',
            'name' => 'project_url',
            'type' => 'url',
        ),
        array(
            'key' => 'field_project_gallery',
            'label' => 'Gallery',
            'name' => 'project_gallery',
            'type' => 'gallery',
        ),
        array(
            'key' => 'field_technologies_used',
            'label' => 'Technologies Used',
            'name' => 'technologies_used',
            'type' => 'repeater',
            'sub_fields' => array(
                array(
                    'key' => 'field_technology',
                    'label' => 'Technology',
                    'name' => 'technology',
                    'type' => 'text',
                ),
            ),
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'portfolio',
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