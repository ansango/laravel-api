<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'published', 'content', 'image', 'category'];

    public function author()
    {
        return $this->hasOne(Author::class, 'foreign_key');
    }

    public function category()
    {
        return $this->hasOne(Category::class, 'foreign_key');
    }
}
