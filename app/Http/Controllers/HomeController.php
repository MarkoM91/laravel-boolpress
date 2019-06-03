<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
  function getLast5Posts() {

    $posts = Post::OrderByDesc('updated_at')->take(5)->get();

    return view('page.home', compact('posts'));
  }
}
