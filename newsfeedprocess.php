<?php
    session_start();
    include "dbmanager.php";
    if(isset($_SESSION['username'])){


        $username = $_SESSION['username'];
        $db = new dbmanager();
        $con=$db->dbConnection();
        $feedrow=$db->readFriendPost($con,$username);
        $friendList=$db->searchAllFriends($con,$username);
        $row=$db->userInformation($con,$username);
        $dp=$row['dp'];
        $_SESSION['dp']=$row['dp'];
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
        if(isset($_POST['comment'])){
            if($_POST['comment']){
                header('Location:comment.php');
            }
        }
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