<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Weather App</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container">
        <div><h1>Advanced Weather App</h1></div>
        <form method="post">
            <div class="icon-input">
                <i class="fas fa-cloud-sun" style="color: #fca311;"></i>
                <input type="text" name="city" placeholder="Enter City Name" required>
            </div>
            <button type="submit">Get Weather</button>
        </form>
        <div class="weather">
            <?php
            if (isset($_POST['city'])) {
                $city = htmlspecialchars($_POST['city']);
                $apiKey = "fa371e07cfa5da9cec7e047065e9db7d";
                $url = "http://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}";
                
                $data = @file_get_contents($url);
                if ($data) {
                    $weatherData = json_decode($data);
                    if ($weatherData->cod == 200) {
                        $temp = $weatherData->main->temp - 273.15;
                        $temp = round($temp, 2);
                        $description = $weatherData->weather[0]->description;
                        echo "<h2>City: $city</h2>";
                        echo "<h2>Temperature: $temp °C</h2>";
                        echo "<h2>Weather: $description</h2>";
                    } else {
                        echo "<h1>City not found. Please try again.</h1>";
                    }
                } else {
                    echo "<h1>Unable to fetch weather data.</h1>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>