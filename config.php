<?php

return [
    'baseUrl' => '',
    'production' => false,
    'collections' => [
        'posts' => [
            'path' => '{collection}/{date|Y/m/d}/{-title}',
            'sort' => '-date',
            'extends' => '_layouts.post',
        ]
    ]
];
