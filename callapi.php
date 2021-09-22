<?php
    $key = "";
    $url = "http://api.weatherapi.com/v1/current.json?key=" . $key . "&q=" . $location . "&aqi=no";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);

    //echo $output;
    if ($output == false)
        echo "Erreur";
    else
    {
        $reuslt = json_decode($output, true);
        $country =  $reuslt['location']['country'];
        $city =     $reuslt['location']['name'];
        $time =     $reuslt['location']['localtime'];
    }
    echo $country;
    echo $city;
    echo $time;

?>