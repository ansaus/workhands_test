<?php

namespace App\Services;

use App\DTOs\CommentDTO;
use App\Jobs\ProcessComment;
use Illuminate\Http\JsonResponse;

class ArticleCommentService
{
    /**
     * Добавление комментария.
     *
     * @param CommentDTO $dto
     * @return JsonResponse
     */
    public function addComment(CommentDTO $dto): JsonResponse
    {
        // Добавляем задание ProcessComment в очередь для асинхронной обработки
        ProcessComment::dispatch($dto);

        return response()->json(['message' => 'Ваше сообщение успешно отправлено'], 200);
    }
}
