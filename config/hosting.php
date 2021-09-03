<?php

return [
    'features' => [
        'domainnames' => true,
        'hosting' => true,
        'vps' => true,
    ],

    'hosting_packages' => [
        '3GB' => [
            'name' => '3GB',
            'diskspace' => 3000,
            'subdomains' => 1,
            'mailaccounts' => 10,
            'databases' => 1,
            'include_domainname' => 0,
            'managed' => false,
            'price' => 5,
            'public' => true,
        ],
        '5GB' => [
            'name' => '5GB',
            'diskspace' => 5000,
            'subdomains' => 1,
            'mailaccounts' => 10,
            'databases' => 1,
            'include_domainname' => 0,
            'managed' => false,
            'price' => 8,
            'public' => true,
        ],
        '15GB' => [
            'name' => '15GB',
            'diskspace' => 15000,
            'subdomains' => 1,
            'mailaccounts' => 10,
            'databases' => 1,
            'include_domainname' => 0,
            'managed' => false,
            'price' => 20,
            'public' => true,
        ],
        '3GB_MANAGED' => [
            'name' => '3GB',
            'diskspace' => 3000,
            'subdomains' => 1,
            'mailaccounts' => 50,
            'databases' => 1,
            'include_domainname' => 1,
            'managed' => true,
            'price' => 25,
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
            'price' => 40,
            'public' => true,
        ],
        '15GB_MANAGED' => [
            'name' => '15GB',
            'diskspace' => 15000,
            'subdomains' => 5,
            'mailaccounts' => 50,
            'databases' => 10,
            'include_domainname' => 1,
            'managed' => true,
            'price' => 75,
            'public' => true,
        ],
    ],

    'team' => \App\Models\Team::class,

    'domainname_fee' => 2.2, //Price * 2

    'templates' => [
        "default" => 'Default',
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
