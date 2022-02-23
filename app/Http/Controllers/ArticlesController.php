<?php

namespace App\Http\Controllers;

use App\Models\Article;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show(Article $article)
    {
        // Show a single resource

        return view('pages.show', ['article' => $article]);
    }

    public function index()
    {
        // Render a list resource
        $article = Article::latest()->get();

        return view('pages.blog', ['article' => $article]);
    }


    protected function create()

    {

        return view('articles.create');
        //shows a view to create a new resource(form input)
    }

    protected function edit(Article $article)

    {

        //return view('articles.edit', ['article' => $article] );
        return view('articles.edit', compact('article'));
        //shows a view to edit an existing resource(form input)
    }

    protected function update(Article $article)

    {
        $validatedAttributes = request()->validate([
            'title' => 'required', //['required', 'min:3', 'max:255'],
            'body' => 'required',
            'exerpt' => 'required',
        ]);


        return redirect($article->path());
        // persist the edited existing resource(form input)
    }

    protected function store()

    {
        $validatedAttributes = request()->validate([
            'title' => 'required', //['required', 'min:3', 'max:255'],
            'body' => 'required',
            'exerpt' => 'required',
        ]);

        Article::create($validatedAttributes);

        return redirect('/blog');

        //dump(request()->all());
        // persist the create form
    }
    protected function destroy()

    {
        //delete an existing resource(form input)
    }
}
