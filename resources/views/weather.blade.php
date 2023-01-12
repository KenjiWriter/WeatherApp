<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Weather APP By Wenzzi</title>
</head>
<body>
    @isset($data)
        <div class="container mt-5">
            <div class="card">
                <div class="card-header">
                    <h1>Weather for {{ $data['data'][0]['city_name'] }}, {{ $data['data'][0]['country_code'] }}</h1>
                </div>
                <div class="card-body">
                    <p class="card-text">Temperature: {{ $data['data'][0]['temp'] }} {{$data['data'][0]['unit']}}</p>
                    <p class="card-text">Weather Description: {{ $data['data'][0]['weather']['description'] }}</p>
                    <p class="card-text">Wind Speed: {{ $data['data'][0]['wind_spd'] }} {{$data['data'][0]['wind_cdir']}}</p>
                    <p class="card-text">Humidity: {{ $data['data'][0]['rh'] }}%</p>
                </div>
            </div>
        </div>
    @endisset
</body>
</html>