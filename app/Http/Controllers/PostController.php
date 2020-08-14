<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;



class PostController extends Controller
{
    public function create(){
    	return view('posts.create');
    }
    public function store(Request $request){
    	// dd($request->all());
    	$request->validate([
    		'judul' => 'required|unique:posts',
    		'isi' => 'required',
    		'pertanyaan' => 'required',
    		'tag' => 'required'
    	]);
    	$query = DB::table('posts')->insert([
    		"judul" => $request["judul"],
    		"isi" => $request["isi"],
    		"pertanyaan" => $request["pertanyaan"],
    		"tag" => $request["tag"]
    	]);
        
    	return redirect('/posts')->with('success', 'Post Berhasil Disimpan!');
    }
    public function index(){
        $posts = DB::table('posts')->get();

    	return view('posts.index', compact('posts'));
    }
    public function show($id){
    	$post = DB::table('posts')->where('id', $id)->first();

    	return view('posts.show', compact('post'));
    }
    public function edit($id){
    	$post = DB::table('posts')->where('id', $id)->first();
    	return view('posts.edit', compact('post'));
    }
    public function update($id, Request $request){
    	$request->validate([
    		'judul' => 'required|unique:posts',
    		'isi' => 'required',
    		'pertanyaan' => 'required',
    		'tag' => 'required'
    	]);

    	$query = DB::table('posts')
				->where('id', $id)
				->update([
					'judul' => $request['judul'],
					'isi' => $request['isi'],
					'pertanyaan' => $request['pertanyaan'],
					'tag' => $request["tag"]
				]);
    	return redirect('/posts')->with('success', 'Berhasil update');
    }
    public function destroy($id){
    	$query = DB::table('posts')->where("id", $id)->delete(); 

    	return redirect("/posts")->with('success', 'Post Berhasil dihapus');
    }
}
