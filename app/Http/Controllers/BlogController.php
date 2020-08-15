<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
	public function index(){
		$posts = Post::with('author')->latestFirst()->published()->take(6)->get();
		return view("blog.index", compact('posts'));
	}
	// public function index(){
	// 	\DB::enableQueryLog();
	// 	$posts = Post::with('author')->get();
	// 	view("blog.index", compact('posts'))->render();
	// 	dd(\DB::getQueryLog());
	// }
	public function blog(){
		// \DB::enableQueryLog();
		$posts_blog = Post::with('author')
								->latestFirst()
								->published()
								->paginate(3);
		return view('blog.blog', compact('posts_blog'));
		// dd(\DB::getQueryLog(0));
	}

	public function show(Post $post){
		// $post = Post::FindOrFail($id);
		return view('blog.show', compact('post'));
	}
    
}
