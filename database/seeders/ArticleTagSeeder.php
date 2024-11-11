<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class ArticleTagSeeder extends Seeder
{
    private static array $tags = [
        'История',
        'Эволюция',
        'Традиции',
        'Музыка',
        'Инструменты',
        'Происхождение',
        'Наследие',
        'Звучание',
        'Культура',
        'Мастера'
    ];

    public function run()
    {
        foreach (self::$tags as $name) {
            Tag::create([
                'name' => $name,
            ]);
        }

        $articles = Article::all();
        $tags = Tag::all();

        // Рандомное связывание тегов со статьями
        foreach ($articles as $article) {
            $randomTags = $tags->random(rand(1, 5))->pluck('id');
            $article->tags()->attach($randomTags);
        }
    }
}
