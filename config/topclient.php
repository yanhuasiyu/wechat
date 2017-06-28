<?php
return [

    'default' => 'app',

    'connections' => [
        'app' => [
            'app_key'       => env('TAOBAO_APP_KEY', 'APP KEY'),
            'app_secret'    => env('TAOBAO_APP_SECRET', 'APP SECRET'),
            'format'        => 'json',
        ]
    ]
];