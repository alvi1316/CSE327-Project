<?php
    session_start();
    $error="";
    if(isset($_SESSION['username'])){
        header('Location:profile.php');
    }
    if(isset($_POST['signup'])){
        include 'dbmanager.php';
        $db = new dbmanager;
        $con = $db->dbConnection();
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $dp = $_POST['dp'];
        $bool=true;
        if (preg_match("/^[\w]{6,12}$/i", $username) && preg_match("/^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,15})(\.[a-z]{2,15})?$/", $email) && preg_match("/^[\w]{8,20}$/i", $_POST['password'])) {
            if (!$db->isUniqueUsername($con, $username)){
                $error = $error."Username Exists";
                $bool=FALSE;
            }
            if (!$db->isUniquePassword($con, $email)){
                $error = $error."</br> Email Exists";
                $bool=FALSE;
            }
            if ($bool){
                $db->signupInsertData($con, $username, $password, $email, $dp);
                echo "wow";
                $_SESSION['username'] = $username;
                $_SESSION['dp'] = $dp;
                header("Location: newsfeed.php");
                die();
            }
        }else{
            $error = $error."Fill up the fields properly";
        }
    }
?>