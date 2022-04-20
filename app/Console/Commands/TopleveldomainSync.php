<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use MadeITBelgium\Bizhosting\Facade\Bizhosting;
use MadeITBelgium\Hosting\Models\Topleveldomain;

class TopleveldomainSync extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'topleveldomain:sync-v2';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $page = 1;
        $results = 0;
        do {
            $data = Bizhosting::topleveldomain()->list($page);
            $results = count($data->data);

            if ($results > 0) {
                foreach ($data->data as $data) {
                    $price = ceil($data->sell_price * config('hosting.domainname_fee'));
                    Topleveldomain::updateOrCreate([
                        'remote_id' => $data->id,
                        'name' => $data->name,
                    ], [
                        "buy_price" => $data->sell_price,
                        "sell_price" => $price,
                    ]);
                }
            }
            $page++;
        } while ($results > 0);
    }
}
