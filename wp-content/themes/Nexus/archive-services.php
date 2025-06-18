<?php
/**
 * Template Name: Services Page
 * Description: A page template that displays services items
 *
 * @package Portfolio
 */

$context = Timber::context();
$context['title'] = get_the_title();
$context['page'] = new Timber\Post();
$context['posts'] = new Timber\PostQuery();

// Get all portfolio items
$args = array(
    'post_type' => 'service',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC'
);
$context['services'] = new Timber\PostQuery($args);

Timber::render('archive-services.twig', $context); 
