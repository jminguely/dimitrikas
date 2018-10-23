<?php

namespace Theme\Controllers;

use Theme\Controllers\Page;
use Theme\Models\MailProvider;
use Themosis\Facades\View;

class Blog extends Page
{
    public function index($post, $query) {
      $posts = $query->get_posts();
      $categories = get_terms( array( 
          'taxonomy' => 'category',
          'parent'   => 0
      ));
      $current_term_id = get_queried_object()->term_id;
      $pagination = paginate_links( array(
        'current' => max( 1, get_query_var('paged') ),
        'total' => $query->max_num_pages,
        'mid_size'  => 2,
        'prev_next' => false,
        'before_page_number' => '<span class="number">',
	      'after_page_number'  => '</span>'
      ) );

      return view('blog/archive', ['post' => $post, 'posts' => $posts, 'categories' => $categories, 'current_term_id' => $current_term_id, 'pagination' => $pagination]);
    }

    public function single($post) {
      $categories = get_terms( array( 
        'taxonomy' => 'category',
        'parent'   => 0
      ));

      return view('blog/single', ['post' => $post, 'categories' => $categories, 'post_url' => 'http://www.google.fr']);
    }

}
