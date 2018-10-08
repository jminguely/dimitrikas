<?php
PostType::make('books', 'Books', 'Book')->set([
    'public'        => true,
    'menu_position' => 20,
    'supports'      => ['title'],
    'rewrite'       => false,
    'query_var'     => false
]);


Metabox::make('Infos', 'books')->set([
  Field::text('author'),
  Field::date('creation_date'),
  Field::infinite('review', [
    Field::text('title'),
    Field::textarea('excerpt'),
    Field::media('cover-image')
  ])
]);