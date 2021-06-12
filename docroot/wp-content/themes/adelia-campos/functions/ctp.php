<?php
add_action('init', 'create_posttype' );
function create_posttype(){
  // cria os post_type necessário
  register_post_type('Equipe',
    array(
      'labels' => array(
        'name' => __( 'Equipe', 'Microcity' ),
        'singular_name' => __( 'Equipe', 'Microcity' )
      ),
      'show_in_rest' => true,
      'public' => true,
      'hierarchical' => true,
      'has_archive' => 'equipe',
      'menu_position' => 5,
      'rewrite' => array('slug' => 'equipe'),
      'supports' => array(
        'title',
        'editor',
        'page-attributes',
        'thumbnail'
      )
    )
  );

//  register_taxonomy(
//    'categoria-faq',
//    'faq',
//    array(
//      'label' => __( 'Categorias faq', 'Microcity' ),
//      'rewrite' => array( 'slug' => 'categoria-faq' ),
//      'hierarchical' => true,
//    )
//  );

  register_post_type('atuacao',
    array(
      'labels' => array(
        'name' => __( 'Área de atuação', 'Microcity' ),
        'singular_name' => __( 'Área de atuação', 'Microcity' )
      ),
      'show_in_rest' => true,
      'public' => true,
      'hierarchical' => true,
      'has_archive' => 'atuacao',
      'menu_position' => 5,
      'rewrite' => array('slug' => 'atuacao'),
      'supports' => array(
        'title',
        'editor',
        'page-attributes',
        'thumbnail'
      )
    )
  );

}
