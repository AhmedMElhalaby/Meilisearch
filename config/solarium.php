<?php
return [

    'endpoint' => [

        'localhost' => [

            'host' => env('SOLARIUM_HOST', '127.0.0.1'),

            'port' => env('SOLARIUM_PORT', 8983),

            'path' => env('SOLARIUM_PATH', '/solr'),

            'core' => env('SOLARIUM_CORE', 'test'),

        ]

    ]
];
