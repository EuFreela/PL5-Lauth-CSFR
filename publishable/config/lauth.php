<?php

return[

    'CALLBACK_MAIL_URL_CONFIRM' => env('APP_URL'). ':8000/login/account/confirm-token/',
    'EMAIL_FROM_CONFIRM' => 'lauth@lameck.com',
    'EMAIL_SUBJECT_CONFIRM' => 'Lauth - Validação de Email',
    'EMAIL_VIEW_CONFIRM' => 'Lameck\Lauth::mail.confirm-register',

    'CALLBACK_MAIL_URL_FORGOT' => env('APP_URL'). ':8000/login/account/forgot-token/',
    'EMAIL_FROM_FORGOT' => 'lauth@lameck.com',
    'EMAIL_SUBJECT_FORGOT' => 'Lauth - Redefinição de Senha',
    'EMAIL_VIEW_FORGOT' => 'Lameck\Lauth::mail.forgot',
    'EMAIL_VIEW_NEWKEY' => 'Lameck\Lauth::user.new-key',

    'CALLBACK_SIGNIN_SIGNUP_SUCCESS' => env('APP_URL'). ':8000/login/account/login/account/signin',
    'CALLBACK_SIGNIN_SIGNUP_ERROR' => env('APP_URL'). ':8000/login/account/login/account/signin/',
    'CALLBACK_LOGOUT' => env('APP_URL'). ':8000/login/account/login/account/signin/',

];