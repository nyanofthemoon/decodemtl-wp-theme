<?php

error_reporting(0);

define('DECODEMTL_PLUGIN_DIR', 'plugins');

/* Load Advanced Custom Field Plugin */
add_filter('/acf/settings/path', 'decodemtl_acf_settings_path');
function decodemtl_acf_settings_path($path) {
    return get_stylesheet_directory() . '/' . DECODEMTL_PLUGIN_DIR . '/acf/';
}

add_filter('acf/settings/dir', 'decodemtl_acf_settings_dir');
function decodemtl_acf_settings_dir($dir) {
    return get_stylesheet_directory_uri() . '/' . DECODEMTL_PLUGIN_DIR . '/acf/';
}

add_filter('acf/settings/show_admin', '__return_true');
include_once(get_stylesheet_directory() . '/' . DECODEMTL_PLUGIN_DIR . '/acf/acf.php');

add_filter('acf/settings/show_admin', '__return_false');

/* Register Custom Fields and Custom Types */
require_once get_template_directory() . '/models/acf-fields.php';
require_once get_template_directory() . '/models/custom-types.php';

/* Integrate Polylang With REST API */
function polylang_json_api_init() {
    global $polylang;

    $default   = pll_default_language();
    $languages = pll_languages_list();
    $language  = $default;
    if (isset($_GET['lang'])) {
        $language = $_GET['lang'];
    }

    if (!in_array($language, $languages)) {
        $language = $default;
    }

    $polylang->curlang = $polylang->model->get_language($language);
    $GLOBALS['text_direction'] = $polylang->curlang->is_rtl ? 'rtl' : 'ltr';
    $GLOBALS['polylang']       = $polylang;
}
add_action('rest_api_init', 'polylang_json_api_init', 10);

/* Add translated slugs to polylang entities */
require_once get_template_directory() . '/helpers/translate.php';

/* Remove Unwanted Default Routes */
add_filter('rest_endpoints', function($endpoints) {
    foreach($endpoints as $endpoint => $args) {
        if (isset($args['namespace']) && in_array($args['namespace'], array('wp/v2'))) {
            $parsed_route = explode('/', $endpoint);
            if (count(array_intersect(array('users', 'media', 'option'), $parsed_route)) > 0 || $parsed_route == '') {
                unset($endpoints[$endpoint]);
            }
        }
    }
    return $endpoints;
});