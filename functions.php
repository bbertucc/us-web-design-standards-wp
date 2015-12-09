<?php

/**
 * Enqueue USWDS Theme Assets
 */
function uswds_assets() {
  wp_enqueue_style('uswds-css', get_template_directory_uri() . '/assets/css/main.css');
  wp_enqueue_style('uswds-fonts', get_template_directory_uri() . '/assets/css/google-fonts.css');
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script('sage/js', get_template_directory_uri() . '/assets/js/components.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'uswds_assets');

  
?>