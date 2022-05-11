<?php

namespace App\Console\Commands;

use App\Models\Province;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class FetchProvince extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:province';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch Province Data from API and Insert to Database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $resource = Http::withHeaders(['key' => '0df6d5bf733214af6c6644eb8717c92c'])->get('https://api.rajaongkir.com/starter/province');
        $result = $resource->collect();
        $rajaongkir = $result['rajaongkir'];
        $province = $rajaongkir['results'];

        foreach ($province as $elem) {
            Province::create([
                'province_id' => $elem['province_id'],
                'province' => $elem['province']
            ]);
        }
        $this->info('Successful');
    }
}
