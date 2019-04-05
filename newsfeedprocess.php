<?php
    session_start();
    include "dbmanager.php";
    if(isset($_SESSION['username'])){

        $username = $_SESSION['username'];
        $db = new dbmanager();
        $con=$db->dbConnection();
        $row=$db->userInformation($con,$username);
        $dp=$row['dp'];
        $_SESSION['dp']=$row['dp'];
        if(isset($_POST['userpost']) && $_POST['postbtn']){
            $userpost = $_POST['userpost'];
            $db->writeUserPost($con,$username,$userpost);
            $_POST['postbtn']=false;
        }
    }else{
        header('Location:index.php');
        die();
    }

?>