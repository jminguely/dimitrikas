<?php

Asset::add('base.css', 'build/css/base.css', false, '1.0', 'all');
Asset::add('vendors.min.js', 'build/js/vendors.min.js', false, '1.0', 'all');
Asset::add('app.bundle.js', 'build/js/app.bundle.js', false, '1.0', 'all');

View::share([
  'templateUri'  => themosis_theme_assets()
]);