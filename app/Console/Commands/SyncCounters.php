<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Redis;
use App\Models\Article;

class SyncCounters extends Command
{
    protected $signature = 'sync:counters';
    protected $description = 'Synchronize counters from Redis to database';

    public function handle()
    {
        $articles = Article::all();

        foreach ($articles as $article) {
            $likesKey = "article:{$article->id}:likes";
            $viewsKey = "article:{$article->id}:views";

            $likes = Redis::get($likesKey) ?? 0;
            $views = Redis::get($viewsKey) ?? 0;

            $article->likes_count += $likes;
            $article->views_count += $views;
            $article->save();

            Redis::del([$likesKey, $viewsKey]);
        }

        $this->info('Counters synchronized successfully.');
    }
}
