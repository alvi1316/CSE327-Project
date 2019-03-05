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
            header('Location:profile.php');
            die();
        }else{
            $error = $error."Wrong username or password";
        }

    }


?>