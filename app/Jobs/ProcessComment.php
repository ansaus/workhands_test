<?php

namespace App\Jobs;

use App\DTOs\CommentDTO;
use App\Models\Comment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessComment implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected CommentDTO $dto;

    /**
     * Создание нового задания.
     *
     * @param CommentDTO $dto
     */
    public function __construct(CommentDTO $dto)
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
        CommentDTO::create([
            'article_id' => $this->dto->getArticleId(),
            'user_id' => $this->dto->getUserId(),
            'subject' => $this->dto->getSubject(),
            'body' => $this->dto->getBody(),
        ]);
    }
}
