<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],
    'allowed_methods' => ['*'],
    'allowed_origins' => ['http://localhost:3000'], // React's localhost
    'allowed_headers' => ['*'],
    'supports_credentials' => true,
];
