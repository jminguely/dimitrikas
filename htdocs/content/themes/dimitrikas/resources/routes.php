<?php

/**
 * Define your routes and which views to display
 * depending of the query.
 *
 * Based on WordPress conditional tags from the WordPress Codex
 * http://codex.wordpress.org/Conditional_Tags
 *
 */

Route::get('contact', 'Contact@index');
Route::post('contact', 'Contact@process');
Ajax::listen('contact-form', ['Theme\Controllers\Contact', 'ajaxProcess']);

Route::get('home', 'Blog@index');
Route::get('category', 'Blog@index');
Route::get('postTypeArchive', array('post', 'uses' => 'Blog@index'));
Route::get('singular', array('post', 'uses' => 'Blog@single'));


Route::get('front', function () {
    return view('front', ['name' => 'accueil']);
});
