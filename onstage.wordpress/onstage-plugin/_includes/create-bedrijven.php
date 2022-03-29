<?php
// if (!is_admin()) {
  require_once(ABSPATH . 'wp-admin/includes/post.php');
// }
require "OnstageAddress.php"; 
require "OnstageCompany.php"; 

define('CUSTOM_POST_TYPE_COMPANY', 'onstage_company');

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
          'rewrite'     => array('slug' => 'bedrijven'),
          'supports'    => array('title', 'editor', 'author', 'thumbnail')
      )
  );
}
add_action('init', 'onstage_custom_post_type_company');

// Bronnen: 
// - https://njengah.com/create-wordpress-page-programmatically/
// - https://stackoverflow.com/questions/55095790/how-to-prevent-duplicate-posts-with-wp-insert-post
function insertCompany(String $postTitle, $postContent, OnstageAddress $bezoekadres = null, OnstageAddress $postadres = null) {
  error_log("insertCompany: " . $postTitle);
  if (!post_exists($postTitle, '', '', CUSTOM_POST_TYPE_COMPANY)) {
    error_log("inserting company with title '$postTitle'");
    $insertedPostId = wp_insert_post([
      'post_title'    => $postTitle,
      'post_content'  => $postContent,
      'post_status'   => 'publish',
      'post_author'   => 1,
      'post_type' => CUSTOM_POST_TYPE_COMPANY  
    ]);
    error_log("insertCompany - $insertedPostId: " . $insertedPostId);

    // Voeg custom fields toe voor adressen in contactgegevens 
    if ($bezoekadres && $insertedPostId) {

      // Bron: https://developer.wordpress.org/reference/functions/add_post_meta/
      add_post_meta(
        $insertedPostId, 
        'bezoekadres',
        [
          'addressline1' => $bezoekadres->getAddressline1(),
          'addressline2' => $bezoekadres->getAddressline2()
        ],
        true);
    }
    if ($bezoekadres && $insertedPostId) {

      add_post_meta(
        $insertedPostId,
        'postadres',
        [ 
          'addressline1' => $postadres->getAddressline1(),
          'addressline2' => $postadres->getAddressline2()
        ],
        true);
    }
    error_log("icompany with title '$postTitle' already exists");
  }
}

function deleteCompanyByTitle($title) {
  $page = get_page_by_title($title, OBJECT, 'link');
  if ($page!=null) {
    error_log("Deleting post with id '$page->ID' and title '$title' ");
    wp_delete_post($page->ID);
  }
  error_log("No post found with title '$title'.");
}

function add_companies() {

  $mailingAddress = New OnstageAddress('Magistratenlaan 116', '5223 MB \'s-Hertogenbosch');
  $residentialAddress = New OnstageAddress('Magistratenlaan 116', '5223 MB \'s-Hertogenbosch');
  
  $lianderDescription = 'Netbeheerder Liander beheert het gas- en elektriciteitsnetwerk in de provincies Gelderland en Noord-Holland en gedeeltelijk van de provincies Flevoland, Friesland en Zuid-Holland.\r\n\r\nHet bedrijf is al 100 jaar actief. De naam Liander is afgeleid van het Franse woord liaison. Liaison betekent verbinding. Liander heeft als missie om iedereen van betrouwbare, betaalbare en duurzaame energie te voorzien. Daarnaast is voor Liander onnoveren een maatschappelijke verantwoordelijkheid. Zo zorgt het bedrijf er onder andere voor dat hun netten voorbereid zijn op de nieuwste ontwikkelingen.';

  deleteCompanyByTitle('Company title');
  deleteCompanyByTitle('Liander');

  insertCompany('Company title', 'Company description');
  insertCompany('Liander', $lianderDescription, $residentialAddress, $mailingAddress);

  // $thumbnail_id = {your image id from media library};
  // set_post_thumbnail( $postId, $thumbnail_id);

  // wp_insert_term(
  //   'Apple', // the term 
  //   'product', // the taxonomy
  //   array(
  //     'description'=> 'A yummy apple.',
  //     'slug' => 'apple',
  //     'parent'=> $parent_term['term_id']  // get numeric term id
  //   )
  // );
}

add_action('init', 'add_companies');
