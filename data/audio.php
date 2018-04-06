<?php
/* АЛЬБОМЫ

 * title - название
 * slug - для читаемого якоря например ci_chuesh
 * year - год издания
 * img - обложка альбома
 * soundcloud_iframe - player с сайта soundcloud (кнопка share -> вкладка embed -> скопировать код)
 * description - поле Авторы
 * tracks - перечень треков в правильном порядке
 */
$albums = [
    [
        "title" => "Выявы",
        "slug" => "viavi",
        "year" => "2014",
        "img" => "/img/albums/viyavi.jpg",
        "soundcloud_iframe" => '<div id="sound" data-columns="playlists/47396066"></div>',
        "description" => "Дебютный триптих группы. Три песни, три рисунка нашей реальности в разных ракурсах. Диск содержит живую запись в видео- и аудио-форматах.",
        "tracks" => ["Як мае быць", "Кактэбель", "Сустрэнь мяне (Джэм)"],
    ],
/*    [
        "title" => "Татачка",
        "slug" => "tatachka",
        "year" => "2015",
        "img" => "/img/albums/tatachka.jpg",
        "soundcloud_iframe" => '<div id="sound" data-columns="playlists/179766864"></div>',
        "description" => "Предвестник первой части трилогии. Сила и нежность – то, что вдохновляет жизнь продолжаться. Стоит услышать.",
        "tracks" => ["Верыш", "Iльняная", "Зямлiца", "Татачка", "Маценька", "Сцяжынка"],
    ],*/
    [
        "title" => "Ці чуеш",
        "slug" => "ci_chuesh",
        "year" => "2015",
        "img" => "/img/albums/ci_chuesh.jpg",
        "soundcloud_iframe" => '<div id="sound" data-columns="playlists/179766864"></div>',
        "description" => "Как слышится, так и пишется. Как живётся, так и играется. Как мечтается, так и поётся. Что мы хотели сказать этим альбомом? Что-то вроде того, что сказали бы вам травы и деревья, птицы и ручьи, что стоят, бегут, растут и гнездятся в этой земле. Дети – родители – внуки – это не хронология, это метафизическое состояние каждого из нас. Тут песни не про влюблённость. Тут песни про Любовь. Они не дают надежды, они крепят веру. Вот вам наш бесплотный спутник в путешествии сквозь будни и праздники.",
        "tracks" => ["Верыш", "Iльняная", "Зямлiца", "Татачка", "Маценька", "Сцяжынка"],
    ],
    [
        "title" => "Як нiколi раней",
        "slug" => "yak_nikoli",
        "year" => "2017",
        "img" => "/img/albums/yak_nikoli.jpg",
        "soundcloud_iframe" => '<div id="sound" data-columns="tracks/286555306"></div>',
        "description" => "Наш подарок слушателям, - чтобы в сумраке городских будней они могли лишний раз почувствовать романтику и вдохновение.",
        "tracks" => ["Як нiколi раней"],
    ],
    [
        "title" => "Reset",
        "slug" => "reset",
        "year" => "2017",
        "img" => "/img/albums/reset.jpg",
        "soundcloud_iframe" => '<div id="sound" data-columns="tracks/331330747"></div>',
        "description" => "Предвестник второй части трилогии. Жизнь начинается не единожды. Расставание с живыми бывает более сложным, чем с умершими. Драматический вальс для оптимистов.",
        "tracks" => ["Reset"],
    ],

//  ШАБЛОН ДЛЯ ДОБАВЛЕНИЯ НОВОГО АЛЬБОМА
//    [
//        "title" => "",
//        "slug" => "",
//        "year" => "",
//        "img" => "",
//        "soundcloud_iframe" => "",
//        "description" => "",
//        "tracks" => ["", "", ""],
//    ],
];

//Первоночальный плеер soundcloud в разделе "Слушать"
$default_player = "<div id=\"default_player\" data-columns=\"users/55015942\"></div>";