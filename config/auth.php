<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | Aqui definimos o guard padrão que será usado no processo de autenticação.
    | Se você quer usar JWT como padrão, coloque 'guard' => 'api'.
    |
    */

    'defaults' => [
        'guard' => 'api',  // <== Define o guard 'api' como padrão
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Aqui definimos cada 'guard'. Normalmente, 'web' é para autenticação via
    | sessão (session driver), enquanto 'api' é para autenticação via token JWT.
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',     // <== Usa sessões (session)
            'provider' => 'users',     // <== Usa o provider 'users'
        ],

        'api' => [
            'driver' => 'jwt',         // <== Usa JWT
            'provider' => 'users',     // <== Usa o provider 'users'
            // 'hash' => false,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | Aqui definimos como os usuários são recuperados do banco (via Eloquent).
    | A classe do model é App\Models\User::class, por padrão.
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | Configurações para reset de senhas (se necessário).
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets', // Tabela que guarda tokens de reset
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Tempo (em segundos) para expirar uma confirmação de senha.
    |
    */

    'password_timeout' => 10800,

];
