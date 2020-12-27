<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function show(Category $category, $page)
    {
        $articles = Article::where('category', '=', $category["id"])->paginate(10, ['id', 'title', 'category', 'published'], 'page,', $page)->items();
        return $articles;
    }
}
