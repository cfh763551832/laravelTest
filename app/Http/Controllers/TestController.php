<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class TestController extends Controller
{
   public function getArticle(Request $request){
        dump(\Route::current());
   }
}
