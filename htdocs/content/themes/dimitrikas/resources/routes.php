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

Route::get('page', ['realisations/temoignages', 'uses' => 'Page@temoignages']);
Route::get('page', ['realisations/clients', 'uses' => 'Page@clients']);
Route::get('page', ['realisations/mandats', 'uses' => 'Project@index']);
Route::get('page', ['realisations', 'uses' => 'Project@index']);
Route::get('page', ['prestations', 'uses' => 'Page@prestations']);
Route::get('front', 'Page@front');
Route::get('page', 'Page@index');

Route::get('singular', ['projects', 'uses' => 'Project@single']);
