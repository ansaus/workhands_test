<?php

namespace App\Services;

use App\DTOs\CommentDTO;
use App\Jobs\ProcessComment;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ArticleCommentService
{
    /**
     * @throws ValidationException
     */
    private function validateComment(CommentDTO $commentDTO): void
    {
        $validator = Validator::make([
            'subject' => $commentDTO->getSubject(),
            'body' => $commentDTO->getBody(),
        ], [
            'subject' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
    }

    /**
     * Добавление комментария.
     *
     * @param CommentDTO $dto
     * @return void
     * @throws ValidationException
     */
    public function addComment(CommentDTO $dto):void
    {
        $this->validateComment($dto);

        ProcessComment::dispatch($dto);
    }
}
