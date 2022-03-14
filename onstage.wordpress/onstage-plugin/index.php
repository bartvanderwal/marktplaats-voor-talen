<?php
/*
  Plugin Name: OnStage WordPress
  Plugin URI: http://wordpress.org/plugins/hello-wordpress/
  Description: OnStage plugin voor tonen en beheren van eigen afstudeeropdrachten op je eigen Wordpress site en evt connectie/synchronisatie naar het centrale Afstudeerplatform OnStage
  Author: HAN Academie voor ICT en Media en Alliander.
  Version: 0.0.1
  Author URI: http://github.com/bartvanderwal
*/

define('CUSTOM_POST_TYPE_STAGE', 'onstage_stage');
define('CUSTOM_POST_TYPE_CV', 'onstage_open_cv');


// Bron: https://developer.wordpress.org/plugins/post-types/registering-custom-post-types/
function onstage_custom_post_type() {
  register_post_type(CUSTOM_POST_TYPE_STAGE,
      array(
          'labels'      => array(
              'name'          => __('Stages', 'textdomain'),
              'singular_name' => __('Stage', 'textdomain'),
              'menu_name'     => _x('Stages', 'textdomain'),
              'new_item'      => __('Nieuwe stage', 'textdomain'),
              'edit_item'     => __('Wijzig stage', 'textdomain'),
          ),
          'public'      => true,
          'has_archive' => true,
          'rewrite'     => array('slug' => 'stages'),
          'supports'    => array('title', 'editor', 'author', 'excerpt', 'thumbnail')
      )
  );
  register_post_type(CUSTOM_POST_TYPE_CV,
      array(
          'labels'      => array(
              'name'          => __('Open CV\'s', 'textdomain'),
              'singular_name' => __('Open CV', 'textdomain'),
              'menu_name'     => _x('CV\'s', 'textdomain'),
              'new_item'      => __('Nieuw student CV/sollicatie'),
              'edit_item'     => __('Wijzig student CV/sollicatie'),
          ),
          'public'      => true,
          'has_archive' => true,
          'rewrite'     => array('slug' => 'cv\'s' ),
          'supports'    => array('title', 'editor', 'excerpt', 'author', 'thumbnail')
      )
  );
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails', array('onstage_stage', 'onstage_open_cv'));
}
add_action('init', 'onstage_custom_post_type');

define ('EXCERPT_LENGTH_CUSTOM_POST_TYPES', 25);
// Kon geen standaard WP constante vinden voor deze 55, dus zelf maar aangemaakt, in kader geen 'magic numbers'.
define ('EXCERPT_LENGTH_DEFAULT', 55);

function custom_excerpt_length_custom_post_types() {
    global $post;

    switch ($post->post_type) {
        case CUSTOM_POST_TYPE_STAGE:
        case CUSTOM_POST_TYPE_CV:
            return EXCERPT_LENGTH_CUSTOM_POST_TYPES;
        default:
            return EXCERPT_LENGTH_DEFAULT;
    }
}

add_filter('excerpt_length', 'custom_excerpt_length_custom_post_types', EXCERPT_LENGTH_DEFAULT);

/** Bovenstaande werkt - blijkbaar - nog niet voor posts war de gebruiker een handmatige excerpt heeft ingevoerd */
// Bron: https://wordpress.stackexchange.com/questions/139953/excerpt-length-not-working#answer-398655
function custom_excerpt_length($excerpt) {
    if (has_excerpt()) {
        $excerpt = wp_trim_words(get_the_excerpt(), apply_filters("excerpt_length", EXCERPT_LENGTH_CUSTOM_POST_TYPES));
    }
    return $excerpt;
}

add_filter("the_excerpt", "custom_excerpt_length", EXCERPT_LENGTH_DEFAULT);

/**
 * En om de lelijke standaard '[...]' te vervangen door nette HTML ellipsis.
 */
function new_excerpt_more($more) {
    return '<span class="more">...</span>'; // ' &helips;';
}
add_filter('excerpt_more', 'new_excerpt_more');