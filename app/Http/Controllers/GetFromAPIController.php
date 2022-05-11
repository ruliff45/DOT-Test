<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GetFromAPIController extends Controller
{
    public function getProvince()
    {
        $response = Http::withHeaders(['key' => '0df6d5bf733214af6c6644eb8717c92c'])->get('https://api.rajaongkir.com/starter/province');
        return response()->json($response->body());
    }

    public function getCity()
    {
        $response = Http::withHeaders(['key' => '0df6d5bf733214af6c6644eb8717c92c'])->get('https://api.rajaongkir.com/starter/city');
        return response()->json($response->body());
    }

    public function getSpecificCity($id)
    {
        $city = City::find($id);
        return response()->json($city);
    }

    public function getSpecificProvince($id)
    {
        $province = Province::where('province_id', $id)->get();
        return response()->json($province);
    }
}
