<?php

namespace App\Http\Controllers\Management\Articles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function GetArticles () {
        return view('management.ViewsArticles.Articles');
    }
}
