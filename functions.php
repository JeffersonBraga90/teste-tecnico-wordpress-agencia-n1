<?php

function testetecnicon1_css() {
  wp_register_style('testetecnicon1-style',
  get_template_directory_uri() . '/style.css', [], '1.0.0'
 );
 wp_enqueue_style('testetecnicon1-style');
}
add_action('wp_enqueue_scripts', 'testetecnicon1_css')
?>