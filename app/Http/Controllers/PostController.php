<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

// ORM
use App\Post;

class PostController extends Controller
{
    public function create(){
    	return view('posts.create');
    }
    public function index(){
        //$posts = Post::all(); // eloquent

    	return view('posts.index');
    }
}
