<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Http\Controllers\ArticlesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/project', function () {
    return view('pages.project');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/articles/{article}', 'App\Http\Controllers\ArticlesController@show');

Route::get('/single', function () {

    return view(
        'pages.single',

        [
            'articles' => App\models\Article::latest()->get()

        ]
    );
});
