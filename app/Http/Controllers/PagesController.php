<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Page;

class PagesController extends Controller
{
    //testing

    public function testShow($slug)
    {
        $page = Page::where('slug', $slug)->first();
        $view = 'pages.index';
        return view($view, compact('page'));
    }
    public function index()
    {
        return view('index');
    }
    public function posts()
    {
        $posts = Post::latest()->paginate(10);
        return view('posts.index', compact('posts'));
    }
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }
    public function about()
    {
        return view('pages.about');
    }
    public function services()
    {
        return view('pages.services');
    }
}
