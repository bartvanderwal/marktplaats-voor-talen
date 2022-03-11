<?php

$versionOnstage = wp_get_theme()->get('Version');

function onstage_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_theme_setup', 'onstage_theme_support');

function onstage_register_styles() {

    $versionOnstage = wp_get_theme()->get('Version');
    wp_enqueue_style('onstage-style', get_template_directory_uri() . '/style.css', array('onstage-font-awesome_style', 'onstage-bootstrap_style'), $versionOnstage);

    // TODO Evt. lokaal zetten van deze Bootstrap en Foot Awesome vendor packages via npm i.p.v. externe CDN gebruiken.
    wp_enqueue_style('onstage-bootstrap_style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3');
    wp_enqueue_style('onstage-font-awesome_style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css', array(), '6.0.0');
    wp_enqueue_style(get_template_directory_uri() . '/style.css', array(), $versionOnstage);

    // BRON: https://stackoverflow.com/questions/44827134/wordpress-script-with-integrity-and-crossorigin/47417389$#answer-50550383
    wp_style_add_data('onstage-bootstrap_style', array('integrity', 'crossorigin') , array('sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3', 'anonymous'));
}

function onstage_register_scripts() {
    wp_enqueue_script('onstage-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), '5.1.3', true);
    wp_script_add_data('onstage-bootstrap', array('integrity', 'crossorigin') , array('sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p', 'anonymous'));
}

// Gebruik `wp_enqueue_scripts` actie voor zowel javascript als CSS stylesheets.
// Bron: https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
add_action('wp_enqueue_scripts', 'onstage_register_styles');
add_action('wp_enqueue_scripts', 'onstage_register_scripts');

function onstage_add_custom_post_types($query) {
    if ( is_home() && $query->is_main_query() ) {
        $query->set( 'post_type', array('post', 'stage') );
    }
    return $query;
}

add_action('pre_get_posts', 'onstage_add_custom_post_types');

function onstage_menus() {

    $locations = array(
        'primary'  => 'Desktop Primary Left Sidebar',
        'footer'   => 'Footer Menu Items',
    );

    register_nav_menu($locations);
}

// add_action('init', 'onstage_menus');