<?php
if (!function_exists('remove_post_type_in_sitemap_xml')) {
    function remove_post_type_in_sitemap_xml($post_type)
    {
        unset($post_type['question']); // remove sitemap with post_type not working
        unset($post_type['why']); // remove sitemap with post_type not working
        unset($post_type['working']); // remove sitemap with post_type not working
        return $post_type;
    }
    add_filter('wp_sitemaps_post_types', 'remove_post_type_in_sitemap_xml');
}

if (!function_exists('remove_user_in_sitemap_xml')) {
    function remove_user_in_sitemap_xml($provider, $name)
    {
        return ($name == 'users') ? false : $provider;
    }
    add_filter('wp_sitemaps_add_provider', 'remove_user_in_sitemap_xml', 10, 2); // remove sitemap with user
}
