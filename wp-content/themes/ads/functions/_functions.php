<?php
if (!function_exists('_dd')) {
    function _dd($args)
    {
        echo "<pre>";
        var_dump($args);
        exit();
        echo "<pre>";
    }
}
if (!function_exists('_assets')) {
    function _assets($string)
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


if (!function_exists('_reset')) {
    function _reset()
    {
        wp_reset_query();
    }
}
