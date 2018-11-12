<?php

add_action( 'nav_menu_css_class', 'menu_item_classes', 10, 3 );

function menu_item_classes( $classes, $item, $args ) {
    // Keep only relevant classes
    $classes = array_intersect( $classes, array( 
                               'menu-item', 
                               'current-menu-item') );

    // Highlight the good archive link if it shows the archive or the single post
    if ( (is_singular( 'post' ) || is_archive( 'post' )) && get_post_type_archive_link( 'post' ) == $item->url ) {
        $classes[] = 'current-menu-ancestor';
    }
    return $classes;
}