<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return Article::paginate(10, ['id', 'title', 'published']);
    }

    public function show(Article $article)
    {
        return $article;
    }
}
