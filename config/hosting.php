<?php

return [
    'features' => [
        'domainnames' => true,
        'hosting' => true,
        'vps' => true,
    ],

    'hosting_packages' => [
        '1GB' => [
            'name' => '1GB',
            'diskspace' => 1000,
            'subdomains' => 1,
            'mailaccounts' => 10,
            'databases' => 1,
            'include_domainname' => 0,
            'managed' => false,
            'price' => 2,
            'public' => false,
        ],
        '2GB_MANAGED' => [
            'name' => '2GB',
            'diskspace' => 2000,
            'subdomains' => 1,
            'mailaccounts' => 50,
            'databases' => 1,
            'include_domainname' => 1,
            'managed' => true,
            'price' => 10,
            'public' => true,
        ],
        '5GB_MANAGED' => [
            'name' => '5GB',
            'diskspace' => 5000,
            'subdomains' => 3,
            'mailaccounts' => 50,
            'databases' => 5,
            'include_domainname' => 1,
            'managed' => true,
            'price' => 17.5,
            'public' => true,
        ],
        '10GB_MANAGED' => [
            'name' => '10GB',
            'diskspace' => 10000,
            'subdomains' => 5,
            'mailaccounts' => 50,
            'databases' => 10,
            'include_domainname' => 1,
            'managed' => true,
            'price' => 25,
            'public' => true,
        ],
    ],

    'team' => \App\Models\Team::class,

    'domainname_fee' => 2, //Price * 2

    'templates' => [
        "default" => 'Default',
        "drupal6" => 'Drupal 6',
        "drupal7" => 'Drupal 7',
        "drupal8" => 'Drupal 8',
        "joomla" => 'Joomla',
        "laravel" => 'Laravel',
        "magento" => 'Magento',
        "wordpress2_rewrite" => 'WordPress',
    ],

    'invoice_actions' => [
        \MadeITBelgium\Hosting\Action\InvoiceNumber::class,
        \MadeITBelgium\Hosting\Action\MailInvoice::class,
    ],

    'admin_email' => env('APP_CONTACT_EMAIL', 'info@example.com'),
];
