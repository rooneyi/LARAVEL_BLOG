<?php

namespace App\Http\Controllers;


use App\Models\Post;

class HomeController extends Controller
{
    public function index(){
        // This method will return the home view

        //Fetch all posts from the database
        $posts =  Post::all();
        return view('home',compact('posts'));
    }
}
