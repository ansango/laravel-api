<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{

    public function show(Author $author)
    {
        $articles = Article::where('author', '=', $author["id"])->paginate(10);
        return $articles;
    }
}
