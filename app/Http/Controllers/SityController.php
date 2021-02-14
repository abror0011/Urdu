<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Amaliyot;

class SityController extends Controller
{
    public function index()
    {
        $amaliyot = Amaliyot::latest()->paginate(6);
        return view('user.home',compact('amaliyot'));
    }

    public function about()
    {
        return view('user.about');
    }

    public function author()
    {
        return view('user.author');
    }

    public function help()
    {
        return view('user.help');
    }

    public function result()
    {
        return view('user.result');
    }
    public function form()
    {
        return view('user.form');
    }

    public function contract()
    {
        return view('user.contract');
    }

    public function content()
    {
        return view('user.content');
    }

    public function news()
    {
        $news = Post::latest()->get();
        return view('user.news', compact('news'));
    }

    public function news_more($id)
    {
        $news_more = Post::findOrFail($id);
        return view('user.news_more', compact('news_more'));
    }
}