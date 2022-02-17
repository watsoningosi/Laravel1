<?php

namespace App\Http\Controllers;

use App\Models\Article;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show($id)
    {
        $article = Article::find($id);

        return view('pages.show', ['article' => $article]);
    }

    public function index()
    {

        $article = Article::latest()->get();

        return view('pages.blog', ['article' => $article]);
    }
}
