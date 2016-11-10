<?php
/*
*  gwtb_create_cpts
*
*  Creates the Custom Post Types from the CPT addon
*
*  @type    function
*  @date    11/09/16
*  @since   0.0.00
*
*  @param   N/A
*  @return  N/A
*/
add_action( 'init', 'gwtb_create_cpts' );
function gwtb_create_cpts(){

  $cpts = get_option('gwtb-cpt');
  foreach($cpts as $cpt){
  function gwtb_supports($var, $feature){
    if($var == true){
     return $feature;
    } else{
      return '';
    }
  }
    $title_cpt = gwtb_supports($cpt['title'], 'title');
    $editor_cpt = gwtb_supports($cpt['editor'], 'editor');
    $author_cpt = gwtb_supports($cpt['author'], 'author');
    $thumbnail_cpt = gwtb_supports($cpt['thumbnail'], 'thumbnail');
    $excerpt_cpt = gwtb_supports($cpt['excerpt'], 'excerpt');
    $comments_cpt = gwtb_supports($cpt['comments'], 'comments');
    $page_attributes_cpt = gwtb_supports($cpt['page-attributes'], 'page-attributes');
    if($cpt['slug'] !== 'new-cpt'){
      if($cpt['public'] == true){
        $public = true;
      }
      if($cpt['archive'] == true){
        $archive = true;
      }
      if($cpt['hierarchical'] == true){
        $hierarchical = true;
      }

      $labels = array(
        'name'               => ( $cpt['slug'] ),
        'singular_name'      => ( $cpt['single'] ),
        'menu_name'          => ( $cpt['plural'] ),
      );

      $args = array(
        'labels'             => $labels,
        'public'             => $public,
        'rewrite'            => array( 'slug' => $cpt['slug'] ),
        'has_archive'        => $archive,
        'hierarchical'       => $hierarchical,
        'menu_icon'          => $cpt['icon'],
       'supports'           => array( $title_cpt, $editor_cpt, $author_cpt, $thumbnail_cpt, $excerpt_cpt, $comments_cpt, $page_attributes_cpt )
      );

      register_post_type( $cpt['slug'], $args );  
    }
  }
}