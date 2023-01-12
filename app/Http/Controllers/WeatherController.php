<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WeatherController extends Controller
{
    public function index($city, $unit)
    {
        $client = new Client();
        $apiKey = 'ed9c834f18304b68880ee2f5184272a5';
        if(!empty($city)) {
            $response = $client->get("https://api.weatherbit.io/v2.0/current?city={$city}&units={$unit}&key={$apiKey}");
            $data = json_decode($response->getBody(), true);
            if ($unit == 'metric') {
                $data['data'][0]['temp'] = round(($data['data'][0]['temp'] - 32) * 5/9, 2);
                $data['data'][0]['unit'] = "Celsius";
            } else {
                $data['data'][0]['unit'] = "Fahrenheit";
            }
            return view('weather', ['data' => $data]);
        } else {
            return view('weather');
        }
    }
}
