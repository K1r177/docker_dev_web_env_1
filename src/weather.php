<?php

function getRequest($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}

function getWeather($city, $apiKey) {
    $url = "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}";
    $response = getRequest($url);
    $data = json_decode($response, true);
    return $data;
}

$city = "Stavropol";
$apiKey = "5f6237bac8ef125c331aa66fa0dbf647";
$weatherData = getWeather($city, $apiKey);
/* echo"<pre>";
print_r($weatherData);
echo"</pre>"; */

echo "Weather in " . $weatherData['name'] . ":\n";
echo "Temperature: " . ($weatherData['main']['temp'] - 273.15) . "°C\n";
echo "Weather: " . $weatherData['weather'][0]['description'] . "\n";

?>