<?php

namespace App;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{

    public function getCity($request){

        $apiKey = 'e486bb0c678a072b99d1423ee0185d60'; //api key openweathermap
        $weather = new Client ();

        $cityName = $request->city;
        $url = 'api.openweathermap.org/data/2.5/weather?q=' . $cityName . '&units=metric&appid=' . $apiKey . '&lang=pt_br';
        $city = $weather->request('GET', $url);
        $cityInfo = json_decode($city->getBody());
        $selectedSongs = $this->getSongs($cityInfo->main->temp);

        return $response = [
            "Cidade" => $cityInfo,
            "Playlists" => $selectedSongs,
        ];

}



    public function getSongs($temp){
        $playlists = [];
        $songs = new Client();


        if($temp > 30){
            $genre = 'Festa';
        }elseif($temp >= 15 and $temp <= 30 ){
            $genre = 'Pop';
        }elseif($temp >=10 and $temp <= 14){
            $genre = 'Rock';
        }else{
            $genre = 'Musica Classica';
        }
        $url = 'https://api.deezer.com/search/playlist?q=' . $genre;
        $resonseTracks = $songs->request('GET', $url);

        $urlTracks = json_decode($resonseTracks->getBody());

        for($i=0; $i<3 ; $i++){
            array_push($playlists, $urlTracks->data[$i]->link);
        }
        return $playlists;


    }



}
