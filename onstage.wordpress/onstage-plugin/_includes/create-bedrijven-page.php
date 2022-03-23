<?php


// Bron: https://developer.wordpress.org/plugins/post-types/registering-custom-post-types/
function onstage_custom_post_type_company() {
  register_post_type(CUSTOM_POST_TYPE_COMPANY,
      array(
          'labels'      => array(
              'name'          => __('Bedrijven', 'textdomain'),
              'singular_name' => __('Bedrijf', 'textdomain'),
          ),
          'public'      => false,
          'has_archive' => true,
          'showui'      => false,
          'show_in_menu'=> false,
          'show_in_rest'=> true,
          'rewrite'     => array('slug' => 'stages'),
          'supports'    => array('title', 'editor', 'author', 'thumbnail')
      )
  );
}
add_action('init', 'onstage_custom_post_type_company');

// Bron: https://njengah.com/create-wordpress-page-programmatically/
$postId = wp_insert_post( $wordpress_page, [
    'post_title'    => 'Page title',
    'post_content'  => 'Page Content',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type' => 'onstage_company'  
  ]
);

$thumbnail_id = {your image id from media library};
set_post_thumbnail( $postId, $thumbnail_id);