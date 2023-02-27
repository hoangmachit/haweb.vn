<?php
$categories_args = array(
    'orderby'       => 'term_id',
    'order'         => 'ASC',
    'hide_empty'    => false,
);
// get categories
$infomations_tax = get_terms('infomations_tax', $categories_args);
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$query = new WP_Query(array(
    'post_type' => 'infomations',
    'posts_per_page' => 16,
    'paged' => $paged
));
_reset();
// get new post infomations
$post_new = new WP_Query(array(
    'post_type' => 'infomations',
    'posts_per_page' => 8,
    'orderby' => 'ID',
    'order' => 'DESC'
));
_reset();

