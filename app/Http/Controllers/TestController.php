<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //http://localhost/blog/public/articles/view/1
    public function view($id){
        $article = Article::find($id);
        
        $article=>category;
        $article=>user;
        $artcile=>tags;
        
        dd($article); 
    }
}
