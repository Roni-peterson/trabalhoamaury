<?php
    $url = "http://165.22.142.228:1602/feednews";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    $resultado = json_decode(curl_exec($ch));
    var_dump($resultado);
