<?php

namespace App\Actions;

use Exception;
use Maknz\Slack\Client;

class Slack
{
    public static function send($message)
    {
        $settings = [
            'username' => config('app.name') . ' - ' . config('app.env'),
            'icon' => 'https://ui-avatars.com/api/?name=' . config('app.name') . '&color=4A85C5&background=EBF4FF',
            'link_names' => true,
            'channel' => config('slack.channel'),
        ];

        $url = config('slack.url');
        
        try {
            $client = new \Maknz\Slack\Client($url, $settings);
            $client->send($message);
        } catch (Exception) {}
    }
}
