<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Page;

class PagesController extends Controller
{
    public function pageShow($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        $view = 'pages.index';
        return view($view, compact('page'));
    }
    public function index()
    {
        $page = Page::RootPage();
        if($page->role == 'dynamic'){
            $posts = Post::latest()->paginate(10);
            return view('index', compact('posts'));
        }else{
            return view('pages.index', compact('page'));
        }
    }
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
