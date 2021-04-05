<?php

$city = '';
$weather = '';
$error = '';

if ($_GET['city']) {

    $urlContents = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=" . $_GET['city'] . "&appid={APIOpenWeather}." );

    $weatherArray = json_decode($urlContents, true);

    if ($weatherArray['cod'] == 200) {
        $weather = "The weather in " . $_GET['city'] . " is currently '" . $weatherArray['weather'][0]['description'] . "'.";

        $tempInCelsius = intval($weatherArray['main']['temp'] - 273);

        $weather .= "The temperature is " . $tempInCelsius . "&deg;C and the wind speed is " . $weatherArray['wind']['speed'] . ".";
    } else {
        $error = "Could not find city - please try again";
    }
}
