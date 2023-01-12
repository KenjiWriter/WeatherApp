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
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1>Weather for {{ $data['name'] }}, {{ $data['sys']['country'] }}</h1>
            </div>
            <div class="card-body">
                <p class="card-text">Temperature: {{ $data['main']['temp'] }} &#8457;</p>
                <p class="card-text">Humidity: {{ $data['main']['humidity'] }}%</p>
                <p class="card-text">Wind Speed: {{ $data['wind']['speed'] }}mph</p>
                <p class="card-text">Description: {{ $data['weather'][0]['description'] }}</p>
            </div>
        </div>
    </div>
</body>
</html>