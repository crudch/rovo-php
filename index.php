<?php require __DIR__ . '/functions.php';

$categories = [
    'Доски и лыжи',
    'Крепления',
    'Ботинки',
    'Одежда',
    'Инструменты',
    'Разное',
];

$ads = [
    [
        'name' => '2014 Rossignol District Snowboard',
        'category' => 'Доски и лыжи',
        'cost' => '10999',
        'image_url' => 'img/lot-1.jpg',
    ],
    [
        'name' => 'DC Ply Mens 2016/2017 Snowboard',
        'category' => 'Доски и лыжи',
        'cost' => '159999',
        'image_url' => 'img/lot-2.jpg',
    ],
    [
        'name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'category' => 'Крепления',
        'cost' => '8000',
        'image_url' => 'img/lot-3.jpg',
    ],
    [
        'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'category' => 'Ботинки',
        'cost' => '10999',
        'image_url' => 'img/lot-4.jpg',
    ],
    [
        'name' => 'Курта для сноуборда DC Mutiny Charocal',
        'category' => 'Одежда',
        'cost' => '7500',
        'image_url' => 'img/lot-5.jpg',
    ],
    [
        'name' => 'Маска Oakley Canopy',
        'category' => 'Разное',
        'cost' => '5400',
        'image_url' => 'img/lot-6.jpg',
    ],
];

$page_content = renderTemplate('/templates/main.php',
    [
        'categories' => $categories,
        'ads' => $ads
    ]);

echo $layout_content = renderTemplate('/templates/layout.php',
    [
    'content' => $page_content,
    'categories' => $categories,
    'title' => 'Главная'
    ]);