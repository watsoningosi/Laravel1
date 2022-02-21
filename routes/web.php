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
    return view('pages.blog',  [
        'articles' => App\models\Article::all()

    ]);
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

Route::get('/single', function () {

    return view(
        'pages.single',

        [
            'articles' => App\models\Article::latest()->get()

        ]
    );
});
Route::get('/articles', 'App\Http\Controllers\ArticlesController@index');
Route::post('/articles', 'App\Http\Controllers\ArticlesController@store');
Route::get('/articles/create', 'App\Http\Controllers\ArticlesController@create');
Route::get('/articles/{article}/edit', 'App\Http\Controllers\ArticlesController@edit');
Route::get('/articles/{article}', 'App\Http\Controllers\ArticlesController@show');
Route::put('/articles/{article}', 'App\Http\Controllers\ArticlesController@update');


//GET, PUT, POST, DELETE
//GET/videos
//GET/videos/CREATE
//GET /videos/1
//GET/videos/1/edit
//PUT /videos/1(UPDATE)  
//DELETE /videos/1 

//POST /VIDEOS/subscriptions => videoSubscriptionController@store  
