<?php

return [
    'defaultRoute' => 'test',
    'aliases' => [
        'repo' => '/repo',
        'tests/app' => '@repo/tests/_app',
        'ovidiupop/adminlte' => '@repo',
        '@ovidiupop/adminlte/web' => '@ovidiupop/adminlte/web',
        '@ovidiupop/adminlte/widgets' => '@ovidiupop/adminlte/widgets',
        '@ovidiupop/adminlte/helpers' => '@ovidiupop/adminlte/helpers',
    ],
    'controllerNamespace' => 'tests\app\controllers',
    'components' => [
        'urlManager' => [
            'rules' => [
                'param/<id>' => 'sub/action/param'
            ]
        ]
    ]
];