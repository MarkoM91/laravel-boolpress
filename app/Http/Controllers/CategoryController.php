<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class CategoryController extends Controller
{
  function getPostByCategoryName($name) {

    $category = Category::where('name', $name)->first(); //vado a prendere una e una sola categoria;
    $posts = $category -> posts; //prendo i post della categoria;

    return view('page.category', compact('category'));
  }
}
