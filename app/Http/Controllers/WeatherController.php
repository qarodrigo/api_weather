<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\WeatherResource;
use App\Weather;

class WeatherController extends Controller
{

    public function show(Request $request)
    {

    $weather = new Weather();
    if($request->city){
        $response = $weather->getCity($request);
        return response()->json( new WeatherResource($response));
    }
    else{
        return(response('Infome de qual cidade deseja saber a temperatura.', 400));
    }

    }


}
