<?php

namespace Theme\Controllers;

use Theme\Models\MailProvider;
use Themosis\Route\BaseController;
use Themosis\Facades\Asset;
use Themosis\Facades\Input;
use Themosis\Facades\Ajax;
use Themosis\Facades\View;
use Themosis\Page\Option;

class Blog extends BaseController
{
    public function index($post, $query) {
      $posts = $query->get_posts();
      $categories = get_terms( array( 
          'taxonomy' => 'category',
          'parent'   => 0
      ));
      $current_term_id = get_queried_object()->term_id;
      return view('blog', ['posts' => $posts, 'categories' => $categories, 'current_term_id' => $current_term_id]);
    }

    public function single($post) {
      $categories = get_terms( array( 
        'taxonomy' => 'category',
        'parent'   => 0
      ));
      return view('single-post', ['post' => $post, 'categories' => $categories]);
    }

}
