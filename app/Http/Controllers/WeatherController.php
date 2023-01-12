<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WeatherController extends Controller
{
    public function index()
    {
        $client = new Client();
        $apiKey = '4346aa1afacacb5c623f2a583f30e617';
        $city = 'San Francisco';
        $response = $client->get("http://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=imperial");
        $data = json_decode($response->getBody(), true);
        
        return view('weather', ['data' => $data]);
    }
}
