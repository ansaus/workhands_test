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

    public function __construct(ArticleLikeService $likeService, ArticleViewService $viewService)
    {
        $this->likeService = $likeService;
        $this->viewService = $viewService;
    }

    public function index()
    {
        $articles = Article::latestFirst()->paginate(6);
        $articleDTOs = $this->getArticleDTOs($articles);

        return view('articles.index', compact('articles', 'articleDTOs'));
    }

    public function articleList()
    {
        $articles = Article::latestFirst()->paginate(10);
        $articleDTOs = $this->getArticleDTOs($articles);
        $tags = [];

        return view('articles.list', compact('articles', 'articleDTOs', 'tags'));
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

    /**
     * @param Article[]|mixed $articles
     * @return ArticleDTO[]
     */
    private function getArticleDTOs(&$articles):array
    {
        $result = [];
        foreach ($articles as $article) {
            $result[$article->id] = $this->getArticleDTO($article);
        }
        return $result;
    }
}
