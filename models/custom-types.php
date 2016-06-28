<?php

/* Event */
function event_post_type() {
    $labels = array(
        'name'                  => _x('Events', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Event', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Events', 'text_domain'),
        'name_admin_bar'        => __('Event', 'text_domain'),
        'add_new_item'          => __('Add New Item', 'text_domain'),
        'new_item'              => __('New Item', 'text_domain'),
        'edit_item'             => __('Edit Item', 'text_domain'),
        'update_item'           => __('Update Item', 'text_domain'),
        'view_item'             => __('View Item', 'text_domain'),
        'search_items'          => __('Search Item', 'text_domain')
    );
    $args = array(
        'label'                 => __('Event', 'text_domain'),
        'description'           => __('Event type.', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_rest'          => true,
        'rest_base'             => 'event',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type('event', $args);
}
add_action('init', 'event_post_type', 25);

/* Course - POLYLANG */
function course_post_type() {
    $labels = array(
        'name'                  => _x('Courses', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Course', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Courses', 'text_domain'),
        'name_admin_bar'        => __('Course', 'text_domain'),
        'add_new_item'          => __('Add New Item', 'text_domain'),
        'new_item'              => __('New Item', 'text_domain'),
        'edit_item'             => __('Edit Item', 'text_domain'),
        'update_item'           => __('Update Item', 'text_domain'),
        'view_item'             => __('View Item', 'text_domain'),
        'search_items'          => __('Search Item', 'text_domain')
    );
    $args = array(
        'label'                 => __('Course', 'text_domain'),
        'description'           => __('Course type.', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'thumbnail', 'revisions'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_rest'          => true,
        'rest_base'             => 'course',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('course', $args);
}
add_action('init', 'course_post_type', 25);

/* Session */
function session_post_type() {
    $labels = array(
        'name'                  => _x('Sessions', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Session', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Sessions', 'text_domain'),
        'name_admin_bar'        => __('Session', 'text_domain'),
        'add_new_item'          => __('Add New Item', 'text_domain'),
        'new_item'              => __('New Item', 'text_domain'),
        'edit_item'             => __('Edit Item', 'text_domain'),
        'update_item'           => __('Update Item', 'text_domain'),
        'view_item'             => __('View Item', 'text_domain'),
        'search_items'          => __('Search Item', 'text_domain')
    );
    $args = array(
        'label'                 => __('Session', 'text_domain'),
        'description'           => __('Session type.', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'revisions'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_rest'          => true,
        'rest_base'             => 'session',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type('session', $args);
}
add_action('init', 'session_post_type', 25);

/* Staff - Field Restrictions */
function staff_post_type() {
    $labels = array(
        'name'                  => _x('Staffs', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Staff', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Staffs', 'text_domain'),
        'name_admin_bar'        => __('Staff', 'text_domain'),
        'add_new_item'          => __('Add New Item', 'text_domain'),
        'new_item'              => __('New Item', 'text_domain'),
        'edit_item'             => __('Edit Item', 'text_domain'),
        'update_item'           => __('Update Item', 'text_domain'),
        'view_item'             => __('View Item', 'text_domain'),
        'search_items'          => __('Search Item', 'text_domain')
    );
    $args = array(
        'label'                 => __('Staff', 'text_domain'),
        'description'           => __('Staff type.', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_rest'          => true,
        'rest_base'             => 'staff',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type('staff', $args);
}
add_action('init', 'staff_post_type', 25);

/* Student - Field Restrictions */
function student_post_type() {
    $labels = array(
        'name'                  => _x('Students', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Student', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Students', 'text_domain'),
        'name_admin_bar'        => __('Student', 'text_domain'),
        'add_new_item'          => __('Add New Item', 'text_domain'),
        'new_item'              => __('New Item', 'text_domain'),
        'edit_item'             => __('Edit Item', 'text_domain'),
        'update_item'           => __('Update Item', 'text_domain'),
        'view_item'             => __('View Item', 'text_domain'),
        'search_items'          => __('Search Item', 'text_domain')
    );
    $args = array(
        'label'                 => __('Student', 'text_domain'),
        'description'           => __('Student type.', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_rest'          => true,
        'rest_base'             => 'student',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type('student', $args);
}
add_action('init', 'student_post_type', 25);

/* Application */
function application_post_type() {
    $labels = array(
        'name'                  => _x('Applications', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Application', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Applications', 'text_domain'),
        'name_admin_bar'        => __('Application', 'text_domain'),
        'add_new_item'          => __('Add New Item', 'text_domain'),
        'new_item'              => __('New Item', 'text_domain'),
        'edit_item'             => __('Edit Item', 'text_domain'),
        'update_item'           => __('Update Item', 'text_domain'),
        'view_item'             => __('View Item', 'text_domain'),
        'search_items'          => __('Search Item', 'text_domain')
    );
    $args = array(
        'label'                 => __('Application', 'text_domain'),
        'description'           => __('Application type.', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title'),
        'hierarchical'          => false,
        'public'                => false,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_rest'          => true,
        'rest_base'             => 'application',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => false,
        'capability_type'       => 'post',
    );
    register_post_type('application', $args);
}
add_action('init', 'application_post_type', 25);

/* SessionFile - API Hidden */
function sessionfile_post_type() {
    $labels = array(
        'name'                  => _x('Session Files', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Session File', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Session Files', 'text_domain'),
        'name_admin_bar'        => __('Session File', 'text_domain'),
        'add_new_item'          => __('Add New Item', 'text_domain'),
        'new_item'              => __('New Item', 'text_domain'),
        'edit_item'             => __('Edit Item', 'text_domain'),
        'update_item'           => __('Update Item', 'text_domain'),
        'view_item'             => __('View Item', 'text_domain'),
        'search_items'          => __('Search Item', 'text_domain')
    );
    $args = array(
        'label'                 => __('Session File', 'text_domain'),
        'description'           => __('Session File type.', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'revisions'),
        'hierarchical'          => false,
        'public'                => false,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_rest'          => false,
        'rest_base'             => 'sessionfile',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => false,
        'capability_type'       => 'post',
    );
    register_post_type('sessionfile', $args);
}
add_action('init', 'sessionfile_post_type', 25);

/* Technology */
function technology_post_type() {
    $labels = array(
        'name'                  => _x('Technologies', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Technology', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Technologies', 'text_domain'),
        'name_admin_bar'        => __('Technology', 'text_domain'),
        'add_new_item'          => __('Add New Item', 'text_domain'),
        'new_item'              => __('New Item', 'text_domain'),
        'edit_item'             => __('Edit Item', 'text_domain'),
        'update_item'           => __('Update Item', 'text_domain'),
        'view_item'             => __('View Item', 'text_domain'),
        'search_items'          => __('Search Item', 'text_domain')
    );
    $args = array(
        'label'                 => __('Technology', 'text_domain'),
        'description'           => __('Technology type.', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_rest'          => true,
        'rest_base'             => 'technology',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type('technology', $args);
}
add_action('init', 'technology_post_type', 25);

?>