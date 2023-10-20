<?php 
    $times_updated = 0;
    $user_ip = getenv('REMOTE_ADDR');
    $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
    $country = $geo["geoplugin_countryName"];
    $city = $geo["geoplugin_city"];


    $times_updated++;
    echo "Hora: " . date("h:i:sa") . "<br>";
    echo "Data: " . date ("d/m/Y") . "<br>";
    echo "IP: " . $user_ip . "<br>";
    echo "Local: " . $country . $city;
?>