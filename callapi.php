<?php
    $key = "";
    $url = "http://api.weatherapi.com/v1/current.json?key=" . $key . "&q=" . $location . "&aqi=no";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);

    echo $output;
?>