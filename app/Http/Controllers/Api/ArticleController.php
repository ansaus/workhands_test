<?php
namespace App\Http\Controllers\Api;

use App\DTOs\CommentDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Services\ArticleCommentService;
use App\Services\ArticleLikeService;
use App\Services\ArticleViewService;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class ArticleController extends Controller
{
    protected ArticleViewService $viewService;
    protected ArticleLikeService $likeService;
    protected ArticleCommentService $commentService;

    public function __construct(ArticleViewService $viewService, ArticleLikeService $likeService, ArticleCommentService $commentService)
    {
        $this->viewService = $viewService;
        $this->likeService = $likeService;
        $this->commentService = $commentService;
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

    public function addComment($id, CommentRequest $request):JsonResponse
    {
        $commentDTO = new CommentDTO(
            $id,
            $request->input('subject'),
            $request->input('body')
        );

        try {
            $this->commentService->addComment($commentDTO);
        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        }

        return response()->json(['success' => 1], 200);
    }
}
