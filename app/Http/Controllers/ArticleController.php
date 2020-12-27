<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index($page)
    {
        //$article = Article::paginate(10, ['id', 'title', 'published'])->items();
        //return $article;
        return Article::paginate(10, ['id', 'title', 'published'], 'page,', $page)->items();
    }

    public function show(Article $article)
    {
        return $article;
    }
}
