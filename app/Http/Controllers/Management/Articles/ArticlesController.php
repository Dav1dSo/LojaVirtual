<?php

namespace App\Http\Controllers\Management\Articles;

use App\Http\Controllers\Controller;
use App\Http\Requests\Management\ArticlesRequest;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function GetArticles () {
        return view('management.ViewsArticles.Articles');
    }

    public function CreateArticle ()  {
        return view('management.ViewsArticles.formCreateArticle');
    }

    public function SaveArticle (ArticlesRequest $requestArticles) {

        $dataArticle = [
            'titulo' => $requestArticles->titulo,
            'imagem' => $requestArticles->imagem,
            'textContent' => $requestArticles->textContent
        ];

        return 'Salvo com sucesso!';
    }
}
