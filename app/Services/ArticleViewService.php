<?php
namespace App\Services;

use App\Models\Article;
use Illuminate\Support\Facades\Redis;

class ArticleViewService
{
    public function incrementViews($articleId)
    {
        return Redis::incr($this->getRedisKey($articleId));
    }

    public function getViewsCount($articleId): int
    {
        $key = $this->getRedisKey($articleId);
        $result = Redis::get($key);

        if ($result === null) {
            $article = Article::find($articleId);
            if ($article) {
                $result = $article->views_count;

                Redis::set($key, $result);
            }

            return 0;
        }

        return (int) $result;
    }

    private function getRedisKey($articleId): string
    {
        return "article:{$articleId}:views";
    }
}
