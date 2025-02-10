<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate();

        return view("posts.index", compact('posts'));
    }

    public function create()
    {
        return view("posts.create");
    }

    public function store(Request $request)
    {
        /*$request->validate([
            'title' => 'required',
            'slug' => 'required',
            'category' => 'required',
            'content' => 'required',
        ]);*/
        Post::create($request->all()); // En vez de añadir valores uno a uno
                                        // lo genera de una con asignación masiva.
        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        return view("posts.show", compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        return redirect()->route('posts.show', $post);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
