<?php

return [
    'role_structure' => [
        'superadministrator' => [
            'administrators' => 'c,r,u,d',
            'acl' => 'c,r,u,d',
            'profile' => 'c,r,u',
            'item'=>'c,r,u,d'
        ],
        'administrator' => [

            'profile' => 'r,u',
            'item'=>'c,r,u,d'
        ],

    ],
    'permission_structure' => [
        'cru_user' => [
            'profile' => 'c,r,u'
        ],
        'read_user' => [
            'profile' => 'r,u'
        ],
        'del_user' => [
            'profile' => 'r,d'
        ],

    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
