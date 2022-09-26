<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Categorie;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Categorie::get();
        $posts = Post::latest()->paginate(10);
        

        return view('posts.index', compact('posts'),compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::latest()->get();
        return view('posts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('images');
        $image_name = $image->getClientOriginalName();
        $image->move('./public_html/images/posts',$image_name); 

        Post::create(array_merge($request->only('title', 'description', 'body'),[
            'user_id' => auth()->id(),
            'categorie_id' => $request->get('categorie'),
            'images' => $image_name,
        ]));

        return redirect()->route('posts.index')
            ->withSuccess(__('Post created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $categories = Categorie::get();
        return view('posts.show', [
            'post' => $post
        ],compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Categorie::latest()->get();
        return view('posts.edit', [
            'post' => $post
        ],compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

        $image = $request->file('images');
        if ($image != null){
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('images/posts'),$image_name); 
        }
        else{
            $image_name = $post->images;
        }
        $post->update(array_merge($request->only('title', 'description', 'body'),[
            'images' => $image_name,
            'categorie_id' => $request->get('categorie')
        ]));

        return redirect()->route('posts.index')
            ->withSuccess(__("l'article à bien été modifier"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')
            ->withSuccess(__('Post deleted successfully.'));
    }
}