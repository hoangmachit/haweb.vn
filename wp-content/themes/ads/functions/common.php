<?php
if (!function_exists('ASSETS')) {
    function ASSETS($string)
    {
        return get_template_directory_uri() . $string;
    }
}
