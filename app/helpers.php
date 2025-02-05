<?php

if (!function_exists('activeClassIfRoutes')) {
    function activeClassIfRoutes($routes, $output = 'active', $fallback = '')
    {
        if (in_array(Route::currentRouteName(), $routes)) {
            return $output;
        } else {
            return $fallback;
        }
    }
}
