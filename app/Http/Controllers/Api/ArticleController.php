<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ArticleLikeService;
use App\Services\ArticleViewService;
use Illuminate\Http\JsonResponse;

class ArticleController extends Controller
{
    protected ArticleViewService $viewService;
    protected ArticleLikeService $likeService;

    public function __construct(ArticleViewService $viewService, ArticleLikeService $likeService)
    {
        $this->viewService = $viewService;
        $this->likeService = $likeService;
    }

    public function incrementLikes($id): JsonResponse
    {
        $likes = $this->likeService->incrementLikes($id);
        return response()->json(['likes_count' => $likes]);
    }

    public function incrementViews($id): JsonResponse
    {
        $views = $this->viewService->incrementViews($id);
        return response()->json(['views_count' => $views]);
    }
}
