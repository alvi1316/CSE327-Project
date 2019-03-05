<?php
    include 'dbmanager.php';
    $db = new dbmanager();
    $con = $db->dbConnection();
    $row = $db->readUserPost($con,"deadhead1316");
    for($i=0;$i<count($row);$i++){
        for($j=0;$j<count($row[$i]);$j++){
            echo $row[$i][$j]."<br>";
        }
    }
?>