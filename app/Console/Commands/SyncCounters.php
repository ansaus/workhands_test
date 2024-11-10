<?php
namespace App\Console\Commands;

use App\Services\ArticleLikeService;
use App\Services\ArticleViewService;
use Illuminate\Console\Command;
use App\Models\Article;

class SyncCounters extends Command
{
    private ArticleViewService $viewService;
    private ArticleLikeService $likeService;

    protected $signature = 'sync:counters';
    protected $description = 'Synchronize counters from Redis to database';

    public function __construct(ArticleLikeService $likeService, ArticleViewService $viewService)
    {
        parent::__construct();
        $this->likeService = $likeService;
        $this->viewService = $viewService;
    }

    public function handle()
    {
        foreach (Article::cursor() as $article) {
            $article->likes_count = $this->likeService->getLikesCount($article->id);
            $article->views_count = $this->viewService->getViewsCount($article->id);
            $article->save();
        }

        $this->info('Counters synchronized successfully.');
    }
}
