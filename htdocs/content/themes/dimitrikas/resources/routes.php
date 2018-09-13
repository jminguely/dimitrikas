<?php

/**
 * Define your routes and which views to display
 * depending of the query.
 *
 * Based on WordPress conditional tags from the WordPress Codex
 * http://codex.wordpress.org/Conditional_Tags
 *
 */

Route::match(['GET', 'POST'], 'home', function ($post, $query) {
    $posts = $query->get_posts();
    return view('home', ['name' => 'Julien', 'items' => $posts]);
});
