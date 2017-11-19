<?php
return [
    'user' => [
        'type' => 1,
        'children' => [
            'updateOwnInfoUser',
        ],
    ],
    'admin' => [
        'type' => 1,
        'children' => [
            'listUser',
            'createUser',
            'updateUser',
            'updateOwnInfoUser',
            'deleteUser',
        ],
    ],
    'dashboardSite' => [
        'type' => 2,
    ],
    'listUser' => [
        'type' => 2,
    ],
    'createUser' => [
        'type' => 2,
    ],
    'updateUser' => [
        'type' => 2,
    ],
    'updateOwnInfoUser' => [
        'type' => 2,
    ],
    'deleteUser' => [
        'type' => 2,
    ],
];
