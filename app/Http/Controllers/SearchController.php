<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    public function swapableImplementation(Request $request)
    {
        $result = $request->query();
        if ($result['category'] === 'city') {
            if ($result['src'] === 'api') {
                $api = Http::withHeaders(['key' => '0df6d5bf733214af6c6644eb8717c92c'])->get('https://api.rajaongkir.com/starter/city?id=' . $result['id']);
                return response()->json($api->body());
            } else if ($result['src'] === 'db' || $result['src'] === null) {
                $db = City::find($result['id']);
                return response()->json($db);
            }
        } else if ($result['category'] === 'province') {
            if ($result['src'] === 'api') {
                $api = Http::withHeaders(['key' => '0df6d5bf733214af6c6644eb8717c92c'])->get('https://api.rajaongkir.com/starter/province?id=' . $result['id']);
                return response()->json($api->body());
            } else if ($result['src'] === 'db' || $result['src'] === null) {
                $db = Province::where('province_id', $result['id'])->get();
                return response()->json($db);
            }
        }
    }

    public function authorizeSearch(Request $request)
    {
        $result = $request->query();
        if (Gate::allows('is-authenticated', auth()->user())) {
            if ($result['category'] === 'city') {
                if ($result['src'] === 'api') {
                    $api = Http::withHeaders(['key' => '0df6d5bf733214af6c6644eb8717c92c'])->get('https://api.rajaongkir.com/starter/city?id=' . $result['id']);
                    return response()->json($api->body());
                } else if ($result['src'] === 'db' || $result['src'] === null) {
                    $db = City::find($result['id']);
                    return response()->json($db);
                }
            } else if ($result['category'] === 'province') {
                if ($result['src'] === 'api') {
                    $api = Http::withHeaders(['key' => '0df6d5bf733214af6c6644eb8717c92c'])->get('https://api.rajaongkir.com/starter/province?id=' . $result['id']);
                    return response()->json($api->body());
                } else if ($result['src'] === 'db' || $result['src'] === null) {
                    $db = Province::where('province_id', $result['id'])->get();
                    return response()->json($db);
                }
            }
        }else abort(403);
    }
}
