<?php
    include 'dbmanager.php';
    $db=new dbmanager();
    $con=$db->dbConnection();
    $row=$db->writeUserComment($con,'deadhead1316',11,'meaw');
?>