<?php

namespace App\Http\Controllers;

use App\DTOs\ArticleDTO;
use App\Models\Article;
use App\Services\ArticleLikeService;
use App\Services\ArticleViewService;

class ArticleController extends Controller
{
    private ArticleLikeService $likeService;
    private ArticleViewService $viewService;

    // Инжектируем ArticleService через конструктор
    public function __construct(ArticleLikeService $likeService, ArticleViewService $viewService)
    {
        $this->likeService = $likeService;
        $this->viewService = $viewService;
    }

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
        $article = Article::findOrFail($id);
        $articleDTO = $this->getArticleDTO($article);

        return view('articles.show', compact('article', 'articleDTO'));
    }

    private function getArticleDTO(Article $article): ArticleDTO
    {
        return new ArticleDTO(
            $article->id,
            $article->title,
            $article->body,
            $article->thumbnail,
            $article->created_at,
            $article->updated_at,
            $this->likeService->getLikesCount($article->id),
            $this->viewService->getViewsCount($article->id)
        );
    }
}
