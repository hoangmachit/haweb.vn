<?php
if (!function_exists('dd')) {
    function dd($args)
    {
        echo "<pre>";
        var_dump($args);
        exit();
        echo "<pre>";
    }
}
if (!function_exists('ASSETS')) {
    function ASSETS($string)
    {
        return get_template_directory_uri() . $string;
    }
}

if (!function_exists('_echo')) {
    function _echo($string = "")
    {
        echo $string;
    }
}


if (!function_exists('resetQuery')) {
    function resetQuery()
    {
        wp_reset_query();
    }
}
