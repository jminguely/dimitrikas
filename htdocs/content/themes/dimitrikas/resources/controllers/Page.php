<?php

namespace Theme\Controllers;

use Themosis\Route\BaseController;
use Themosis\Facades\View;
use Themosis\Metabox\Meta;

class Page extends BaseController
{
  public function __construct()
  {
    View::share([
      'primaryMenu'  => wp_nav_menu( array( 'theme_location' => 'primary', 'depth' => 1, 'echo' => false ) ),
    ]);    
  }

  public function index($post, $query) {
    return view('page/single', ['post' => $post]);
  }

  public function front($post) {
    return view('page/front', ['post' => $post]);
  }

  public function prestations($post) {
    $prestations = Meta::get($post->ID, 'prestations');
    return view('page/prestations', ['post' => $post, 'prestations' => $prestations]);
  }

  public function temoignages($post) {
    $testimonials = Meta::get($post->ID, 'review');
    return view('page/temoignages', ['post' => $post, 'testimonials' => $testimonials]);
  }
  
  public function clients($post) {
    $clients = Meta::get($post->ID, 'client');
    return view('page/clients', ['post' => $post, 'clients' => $clients]);
  }
}
