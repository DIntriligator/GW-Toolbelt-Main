<?php

function gwtb_custom_css() {
  if(get_option('gwtb-css') !== '') {
    echo '<style type="text/css">/*gwtb*/'.get_option('gwtb-css').'</style>';
  }
}
add_action('wp_head', 'gwtb_custom_css');