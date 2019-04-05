<?php
    include 'dbmanager.php';
    session_start();
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        $dp = $_SESSION['dp'];
        $searchUsername = $_POST['searchkey'];
        $db = new dbmanager();
        $con = $db->dbConnection();
        $row = $db->searchUsers($con,$searchUsername);

    }else{
        header('Location: index.php');
    }
?>