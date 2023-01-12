<div>
    <form wire:submit.prevent="getWeatherData">
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" wire:model="city" placeholder="Enter city name">
        </div>
        <div class="form-group">
            <label for="unit">Unit</label>
            <select class="form-control" id="unit" wire:model="unit">
                <option value="metric">Celsius</option>
                <option value="imperial">Fahrenheit</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="mt-3">
        @if($data)
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
        @endif
    </div>
</div>
