<?php
namespace App\DTOs;

class CommentDTO
{
    private int $articleId;
    private string $subject;
    private string $body;

    /**
     * @param int $articleId
     * @param string $subject
     * @param string $body
     */
    public function __construct(int $articleId, string $subject, string $body)
    {
        $this->articleId = $articleId;
        $this->subject = $subject;
        $this->body = $body;
    }

    public function getArticleId(): int
    {
        return $this->articleId;
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
