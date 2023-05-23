<?php

return [
    'merchant_id' => env('MERCHANT_ID', 'JT02'),
    'secret_key' => env('SECRET_KEY', '72B8F060B3B923E580411200068A764610F61034AE729AB9EF20CAFF93AFA1B9'),
    'currency_code' => 'MMK',
    'payment_channel' => ['CC', 'MPU', 'QR', 'DPAY', 'IMBANK'],
    'frontend_result_url' => env('RESULT_URL_1', 'http://project.test/checkout'),
    'backend_result_url' => env('RESULT_URL_2', 'http://project.test/checkout'),
    'gateway_url' => [
        'url' => env('BASE_URL', 'https://sandbox-pgw.2c2p.com/payment/4.1'),
        'token' => '/paymentToken',
        'inquiry' => '/paymentInquiry'
    ],
    'locale' => "mm"
];