<?php
    session_start();
    $error="";
    if(isset($_SESSION['username'])){
        header('Location:profile.php');
    }
    if(isset($_POST['signin'])){
        include 'dbmanager.php';
        $db = new dbmanager;
        $con = $db->dbConnection();
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $bool=true;
        if ($db->isValidLogin($con,$username,$password)){
            $_SESSION['username']=$username;
            $row = $db->userInformation($con,$username);
            $_SESSION['dp'] = $row['dp'];
            header('Location:newsfeed.php');
            die();
        }else{
            $error = $error."Wrong username or password";
        }

    }


?>