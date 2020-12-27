<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    public function show(Author $author, $page)
    {
        $articles = Article::where('author', '=', $author["id"])->paginate(10, ['id', 'title', 'author', 'published'], 'page,', $page)->items();
        return $articles;
    }
}
