<?php
$page_view = View::make('admin.options');

$sections[] = Section::make('primary', 'Primary');

$page = Page::make('options', 'Theme options', null, $page_view)->set([
    'capability' => 'manage_options',
    'icon'       => 'dashicons-admin-site',
    'position'   => 20,
    'tabs'       => true,
    'menu'       => __("Options")
]);

$settings['primary'] = [
  Field::text('email_address')
];

$page->addSections($sections);
$page->addSettings($settings);