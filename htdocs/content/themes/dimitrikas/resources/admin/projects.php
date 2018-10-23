<?php

// Define my projects custom post type
$projects = PostType::make('projects', 'Projects', 'Project')->set(array(
    'public'                => true,
    'show_ui'               => true,
    'publicly_queryable'    => true,
    'supports'              => array('title'),
    'has_archive'           => false
));

Metabox::make('Testimonials', 'projects')->set([
  Field::text('client'),
  Field::media('picture'),
  Field::textarea('summary'),
  Field::editor('benefits', ['title' => 'Bénéfices']),
  Field::infinite('paragraph', [
    Field::text('title', ['title' => 'Titre']),
    Field::textarea('content', ['title' => 'Texte']),
    Field::media('picture', ['title' => 'Vignette'])
  ])
]);

// Modify admin table columns
// in order to display the author name.
add_filter('manage_edit-'.$projects->get('name').'_columns', function($titles)
{
    $titles['author'] = __('Author');
    return $titles;
});