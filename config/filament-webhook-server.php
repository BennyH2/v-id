<?php

return [
    /*
     *  Models that you want to be part of the webhooks options
     */
    'models' => [
        \App\Models\User::class,
        \App\Models\staff::class,
        \App\Models\staff_prints::class,

    ],
    /*
     */
    'polling' => '10s',
    'webhook' => [
        'keep_history' => false,
    ],

    "group" => "System",
];
