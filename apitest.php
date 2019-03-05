<?php

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "localhost/api/getUser.php?name=ym.imwildkitten&appcode=r6strat",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    $response = json_decode($response, true); //because of true, it's in an array
    echo $response['players']['mmr'];
?>