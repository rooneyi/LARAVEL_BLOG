<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        //Fetch all posts from the database
        $posts =  Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }
    public function store(){
        // Validate the request data
        $data = request()->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Create a new post
        Post::create($data);

        // Redirect to the posts index page with a success message
        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }
}
