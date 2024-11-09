<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        // Получаем статьи с сортировкой LIFO и пагинацией
        $articles = Article::latestFirst()->paginate(6);

        // Передаем данные в представление
        return view('articles.index', compact('articles'));
    }

    public function articleList()
    {
        // Получаем статьи с сортировкой LIFO и пагинацией
        $articles = Article::latestFirst()->paginate(10);

        // Передаем данные в представление
        return view('articles.list', compact('articles'));
    }

    public function show($id)
    {
        // Найти статью по ID
        $article = Article::findOrFail($id);

        // Отобразить представление для статьи
        return view('articles.show', compact('article'));
    }
}
