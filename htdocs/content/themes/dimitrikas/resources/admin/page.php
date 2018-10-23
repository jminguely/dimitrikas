<?php


if (themosis_is_post(5015))
{
  Metabox::make('Testimonials', 'page')->set([
    Field::infinite('review', [
      Field::text('name'),
      Field::text('position'),
      Field::text('company'),
      Field::media('picture'),
      Field::textarea('message')
    ])
  ]);
}

if (themosis_is_post(5030))
{
  Metabox::make('Clients', 'page')->set([
    Field::infinite('client', [
      Field::media('picture')
    ])
  ]);
}

if (themosis_is_post(41))
{
  Metabox::make('Prestations', 'page')->set([
    Field::infinite('prestations', [
      Field::text('titre'),
      Field::media('picture'),
      Field::textarea('content'),
      Field::text('buttonLabel')
    ])
  ]);
}