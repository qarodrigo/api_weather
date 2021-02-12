<?php

namespace App;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{

    public function getCity($request){

        $apiKey = ''; //api key openweathermap
        $weather = new Client ();

        $cityName = $request->city;
        $url = 'api.openweathermap.org/data/2.5/weather?q=' . $cityName . '&units=metric&appid=' . $apiKey . '&lang=pt_br';
        $city = $weather->request('GET', $url);
        $cityInfo = json_decode($city->getBody());
        // $selectedSongs = $this->getSongs($cityInfo->main->temp);
        return $cityInfo;

}



    public function getSongs($temp){
        $apiKey = ''; //api key spotify
        $songs = new Client();


        if($temp > 30){
            $genre = 'festa';
        }elseif($temp >= 15 and $temp <= 30 ){
            $genre = 'pop';
        }elseif($temp >=10 and $temp <= 14){
            $genre = 'rock';
        }else{
            $genre = 'musica classica';
        }
        $url = 'https://api.spotify.com/v1/search?q=' . $genre . '&type=playlist';
        $now = $songs->request('POST', $url, [
            'Authorization' => 'Bearer' . $apiKey
        ]);
        // dd($now);
        // dd(json_decode($now->getBody()));







    }



}
