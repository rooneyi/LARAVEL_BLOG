<?php

namespace App\Http\Controllers;


use App\Models\Posts;

class HomeController extends Controller
{
    public function index(){
        // This method will return the home view
        //Fetch all posts from the database
        $posts =  Posts::paginate(6);
        $post_recents = Posts::orderBy('created_at', 'desc')->take(3)->get();
        return view('home',compact('posts','post_recents'));
    }
}
