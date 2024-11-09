<?php
namespace App\Services;

use App\Models\Article;

class ArticleService
{
    public function getArticleById($id)
    {
        return Article::findOrFail($id);
    }
}
