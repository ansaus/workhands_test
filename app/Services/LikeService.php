<?php
namespace App\Services;

use Illuminate\Support\Facades\Redis;

class LikeService
{
    public function incrementLikes($articleId)
    {
        $key = "article:{$articleId}:likes";
        return Redis::incr($key);
    }

    public function getLikesCount($articleId)
    {
        $key = "article:{$articleId}:likes";
        return Redis::get($key) ?? 0;
    }
}
