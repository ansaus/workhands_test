<?php
namespace App\Services;

use Illuminate\Support\Facades\Redis;

class ViewService
{
    public function incrementViews($articleId)
    {
        $key = "article:{$articleId}:views";
        return Redis::incr($key);
    }

    public function getViewsCount($articleId)
    {
        $key = "article:{$articleId}:views";
        return Redis::get($key) ?? 0;
    }
}
