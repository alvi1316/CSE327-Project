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

        //This function inserts userdata inside
        function signupInsertData($conn,$username,$password,$email,$dp){
            $qry = "INSERT INTO epiz_23119201_data.user (username,password,email,dp) VALUES ('$username','$password','$email','$dp')";
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
            $result=$con->query($qry);
            if($result->num_rows>0){
                return FALSE;
            }else{
                return TRUE;
            }
        }

        //This function checks unique Email
        function isUniquePassword($con,$email){
            $qry = "SELECT * FROM epiz_23119201_data.user WHERE email = '$email'";
            $result=$con->query($qry);
            if($result->num_rows>0){
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


    }




?>