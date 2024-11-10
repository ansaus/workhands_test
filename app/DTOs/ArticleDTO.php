<?php

namespace App\DTOs;

/**
 * @object-type DTO
 */
class ArticleDTO
{
    private int $id;
    private string $title;
    private string $body;
    private string $thumbnail;
    private string $createdAt;
    private string $updateAt;
    private int $likesCount;
    private int $viewsCount;

    /**
     * @param int $id
     * @param string $title
     * @param string $body
     * @param string $thumbnail
     * @param string $createdAt
     * @param string $updateAt
     * @param int $likesCount
     */
    public function __construct(int $id, string $title, string $body, string $thumbnail, string $createdAt, string $updateAt, int $likesCount, int $viewsCount)
    {
        $this->id = $id;
        $this->title = $title;
        $this->body = $body;
        $this->thumbnail = $thumbnail;
        $this->createdAt = $createdAt;
        $this->updateAt = $updateAt;
        $this->likesCount = $likesCount;
        $this->viewsCount = $viewsCount;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function getThumbnail(): string
    {
        return $this->thumbnail;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function getUpdateAt(): string
    {
        return $this->updateAt;
    }

    public function getLikesCount(): int
    {
        return $this->likesCount;
    }

    public function getViewsCount(): int
    {
        return $this->viewsCount;
    }

}