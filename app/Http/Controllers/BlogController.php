<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Categorie;

class BlogController extends Controller
{
    public function index() 
    {
        $posts = Post::latest()->paginate(8);
        $categories = Categorie::latest()->paginate();
        return view('blog',compact('posts','categories'));
    }
}
