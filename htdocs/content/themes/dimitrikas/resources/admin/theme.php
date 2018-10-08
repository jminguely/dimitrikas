<?php

/**
 * Remove the admin bar top bump
 */

function my_admin_bar_init() {
  remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('admin_bar_init', 'my_admin_bar_init');