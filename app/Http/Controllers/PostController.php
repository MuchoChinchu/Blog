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
}
