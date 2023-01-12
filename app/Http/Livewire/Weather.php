<?php

namespace App\Http\Livewire;

use GuzzleHttp\Client;
use Livewire\Component;

class Weather extends Component
{
    public $city;
    public $unit;
    public $data;
    public function mount()
    {
        $this->unit = 'metric';
    }
    public function getWeatherData()
    {
        $client = new Client();
        $apiKey = 'ed9c834f18304b68880ee2f5184272a5';
        $response = $client->get("https://api.weatherbit.io/v2.0/current?city={$this->city}&key={$apiKey}");
        $this->data = json_decode($response->getBody(), true);
        if ($this->unit == 'metric') {
            $this->data['data'][0]['temp'] = round(($this->data['data'][0]['temp'] - 32) * 5/9, 2);
            $this->data['data'][0]['unit'] = "Celsius";
        } else {
            $this->data['data'][0]['unit'] = "Fahrenheit";
        }
    }
    public function render()
    {
        return view('livewire.weather');
    }
}
