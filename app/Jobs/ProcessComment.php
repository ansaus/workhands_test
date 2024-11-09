<?php

namespace App\Jobs;

use App\DTOs\AddCommentDTO;
use App\Models\Comment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessComment implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected AddCommentDTO $dto;

    /**
     * Создание нового задания.
     *
     * @param AddCommentDTO $dto
     */
    public function __construct(AddCommentDTO $dto)
    {
        $this->dto = $dto;
    }

    /**
     * Выполнение задания.
     *
     * @return void
     */
    public function handle()
    {
        // Сохранение комментария в базе данных
        Comment::create([
            'article_id' => $this->dto->articleId,
            'user_id' => $this->dto->userId,
            'subject' => $this->dto->subject,
            'body' => $this->dto->body,
        ]);
    }
}
