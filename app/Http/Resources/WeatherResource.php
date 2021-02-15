<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WeatherResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        // dd($this);
        return [
            "Temperatura" => [
                'Temperatura Atual' => $this->resource["Cidade"]->main->temp . '°C',
                'Cidade' => $this->resource["Cidade"]->name,
            ],
            "Playlists" => [
                'Links' => $this->resource["Playlists"],
            ]
         ];
    }
}
