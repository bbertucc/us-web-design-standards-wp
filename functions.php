<?php

//Enqueue USWDS Theme Assets
function uswds_assets() {
  wp_enqueue_style('uswds-css', get_template_directory_uri() . '/assets/css/main.css');
  wp_enqueue_style('uswds-fonts', get_template_directory_uri() . '/assets/css/google-fonts.css');
  wp_enqueue_script('jquery');
  wp_enqueue_script('html5shiv', get_template_directory_uri() . '/assets/js/html5shiv.js', '', '3.7.1');
  wp_enqueue_script('rem', get_template_directory_uri() . '/assets/js/rem.min.js', '', '1.3.2');
  wp_enqueue_script('respond', get_template_directory_uri() . '/assets/js/rem.min.js', '', '1.4.0');
  wp_enqueue_script('selectivizr', get_template_directory_uri() . '/assets/js/selectivizr.min.js', '', '1.0.3b');
  wp_enqueue_script('uswds-components', get_template_directory_uri() . '/assets/js/components.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'uswds_assets');

?>