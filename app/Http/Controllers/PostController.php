<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('index', ['posts' => $posts]);

    }

    public function getpost(int $post_id)
    {
        $post = Post::findorFail($post_id);

        return view('post', ['post' => $post]);
    }

    public function createPostView()
    {
        return view('createPost');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required|max2000',
        ]);

        $post = new Post();
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->save();

        return $this->index();
    }

}
