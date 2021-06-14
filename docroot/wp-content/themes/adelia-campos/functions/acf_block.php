<?php
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

  // Check function exists.
  if( function_exists('acf_register_block_type') ) {

    // register a testimonial block.
    acf_register_block_type(array(
      'name'              => 'abas',
      'title'             => __('Conteúdo em abas'),
      'description'       => __('Organiza parte do conteúdo em abas clicavéis.'),
      'render_template'   => 'parts/block/block-abas.php',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array( 'abas', 'conteúdo' ),
    ));
  }
}
add_action( 'admin_enqueue_scripts', 'load_admin_style' );
function load_admin_style() {
  wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/gulp/sass/componentes/_block-abas.scss', false, '1.0.0' );
}