<?php

declare(strict_types=1);

return [
    'connection' => env('INISIATIF_DONOR_CONNECTION', env('DB_CONNECTION', 'sqlite')),

    'table' => env('INISIATIF_DONOR_TABLE', 'donors'),

    'migration' => env('INISIATIF_DONOR_TABLE_MIGRATION', false),

    'model' => Inisiatif\InisiatifDonor\Models\Donor::class,

    'columns' => [
        'names' => [
            'id' => 'id',
            'identification_number' => 'identification_number',
            'name' => 'name',
            'email' => 'email',
            'phone' => 'phone',
        ],

        'masking_email' => true,

        'masking_phone_number' => true,
    ],

    'relation' => [
        'migration' => env('INISIATIF_DONOR_RELATION_TABLE_MIGRATION', false),

        'branch' => [
            'model' => Inisiatif\InisiatifDonor\Models\Branch::class,

            'columns' => [
                'id' => 'id',
                'name' => 'name',
            ],
        ],

        'employee' => [
            'model' => Inisiatif\InisiatifDonor\Models\Employee::class,

            'columns' => [
                'id' => 'id',
                'name' => 'name',
            ],
        ],

        'phone' => [
            'model' => Inisiatif\InisiatifDonor\Models\Phone::class,

            'columns' => [
                'id' => 'id',
                'number' => 'number',
                'is_support_whatsapp' => 'is_support_whatsapp',
            ],
        ],
    ],
];
