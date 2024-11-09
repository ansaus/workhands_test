<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\LikeService;
use App\Services\ViewService;
use Illuminate\Http\JsonResponse;

class ArticleController extends Controller
{
    protected ViewService $viewService;
    protected LikeService $likeService;

    public function __construct(ViewService $viewService, LikeService $likeService)
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
