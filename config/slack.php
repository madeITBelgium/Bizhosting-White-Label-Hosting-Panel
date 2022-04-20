<?php
return [
    'app_id' => env('SLACK_APP_ID'),
    'client_id' => env('SLACK_CLIENT_ID'),
    'client_secret' => env('SLACK_CLIENT_SECRET'),
    'signing_secret' => env('SLACK_SIGNING_SECRET'),
    'url' => env('LOG_SLACK_WEBHOOK_URL'),
    'channel' => env('SLACK_CHANNEL'),
];
