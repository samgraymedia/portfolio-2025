<?php
/**
 * Template Name: Portfolio Page
 * Description: A page template that displays portfolio items
 *
 * @package Portfolio
 */

$context = Timber::context();
$context['title'] = get_the_title();
$context['page'] = new Timber\Post();
$context['posts'] = new Timber\PostQuery();

// Get all portfolio items
$args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC'
);
$context['portfolio'] = new Timber\PostQuery($args);

Timber::render('archive-portfolio.twig', $context); 
