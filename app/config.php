<?php
declare(strict_types=1);

return [
    'app_name' => 'UATM GASA',
    'app_url' => getenv('APP_URL') ?: 'http://localhost/uatm_memoires',
    'db_host' => getenv('DB_HOST') ?: '127.0.0.1',
    'db_name' => getenv('DB_NAME') ?: 'uatm_memoires',
    'db_user' => getenv('DB_USER') ?: 'root',
    'db_pass' => getenv('DB_PASS') ?: '',
    'db_charset' => 'utf8mb4',
    'mail_from' => getenv('MAIL_FROM') ?: 'noreply@uatm.edu',
    'mail_from_name' => 'UATM GASA',
    'upload_max_size' => 10 * 1024 * 1024,
    'allowed_pdf' => ['application/pdf'],
    'allowed_word' => [
        'application/msword',
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
    ],
    'allowed_images' => ['image/jpeg', 'image/png', 'image/webp'],
];
