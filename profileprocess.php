<?php
    session_start();
    if(isset($_SESSION['username'])){
        include 'dbmanager.php';
        $username = $_SESSION["username"];
        $dp = $_SESSION['dp'];
        $db = new dbmanager;
        $con=$db->dbConnection();
        $row = $db->readUserPost($con,$username);
        if(isset($_POST['liked'])){
            $postid = $_POST['postid'];
            $db->writeLikeData($con,$username,$postid);
            $_POST['liked'] = FALSE;
        }
        if(isset($_POST['unliked'])){
            $postid = $_POST['postid'];
            $db->deleteLikeData($con,$username,$postid);
            $_POST['unliked'] = FALSE;
        }
        if(isset($_POST['delete'])){
            $postid = $_POST['postid'];
            $db->deletePost($con,$postid);
        }
    }else{
        header('Location:index.php');
        die();
    }


?>