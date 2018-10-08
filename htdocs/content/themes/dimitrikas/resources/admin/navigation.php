<?php 

View::share([
  'primaryMenu'  => wp_get_nav_menu_items( 'primary' )
]);