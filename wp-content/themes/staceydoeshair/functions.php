<?php

function stacey_dh_files() {


  /* To load JS or script files. */
  wp_enqueue_script('animations', get_theme_file_uri('/assets/scripts/animations.js'), NULL, '1.0', true);
  wp_enqueue_script('nav_menu', get_theme_file_uri('/assets/scripts/nav_menu.js'), NULL, '1.0', true);


  /* To load css files. */
  wp_enqueue_style('wp_index_styles', get_stylesheet_uri());

  wp_enqueue_style(
    'index', get_template_directory_uri() . '/assets/css/index.css',  array(), '1.0.0', 'all'
  );

  wp_enqueue_style(
    'navbar', get_template_directory_uri() . '/assets/css/navbar.css',  array(), '1.0.0', 'all'
  );

  wp_enqueue_style(
    'footer', get_template_directory_uri() . '/assets/css/footer.css',  array(), '1.0.0', 'all'
  );

  wp_enqueue_style(
    'two_col_flex', get_template_directory_uri() . '/assets/css/two_col_flex.css',  array(), '1.0.0', 'all'
  );

  wp_enqueue_style(
    'price_list', get_template_directory_uri() . '/assets/css/price_list.css',  array(), '1.0.0', 'all'
  );

  wp_enqueue_style(
    'contact', get_template_directory_uri() . '/assets/css/contact.css',  array(), '1.0.0', 'all'
  );

}

add_action(
  'wp_enqueue_scripts',
  'stacey_dh_files'
);


/*
The 'add_linebreak_shortcode' Function replaces the <br> that WORDPRESS removes.
Add [br] where <br> would go in the text editor throught the WORDPRESS admin. 
*/

function add_linebreak_shortcode() {
  return '<br />';
}

add_shortcode('br', 'add_linebreak_shortcode' );

?>
