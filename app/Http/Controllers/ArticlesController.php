<?php

namespace App\Http\Controllers;

use App\Models\Article;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show($id)
    {
        // Show a single resource
        $article = Article::find($id);

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

    protected function edit($id)

    {
        $article = Article::find($id);
        //return view('articles.edit', ['article' => $article] );
        return view('articles.edit', compact('article'));
        //shows a view to edit an existing resource(form input)
    }

    protected function update($id)

    {
        $article = Article::find($id);

        $article->title = request('title');

        $article->exerpt = request('exerpt');

        $article->body = request('body');

        $article->save();


        return redirect('/blog');
        // persist the edited existing resource(form input)
    }

    protected function store()

    {

        /**$article = new Article();

        $article->title = request('title');

        $article->exerpt = request('exerpt');

        $article->body = request('body');

        $article->save();
         **/

        return redirect('/blog');

        //dump(request()->all());
        // persist the create form
    }
    protected function destroy()

    {
        //delete an existing resource(form input)
    }
}
