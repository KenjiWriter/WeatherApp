
# Weather App

A simple weather app built with Laravel and Livewire that allows users to get the current weather for any city.

## Requirements
* PHP >= 7.4
* Laravel 8.x
* GuzzleHTTP
* Livewire


## Run Locally

Clone the repository

```bash
  git clone https://github.com/KenjiWriter/WeatherApp.git
```

Install the dependencies

```bash
  composer install
```

Generate your Weatherbit API Key and replace it in the Weather.php component

```bash
  $apiKey = 'YOUR_API_KEY_HERE';
```

Start the server

```bash
  php artisan serve
```

Visit http://localhost:8000 in your browser.

## USAGE
* Enter a city name in the form
* Select the unit you want to use (Celsius or Fahrenheit)
* Click the submit button
* The current weather for the city will be displayed on the page

## Contributing
* Fork the repository
* Create a new branch for your feature
* Make your changes
* Submit a pull request

## License

This project is open-source and is licensed under the MIT license.

## Additional Info
- The app uses the Weatherbit API to get the weather data.
- The app is built with Laravel and Livewire to handle the back-end and front-end logic respectively.
- The app includes basic validation to check if the city entered by the user exists.
