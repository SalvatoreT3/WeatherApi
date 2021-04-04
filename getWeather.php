<?php

$city = '';
$weather = '';
$error = '';

if ($_GET['city']) {

    $urlContents = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=" . $_GET['city'] . "&appid=6bf82e9a3e76409377e6b2a956c11054");

    $weatherArray = json_decode($urlContents, true);

    if ($weatherArray['cod'] == 200) {
        $weather = "The weather in " . $_GET['city'] . " is currently '" . $weatherArray['weather'][0]['description'] . "'.";

        $tempInCelsius = intval($weatherArray['main']['temp'] - 273);

        $weather .= "The temperature is " . $tempInCelsius . "&deg;C and the wind speed is " . $weatherArray['wind']['speed'] . ".";
    } else {
        $error = "Could not find city - please try again";
    }
}
