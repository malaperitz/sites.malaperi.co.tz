<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => true,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'sitecategory' => 'r,u,d,c',
            'profile' => 'r,u',
        ],
    'administrator' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u',
            'site' => 'r,u,d,c',
            'sitecategory' => 'r,u,d,c',
        ],
        'user' => [
            'site' => 'r,',
            'sitecategory' => 'r',
            'profile' => 'r,u',
        ],
        'guest' => [
            'site' => 'r',
            'sitecategory' => 'r,u,d,c',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
