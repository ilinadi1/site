<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories(Category $category){
        return view('categories', ['categories' => $category->all()]);
    }
    public function posts(Category $category){
        $posts = Post::where('category_id', $category->id)->get();
        return view('posts', ['posts' => $posts->all()]);
    }
}
