<?php

    //This class will handle all the db quary
    class dbmanager{

        //This function creates connections and returns the connection
        function dbConnection(){
            $conn = new mysqli("sql203.epizy.com","epiz_23119201","r6strat","epiz_23119201_data");
            if($conn->connect_error){
                die("Connection Error".$conn->connect_error);
            }else{
                return $conn;
            }
        }

        //This function inserts userdata inside user table
        function signupInsertData($conn,$username,$password,$email,$dp){
            $qry = "INSERT INTO epiz_23119201_data.user (username,password,email,dp,uplayname) VALUES ('$username','$password','$email','$dp','NULL')";
            if($conn->query($qry)===TRUE){
                return TRUE;
            }else{
                echo $conn->error;
                return FALSE;
            }
        }

        //This function checks unique Username
        function isUniqueUsername($con,$username){
            $qry = "SELECT * FROM epiz_23119201_data.user WHERE username = '$username'";
            $row=$con->query($qry);
            if($row->num_rows>0){
                return FALSE;
            }else{
                return TRUE;
            }
        }

        //This function checks unique Email
        function isUniquePassword($con,$email){
            $qry = "SELECT * FROM epiz_23119201_data.user WHERE email = '$email'";
            $row=$con->query($qry);
            if($row->num_rows>0){
                return FALSE;
            }else{
                return TRUE;
            }
        }

        // This function checks username and password for the login
        function isValidLogin($con,$username,$password){
            $qry = "SELECT password FROM epiz_23119201_data.user WHERE username = '$username'";
            $valid = FALSE;
            $result=$con->query($qry);
            $row=$result->fetch_assoc();
            if($row['password']==$password){
                $valid = TRUE;
            }
            return $valid;
        }

        //This function returns user information row
        function userInformation($con,$username){
            $qry = "SELECT * FROM epiz_23119201_data.user WHERE username = '$username'";
            $result=$con->query($qry);
            $row=$result->fetch_assoc();
            return $row;
        }

        //This function returns user post row
        function readUserPost($con,$username){
            $qry = "SELECT * FROM epiz_23119201_data.posts WHERE username = '$username'";
            $result=$con->query($qry);
            $row = $result->fetch_all();
            return $row;
        }

        //This function writes post data in post table
        function writeUserPost($con,$username,$post){
            $date = date("Y/m/d");
            date_default_timezone_set("Asia/Dhaka");
            $time=date("h:i:sa");
            $likecount = 0;
            $qry = "INSERT INTO epiz_23119201_data.posts (username,post,postdate,posttime,likecount) VALUES ('$username','$post','$date','$time','$likecount')";
            $con->query($qry);
        }

        //This function writes like data in posts table and likes table
        function writeLikeData($con,$username,$postid){
            $qry1="UPDATE epiz_23119201_data.posts SET likecount = likecount + 1  WHERE postid = '$postid'";
            $qry2="INSERT INTO epiz_23119201_data.likes (postid,username) VALUES('$postid','$username')";
            $con->query($qry1);
            $con->query($qry2);
        }

        //This function deletes like data from posts table and likes table
        function deleteLikeData($con,$username,$postid){
            $qry1="UPDATE epiz_23119201_data.posts SET likecount = likecount - 1  WHERE postid = '$postid'";
            $qry2="DELETE FROM epiz_23119201_data.likes WHERE postid = '$postid'";
            $con->query($qry1);
            $con->query($qry2);
        }

        //This function checks if user liked the post or not
        function isLiked($con,$username,$postid){
            $qry = "SELECT * FROM epiz_23119201_data.likes where postid = '$postid' AND username = '$username'";
            $row = $con->query($qry);
            if($row->num_rows>0){
                return TRUE;
            }else{
                return FALSE;
            }
        }

        //This function searches users form user table
        function searchUsers($con,$searchUsername){
            $qry = "SELECT * FROM epiz_23119201_data.user WHERE username LIKE '%$searchUsername%'";
            $result = $con->query($qry);
            $row = $result->fetch_all();
            return $row;
        }

        //This function writes sent friend request to friends table
        function sendFriendRequest($con,$sender,$receiver){
            $qry = "INSERT INTO epiz_23119201_data.friends(firstuser, seconduser, degree) VALUES ('$sender','$receiver',0)";
            $con->query($qry);
        }

        //This function writes accept friend request to friends table
        function acceptFriendRequest($con,$sender,$receiver){
            $qry = "UPDATE epiz_23119201_data.friends SET degree = 1 WHERE firstuser='$sender' AND seconduser = '$receiver'";
            $con->query($qry);
        }

        //This function searches all friends of users from friends table
        function searchAllFriends($con,$username){
            $qry = "SELECT CASE WHEN (firstuser='$username' AND degree=1) THEN seconduser WHEN(seconduser='$username' AND degree=1) THEN firstuser END FROM epiz_23119201_data.friends";
            $result = $con->query($qry);
            $row = $result->fetch_all();
            return $row;
        }

        //This function checks if user is friends with other user
        function  searchFriendRequestStatus($con,$username,$otheruser){
            $qry = "SELECT degree FROM epiz_23119201_data.friends WHERE (firstuser='$username' AND seconduser = '$otheruser') OR (firstuser = '$otheruser' AND seconduser = '$username')";
            $result = $con->query($qry);
            $row=$result->fetch_all();
            if(count($row)==0){
                return -1;
            }elseif ($row[0][0]==0){
                return 0;
            }else{
                return 1;
            }
        }

        //This function deletes friend request from friends table
        function deleteFriendRequest($con,$username,$otheruser){
            $qry = "DELETE FROM epiz_23119201_data.friends WHERE (firstuser='$username' AND seconduser = '$otheruser') OR (firstuser = '$otheruser' AND seconduser = '$username')";
            $con->query($qry);
        }

        //This function checks if user received request or not
        function checkConfirmRequest($con,$username,$otheruser){
            $qry = "SELECT * FROM epiz_23119201_data.friends WHERE firstuser = '$otheruser' AND seconduser = '$username' AND degree = 0";
            $row = $con->query($qry);
            if($row->num_rows>0){
                return TRUE;
            }else{
                return FALSE;
            }
        }

        //This function returns the posts of users friends
        function readFriendPost($con,$username){
            $qry = "SELECT * FROM epiz_23119201_data.posts,(SELECT (CASE WHEN(firstuser = '$username' AND degree = 1) THEN seconduser  WHEN(seconduser = '$username' AND degree = 1) THEN firstuser END)as friendlist FROM epiz_23119201_data.friends) as temp WHERE username = friendlist";
            $result=$con->query($qry);
            $row = $result->fetch_all();
            return $row;
        }

        //This function returns post data
        function postData($con,$id){
            $qry = "SELECT * FROM epiz_23119201_data.posts where postid = $id ";
            $result=$con->query($qry);
            $row=$result->fetch_assoc();
            return $row;
        }
        //This function writes post data in post table
        function writeUserComment($con,$username,$id,$comment){
            $date = date("Y/m/d");
            date_default_timezone_set("Asia/Dhaka");
            $time=date("h:i:sa");
            $likecount = 0;
            $qry = "INSERT INTO epiz_23119201_data.comments (postid,username,data,type,date,time) VALUES ('$id','$username','$comment','NULL','$date', '$time')";
            $con->query($qry);
        }
        //This function returns comment data
        function commentData($con,$id){
            $qry = "SELECT * FROM epiz_23119201_data.comments where postid = $id ";
            $result=$con->query($qry);
            $row = $result->fetch_all();
            return $row;
        }
    }

?>