<?php

namespace Theme\Controllers;

use Theme\Models;
use Theme\Controllers\Page;
use Themosis\Facades\View;

class Project extends Page
{
  public function index($post, $query) {
    $args = array (
      'post_type' => 'projects',
    );

    $projects = new \WP_Query($args);
    return view('project/archive', ['projects' => $projects->posts]);
  }

  public function single($post) {
    return view('project/single', ['project' => $post]);
  }

}
