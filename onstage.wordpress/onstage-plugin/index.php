<?php
/*
  Plugin Name: OnStage WordPress
  Plugin URI: http://wordpress.org/plugins/hello-wordpress/
  Description: OnStage plugin voor tonen en beheren van eigen afstudeeropdrachten op je eigen Wordpress site en evt connectie/synchronisatie naar het centrale Afstudeerplatform OnStage
  Author: HAN Academie voor ICT en Media en Alliander.
  Version: 0.0.1
  Author URI: http://github.com/bartvanderwal
*/

// Bron: https://developer.wordpress.org/plugins/post-types/registering-custom-post-types/
function onstage_custom_post_type() {
  register_post_type('onstage_stage',
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
  register_post_type('onstage_open_cv',
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
