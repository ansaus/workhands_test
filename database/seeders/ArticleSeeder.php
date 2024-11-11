<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    public const NUMBER_OF_ARTICLES = 20;

    private static array $data = [
        [
            'title' => 'История появления гитары',
            'body' => '<p>Гитара является одним из самых популярных струнных инструментов в мире. Её история уходит корнями в далекую древность, и она прошла долгий путь, прежде чем стала такой, какой мы её знаем сегодня. Истоки гитары можно найти в Древнем Египте и Месопотамии, где археологи обнаружили изображения инструментов, напоминающих гитару. Эти ранние инструменты были предшественниками современных гитар и представляли собой различные типы лютен, у которых были струны, закрепленные на деревянном корпусе.</p>
<p>Одним из самых значимых шагов на пути к созданию гитары, как мы её знаем, стало развитие испанской гитары в XVI веке. Испанская гитара имела четыре пары струн и использовалась в народной музыке Испании и Португалии. Считается, что её прямыми предшественниками были мавританская уд и вуэла, которые стали основой для формирования более привычной гитарной формы и звучания. С течением времени количество струн увеличилось до шести, и гитара стала одним из основных музыкальных инструментов Европы.</p>
<p>В XIX веке мастер Антонио Торрес Хурадо внёс значительные изменения в конструкцию гитары. Его работа заложила основу для современного классического инструмента. Торрес увеличил размер корпуса, изменил форму деки и улучшил систему бриджа. Он также добавил систему подпорок, которая позволила повысить громкость и качество звука. Именно благодаря его усилиям гитара приобрела тот вид и звучание, которые остаются неизменными и по сей день.</p>
<p><strong>Интересный факт:</strong> именно гитара стала основным инструментом, который использовался в серенадах — любовных песнях, исполняемых под окнами возлюбленных. Благодаря своей мобильности и выразительности гитара идеально подходила для таких романтических выступлений, и это помогло ей завоевать популярность среди простых людей.</p>
<p>Гитара нашла своё место не только в классической музыке, но и в народной, джазовой и рок-культуре. В XX веке гитара стала важной частью популярной музыки благодаря своим выразительным возможностям и способности создавать как мелодии, так и аккордовые сопровождения. Эволюция гитары в XX веке привела к появлению электрогитары, которая стала знаковым инструментом рок-музыки. Электрогитара, созданная в 1930-х годах, дала музыкантам возможность экспериментировать со звуком, добавляя эффекты, увеличивая громкость и создавая абсолютно новое звучание. Среди первопроходцев в этом направлении были такие знаменитые гитаристы, как Чак Берри и Джими Хендрикс.</p>
<p>В XX веке также появились акустические гитары с металлическими струнами, которые стали популярными среди фолк и кантри музыкантов. Эти гитары имели более яркий и громкий звук по сравнению с нейлоновыми струнами классической гитары. Различные стили и техники игры на гитаре, такие как фингерстайл, фламенко, блюз и рок, развивались благодаря разнообразию моделей гитар и их особенностям.</p>
<p><strong>Интересный факт:</strong> несмотря на популярность электрогитары, классическая гитара остаётся одним из наиболее востребованных инструментов для изучения в музыкальных школах по всему миру. Обучение игре на классической гитаре считается важной основой для развития техники игры и понимания музыки в целом.</p>
<p>Еще одним интересным аспектом гитары является её культурное значение в разных странах. В Испании гитара ассоциируется с фламенко — эмоциональным и энергичным музыкальным жанром, который сочетает в себе пение, танцы и виртуозную гитарную игру. В Латинской Америке гитара стала символом традиционной музыки, включая жанры, такие как самба и боса-нова в Бразилии, а также аргентинское танго. В Северной Америке гитара стала ключевым элементом в развитии кантри и блюза, а позже и рока.</p>
<p><strong>Интересный факт:</strong> первые упоминания о гитароподобных инструментах встречаются в литературе Древней Греции и Рима, где их называли «кифара». Хотя этот инструмент имел мало общего с современной гитарой, название сохранилось и послужило основой для создания слова «гитара».</p>
<p>Современные гитары бывают самых разных видов и предназначены для различных целей. Классическая гитара с нейлоновыми струнами используется для исполнения классических произведений и испанской музыки. Акустическая гитара с металлическими струнами часто используется для аккомпанемента и в популярной музыке. Электрогитара с её множеством звуковых эффектов и усилением звука стала неотъемлемой частью рок, металл и джаз-музыки.</p>
<p>Развитие технологий также коснулось гитары — появились электронные модели с встроенными процессорами эффектов, которые позволяют музыкантам экспериментировать со звуком. Такие гитары можно подключать к компьютеру и использовать специальное программное обеспечение для создания и записи музыки, что делает процесс более удобным и творческим.</p>
<p><strong>Интересный факт:</strong> в 1950-е годы компания Fender представила первую массовую модель электрогитары — Fender Telecaster. Эта модель быстро стала популярной благодаря своему простому, но эффективному дизайну и универсальности звучания. Позже появилась легендарная Fender Stratocaster, которая стала символом рок-музыки и использовалась такими знаменитыми гитаристами, как Эрик Клэптон и Джимми Пейдж.</p>
<p>В наше время гитара продолжает развиваться, и её популярность не угасает. Существует огромное количество гитарных фестивалей, конкурсов и концертов, где музыканты демонстрируют своё мастерство и вдохновение. Гитара остаётся инструментом, который объединяет людей разных культур и возрастов, и её универсальность позволяет использовать её в самых разных музыкальных жанрах.</p>
<p>Таким образом, гитара прошла длинный путь от простого струнного инструмента в древности до сложного и многофункционального инструмента современности. Её история — это история развития музыки и культуры, и она продолжает вдохновлять музыкантов по всему миру.</p>'
        ],
        [
            'title' => 'Эволюция пианино: как оно стало тем, что мы знаем сегодня',
            'body' => 'Пианино, или фортепиано, было изобретено в начале XVIII века итальянским мастером Бартоломео Кристофори. Он искал способ создать инструмент, который мог бы сочетать мягкие и громкие звуки, что и отражено в названии "пианино" (тихо) и "форте" (громко). Пианино быстро завоевало популярность благодаря своей выразительности и возможности воспроизводить как сильные, так и мягкие ноты, став ключевым инструментом в классической музыке. Интересный факт: первые пианино были настолько редкими, что считались признаком роскоши, и только в XIX веке массовое производство сделало их доступными для широких слоёв общества.'
        ],
        [
            'title' => 'Скрипка: инструмент страсти и виртуозности',
            'body' => 'Скрипка появилась в XVI веке в Северной Италии, и её развитие связывают с такими мастерами, как Андреа Амати и Антонио Страдивари. Первые скрипки были разработаны на основе древних струнных инструментов, таких как виола. Скрипка быстро стала одним из основных инструментов в европейской музыке благодаря своему яркому звуку и выразительности, а также возможности исполнять как сольные, так и ансамблевые произведения. Интересный факт: каждая скрипка Страдивари считается уникальным шедевром, и некоторые экземпляры стоят миллионы долларов.'
        ],
        [
            'title' => 'Барабаны: от древних ритуалов до рок-сцены',
            'body' => 'Барабаны - один из самых древних музыкальных инструментов в мире. Их использование восходит к доисторическим временам, когда первые люди использовали кожу животных, натянутую на деревянные рамы, чтобы создавать ритмичные звуки. Барабаны использовались в ритуальных и военных целях в различных культурах, таких как африканские племена и древние египтяне. Современные барабанные установки начали формироваться в начале XX века с развитием джазовой музыки. Интересный факт: барабаны - единственный музыкальный инструмент, который встречается в различных культурах на всех континентах.'
        ],
        [
            'title' => 'Флейта: древнейший духовой инструмент',
            'body' => 'Флейта является одним из старейших духовых инструментов, её история начинается более 40 тысяч лет назад. Первые флейты были сделаны из костей животных, и археологические находки свидетельствуют о их широком использовании в древних культурах. Современная флейта, разработанная Теобальдом Бёмом в XIX веке, имеет сложную конструкцию и богатый звуковой диапазон, что делает её популярным инструментом в классической и современной музыке. Интересный факт: флейта была первым духовым инструментом, который попал в космос благодаря астронавтам НАСА.'
        ],
        [
            'title' => 'Саксофон: голос джаза и свободы',
            'body' => 'Саксофон был изобретён в середине XIX века бельгийским мастером Адольфом Саксом. Сакс стремился создать инструмент, который сочетал бы силу духовых инструментов с гибкостью и выразительностью деревянных. Саксофон стал популярным сначала в военной музыке, а затем и в джазе, став одним из символов джазовой эры. Интересный факт: саксофон долгое время не признавался в классической музыке, но сейчас он является важной частью некоторых классических произведений.'
        ],
        [
            'title' => 'Арфа: королевский инструмент древности',
            'body' => 'Арфа - один из древнейших музыкальных инструментов, её изображение можно найти в древнеегипетских гробницах, датируемых третьим тысячелетием до нашей эры. Первые арфы были простыми изогнутыми палками с натянутыми на них струнами. Современная концертная арфа, с большим количеством педалей и струн, была разработана в начале XIX века и используется как в оркестровой, так и в сольной музыке. Интересный факт: арфа - один из самых сложных для изучения инструментов из-за большого количества струн и необходимости использовать обе руки и ноги.'
        ],
        [
            'title' => 'Кларнет: инструмент с душой из дерева',
            'body' => 'Кларнет был изобретён в начале XVIII века немецким мастером Иоганном Кристофом Деннером. Инструмент был создан на основе более раннего духового инструмента - шалмея. Кларнет быстро стал популярным в оркестровой и камерной музыке благодаря своему широкому диапазону и выразительности звука. Интересный факт: Моцарт был одним из первых композиторов, кто написал произведения специально для кларнета, что помогло популяризировать этот инструмент.'
        ],
        [
            'title' => 'Труба: глас войны и праздников',
            'body' => 'Труба - один из древнейших духовых инструментов, её история восходит к бронзовому веку. В древности трубы использовались в основном для сигнализации и церемоний. Современная труба, с клапанами, была разработана в начале XIX века и стала основным инструментом в классической, джазовой и популярной музыке. Интересный факт: трубы использовались не только в военных целях, но и в королевских церемониях для объявления важных событий.'
        ],
        [
            'title' => 'Орган: король музыкальных инструментов',
            'body' => 'Орган является одним из самых сложных музыкальных инструментов, его история начинается в Древней Греции, где был изобретён гидравлос - прообраз современного органа. В Средние века орган стал основным инструментом в христианских церквях, а в эпоху барокко достиг своего расцвета благодаря таким композиторам, как Иоганн Себастьян Бах. Интересный факт: некоторые органы имеют более 10 000 труб и могут занимать целые комнаты, что делает их самыми большими музыкальными инструментами в мире.'
        ],
        [
            'title' => 'Балалайка: исконный дух русской музыки',
            'body' => 'Балалайка - традиционный русский струнный инструмент, возникший в XVII веке. Её треугольная форма и три струны делают её уникальной среди струнных инструментов. Балалайка стала символом народной музыки и используется как в сольных исполнениях, так и в ансамблях. Интересный факт: в СССР балалайка стала частью обязательного музыкального образования, и ансамбли балалаек можно было найти по всей стране.'
        ],
        [
            'title' => 'Мандолина: потомок лютни',
            'body' => 'Мандолина произошла от лютни и была разработана в Италии в XVII веке. Этот инструмент обладает маленьким корпусом и восемью струнами, настроенными попарно, что создаёт уникальное звучание. Мандолина широко используется в народной и классической музыке, а также в современных жанрах, таких как блюграсс. Интересный факт: в Италии мандолина часто использовалась для исполнения серенад, что придавало ей романтическую популярность.'
        ],
        [
            'title' => 'Виолончель: магия низких частот',
            'body' => 'Виолончель была разработана в XVI веке в Италии и быстро заняла своё место в оркестровой и камерной музыке. Она обладает глубоким и богатым звуком, который используется для создания эмоциональных и выразительных мелодий. Интересный факт: виолончель часто называют "королевой струнных" из-за её широкого диапазона и способности передавать самые разнообразные эмоции.'
        ],
        [
            'title' => 'Банджо: африканские корни американской музыки',
            'body' => 'Банджо возникло в Северной Америке и имеет африканские корни. Этот инструмент был популярен среди афроамериканских рабов в XVIII веке и стал неотъемлемой частью американской народной музыки, кантри и блюграсса. Интересный факт: благодаря своему яркому и звонкому звуку банджо стало символом американской фольклорной музыки.'
        ],
        [
            'title' => 'Литавры: барабаны с нотами',
            'body' => 'Литавры - ударные инструменты, которые используются в симфоническом оркестре для создания драматического эффекта. Их история начинается в Средние века, когда они использовались в военной музыке. Современные литавры могут быть настроены на определённые ноты, что делает их уникальными среди ударных инструментов. Интересный факт: литавры часто называют "королями ударных" из-за их способности создавать мощные и глубокие звуки.'
        ],
        [
            'title' => 'Цимбалы: древний ударный инструмент Восточной Европы',
            'body' => 'Цимбалы - струнный ударный инструмент, который широко использовался в Восточной Европе. Музыкант ударяет по струнам молоточками, создавая яркое и ритмичное звучание. Этот инструмент играл важную роль в народной музыке таких стран, как Венгрия и Румыния. Интересный факт: цимбалы часто можно услышать на фестивалях народной музыки, где они являются важной частью культурного наследия.'
        ],
        [
            'title' => 'Ксилофон: деревянная мелодия',
            'body' => 'Ксилофон - ударный инструмент, состоящий из деревянных пластин, каждая из которых настроена на определённую ноту. Его история начинается в Африке и Азии, где подобные инструменты использовались в народной музыке. Современный ксилофон стал важной частью оркестровой и ансамблевой музыки. Интересный факт: ксилофон активно используется в детском музыкальном образовании благодаря своему яркому и легко узнаваемому звуку.'
        ],
        [
            'title' => 'Укулеле: гавайский символ радости',
            'body' => 'Укулеле - гавайский струнный инструмент, который возник в XIX веке на основе португальских инструментов. Укулеле стало символом гавайской музыки и быстро завоевало популярность по всему миру благодаря своему лёгкому и радостному звуку. Интересный факт: укулеле часто называют "мини-гитарой", и оно стало популярным среди музыкантов, стремящихся к необычному звучанию.'
        ],
        [
            'title' => 'Тромбон: мощь и гибкость',
            'body' => 'Тромбон был изобретён в XV веке и отличается от других духовых инструментов наличием кулисы, которая позволяет изменять высоту звука. Тромбон широко используется как в классической, так и в джазовой музыке благодаря своему мощному и выразительному звуку. Интересный факт: тромбон часто ассоциируется с церемониальной музыкой и военными маршами благодаря своему торжественному звучанию.'
        ],
        [
            'title' => 'Гобой: поющий деревянный инструмент',
            'body' => 'Гобой - деревянный духовой инструмент, который появился в XVII веке во Франции. Его яркий и проникающий звук делает гобой важным инструментом в оркестре и камерной музыке. Интересный факт: гобой часто используется для настройки оркестра, так как его чистый и устойчивый звук легко слышен среди других инструментов.'
        ],
    ];
    public function run()
    {
        for ($i = 0; $i < self::NUMBER_OF_ARTICLES; $i++) {
            Article::create([
                'title' => self::$data[$i]['title'],
                'body' => self::$data[$i]['body'],
                'thumbnail' => 'https://via.placeholder.com/150'
            ]);
        }
    }
}
