<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

const BASE_DIR = __DIR__;

require_once BASE_DIR . '/vendor/autoload.php';

require_once BASE_DIR . '/configs/constants.php';

$data = [
    'about' => [
        'title' => 'About Us',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
eiusmod tempor incididunt ut labore dolore magna aliqua.',
        'copyright' => 'Copyright ©2023 All rights reserved'


    ],
    'form' => [
        'title' => 'Newsletter',
        'description' => 'Stay update with our latest',

    ],
    'follow' => [
        'title' => 'Follow Us',
        'description' => 'Let us be social',
        'socials' => [
            [
                'href' => 'https://facebook.com',
                'icon' => 'fab fa-facebook',

            ],
            [
                'href' => 'https://twitter.com',
                'icon' => 'fab fa-twitter',

            ],
            [
                'href' => 'https://instagram.com',
                'icon' => 'fab fa-dribbble',

            ],
            [
                'href' => 'https://linkedin.com',
                'icon' => 'fab fa-behance',

            ],
        ]

    ]

];

dd(json_encode($data));


try {
    require_once APP_DIR . '/index.php';

    require_once BASE_DIR . '/configs/router.php';

} catch (Exception $exception) {
    d($exception->getCode() . ' - "' . $exception->getMessage() . '"');
}