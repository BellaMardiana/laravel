<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryPostController extends Controller
{
    public function index(Category $category)
    {
       return view('admin.post.post-by-category', [
           'category' => $category,
           'posts' => $category->posts()->paginate(5)
       ]);
    }
}
