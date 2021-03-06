<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class JawabanController extends Controller
{
   public function jawaban($id){
    	$post = DB::table('jawaban');
    	return view('posts.jawaban');
    }
    public function komentar($id){
    	$post = DB::table('jawaban');
    	return view('posts.komentar');
    }
    public function store1(Request $request){
    	// dd($request->all());
    	$request->validate([
    		'jawaban' => 'required|unique:jawaban'
    		,
    		'komentar' => 'required',
    		'vote' => 'required'
    	]);
    	$query = DB::table('jawaban')->insert([
    		"jawaban" => $request["jawaban"]
    		,
    		"komentar" => $request["komentar"],
    		"vote" => $request["vote"]
    	]);
        
    	return redirect('/posts')->with('success', 'Post Berhasil Disimpan!');
    }
    public function index(){
        $posts = DB::table('posts')->get();
    	return view('posts.index', compact('posts'));
    }
    public function vote(){
    	$post = DB::table('jawaban');
    	return view('posts.vote');
    }
}
