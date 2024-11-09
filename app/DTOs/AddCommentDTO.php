<?php
namespace App\DTOs;

class AddCommentDTO
{
    public int $articleId;
    public int $userId;
    public string $subject;
    public string $body;

    /**
     * Конструктор DTO.
     *
     * @param int $articleId
     * @param int $userId
     * @param string $subject
     * @param string $body
     */
    public function __construct(int $articleId, int $userId, string $subject, string $body)
    {
        $this->articleId = $articleId;
        $this->userId = $userId;
        $this->subject = $subject;
        $this->body = $body;
    }
}
