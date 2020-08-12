<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
	public function index(){
		$posts = Post::with('author')->orderBy('created_at', 'DESC')->take(6)->get();
		return view("blog.index", compact('posts'));
	}
	// public function index(){
	// 	\DB::enableQueryLog();
	// 	$posts = Post::with('author')->get();
	// 	view("blog.index", compact('posts'))->render();
	// 	dd(\DB::getQueryLog());
	// }
	public function blog(){
		$posts_blog = Post::with('author')->latestFirst()->paginate(3);
		return view('blog.blog', compact('posts_blog'));
	}
    
}
