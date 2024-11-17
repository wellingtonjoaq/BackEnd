<?php

return [

    'paths' => ['api/*', 'sanctum/csrf-cookie'], // Rotas onde o CORS será aplicado

    'allowed_methods' => ['*'], // Métodos permitidos

    'allowed_origins' => ['*'], // Permitir todas as origens (ou especifique como ['http://seu-site.com'])

    'allowed_origins_patterns' => [], // Padrões de origens permitidas

    'allowed_headers' => ['*'], // Headers permitidos

    'exposed_headers' => [], // Headers expostos para o frontend

    'max_age' => 0, // Tempo máximo de cache para o navegador

    'supports_credentials' => true, // Para habilitar cookies entre origens
];

