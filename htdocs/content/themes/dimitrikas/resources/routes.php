<?php

/**
 * Define your routes and which views to display
 * depending of the query.
 *
 * Based on WordPress conditional tags from the WordPress Codex
 * http://codex.wordpress.org/Conditional_Tags
 *
 */

Route::get('page', ['contact', 'uses' => 'Contact@index']);
Route::post('page', ['contact', 'uses' => 'Contact@process']);
Ajax::listen('contact-form', ['Theme\Controllers\Contact', 'ajaxProcess']);

Route::get('home', 'Blog@index');
Route::get('category', 'Blog@index');
Route::get('postTypeArchive', array('post', 'uses' => 'Blog@index'));
Route::get('singular', array('post', 'uses' => 'Blog@single'));

Route::get('page', ['temoignages', 'uses' => 'Page@temoignages']);
Route::get('page', ['references', 'uses' => 'Page@clients']);
Route::get('page', ['prestations', 'uses' => 'Page@prestations']);
Route::get('front', 'Page@front');
Route::get('page', 'Page@index');
