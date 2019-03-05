<?php
    session_start();
    if(isset($_SESSION['username'])){
        include 'dbmanager.php';
        $username = $_SESSION["username"];
        $db = new dbmanager;
        $con=$db->dbConnection();
        $userinfo = $db->userInformation($con,$username);
        $dp = $userinfo['dp'];
        $row = $db->readUserPost($con,$username);

    }else{
        header('Location:index.php');
        die();
    }


?>