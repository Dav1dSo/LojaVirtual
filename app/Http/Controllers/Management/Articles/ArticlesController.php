<?php

namespace App\Http\Controllers\Management\Articles;

use App\Http\Controllers\Controller;
use App\Http\Requests\Management\ArticlesRequest;
use App\Models\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function GetArticles()
    {
        return view('management.ViewsArticles.Articles');
    }

    public function CreateArticle()
    {
        return view('management.ViewsArticles.formCreateArticle');
    }

    public function SaveArticle(ArticlesRequest $requestArticles)
    {
        $Article = new Articles();

        $ImageArticle = $requestArticles->file('imagem');

        $filepaths = [];

        if (is_array($ImageArticle)) {
            foreach ($ImageArticle as $fileImage) {
                $filepath = $fileImage->store('img/Articles', 'public');
                $filepaths[] = $filepath;
            }
        } else {
            $filepaths = $ImageArticle->store('img/Articles', 'public');
        }

        $dataArticle = [
            'titulo' => $requestArticles->titulo,
            'imagem' => $filepaths,
            'textContent' => $requestArticles->textContent
        ];

        $Article::create($dataArticle);

        return 'Salvo com sucesso!';
    }
}
