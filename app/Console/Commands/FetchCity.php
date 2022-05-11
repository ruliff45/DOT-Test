<?php

namespace App\Console\Commands;

use App\Models\City;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Nette\Utils\Json;

class FetchCity extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:city';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch City Data From API and insert to Database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $resource = Http::withHeaders(['key' => '0df6d5bf733214af6c6644eb8717c92c'])->get('https://api.rajaongkir.com/starter/city');
        $result = $resource->collect();
        $rajaongkir = $result['rajaongkir'];
        $city = $rajaongkir['results'];

        foreach ($city as $elem) {
            City::create($elem);
        }
        $this->info('Successful');
    }
}
