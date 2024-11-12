<?php

namespace App\Http\Controllers;

use App\DTOs\ArticleDTO;
use App\Models\Article;
use App\Models\Tag;
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
        $itemsPerPage = config('pagination.articles_index_per_page');
        $articles = Article::latestFirst()->paginate($itemsPerPage);
        $articleDTOs = $this->getArticleDTOs($articles);

        return view('articles.index', compact('articles', 'articleDTOs'));
    }

    public function articleList()
    {
        $tagId = request('tag');

        $itemsPerPage = config('pagination.articles_list_per_page');
        if ($tagId) {
            $articles = Article::whereHas('tags', function ($query) use ($tagId) {
                $query->where('tags.id', $tagId);
            })->latestFirst()->paginate($itemsPerPage);
        } else {
            $articles = Article::latestFirst()->paginate($itemsPerPage);
        }

        $articleDTOs = $this->getArticleDTOs($articles);
        $tags = Tag::all();

        return view('articles.list', compact('articles', 'articleDTOs', 'tags', 'tagId'));
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
    private function getArticleDTOs($articles):array
    {
        $result = [];
        foreach ($articles as $article) {
            $result[$article->id] = $this->getArticleDTO($article);
        }
        return $result;
    }
}
