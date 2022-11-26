<?php
// get detail taxonomy
$term = get_queried_object();
// get all taxonomy
$categories_args = array(
    'orderby'       => 'term_id',
    'order'         => 'ASC',
    'hide_empty'    => false,
);
$infomations_tax = get_terms('infomations_tax', $categories_args);
// get all the post with taxonomy
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$the_post = new WP_Query(array(
    'post_type' => 'infomations',
    'posts_per_page' => 16,
    'paged' => $paged,
    'tax_query' => array(
        array(
            'taxonomy' => 'infomations_tax',
            'field' => 'slug',
            'terms' => $term->slug,
        ),
    ),
));
_reset();
