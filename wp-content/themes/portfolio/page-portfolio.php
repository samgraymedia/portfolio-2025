<?php
/**
 * Template Name: Portfolio Page
 * Description: A page template that displays portfolio items in a grid
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
$all_portfolio_items = new Timber\PostQuery($args);

// Separate items into freelance and employment
$context['freelance_items'] = array();
$context['employment_items'] = array();

foreach ($all_portfolio_items as $item) {
    $type = $item->meta('type');
    if ($type === 'freelance') {
        $context['freelance_items'][] = $item;
    } else if ($type === 'employment') {
        $context['employment_items'][] = $item;
    }
}

Timber::render('archive-portfolio.twig', $context); 
