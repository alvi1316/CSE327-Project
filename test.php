<?php
    include 'dbmanager.php';
    $db = new dbmanager();
    $con = $db->dbConnection();
    $row = $db->searchAllFriends($con,'deadhead1316');
    foreach ($row as $i){
        foreach ($i as $j){
            echo $j."<br>";
        }
    }