<?php

function decodemtl_polylang_slugs($post) {
    $language       = $GLOBALS['polylang']->model->get_post_language($post->ID);
    $current        = $language->slug;
    $currentSlug    = $post->post_name;
    $oppositeSlug   = '';
    $opposite       = ('en' === $current) ? 'fr' : 'en';
    $oppositePostId = pll_get_post($post->ID, $opposite);
    if ($oppositePostId) {
        $oppositePost = get_post($oppositePostId);
        $oppositeSlug = $oppositePost->post_name;
    }
    return array(
        'slug_' . $current  => $currentSlug,
        'slug_' . $opposite => $oppositeSlug
    );
}

function decodemtl_sanitize_common($data, $post, $context) {
    $links      = decodemtl_polylang_slugs($post);
    $data->data = array_merge($data->data, $links);
    return $data;
}

add_filter('rest_prepare_course', 'decodemtl_sanitize_common', 12, 3);
add_filter('rest_prepare_event', 'decodemtl_sanitize_common', 12, 3);
add_filter('rest_prepare_post', 'decodemtl_sanitize_common', 12, 3);
add_filter('rest_prepare_page', 'decodemtl_sanitize_common', 12, 3);

?>