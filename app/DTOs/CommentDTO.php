<?php
namespace App\DTOs;

class CommentDTO
{
    private int $articleId;
    private int $userId;
    private string $subject;
    private string $body;

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

    public function getArticleId(): int
    {
        return $this->articleId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function getBody(): string
    {
        return $this->body;
    }

}
