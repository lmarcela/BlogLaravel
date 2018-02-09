<?php

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
    return view('welcome');
});

//http://localhost/blog/public/articles
Route::get('articles', function () {
    echo "This is article's section";
});

//http://localhost/blog/public/articles/nombreAqui
Route::get('articles/{nombre}', function ($nombre) {
    echo "This is article's section with name: ".$nombre;
});

Route::group(['prefix'=>'articles1'], function () {
    //http://localhost/blog/public/articles1/view/
    //http://localhost/blog/public/articles1/view/articuloAqui
    Route::get('view/{article?}', function ($article="vacio") {
        echo $article;
    });
});
