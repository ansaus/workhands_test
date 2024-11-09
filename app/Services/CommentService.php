<?php

namespace App\Services;

use App\DTOs\AddCommentDTO;
use App\Jobs\ProcessComment;
use Illuminate\Http\JsonResponse;

class CommentService
{
    /**
     * Добавление комментария.
     *
     * @param AddCommentDTO $dto
     * @return JsonResponse
     */
    public function addComment(AddCommentDTO $dto): JsonResponse
    {
        // Добавляем задание ProcessComment в очередь для асинхронной обработки
        ProcessComment::dispatch($dto);

        return response()->json(['message' => 'Ваше сообщение успешно отправлено'], 200);
    }
}
