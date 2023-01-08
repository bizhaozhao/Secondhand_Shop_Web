<?php

    //can display saved info
    session_start();

    //collect data
    $username = $_POST['username'];
    $password = $_POST['password'];
    //store username for 24 hours
    $_SESSION['user'] = $username;

    //Create connection
    $connection = new mysqli('localhost', 'root', '', 'client_db');
    // $connection = mysqli_connect('localhost', 'root', '', 'client_db');

    if($connection->connect_error){
        // echo "error";
        die("Connection failed: ".$connection->connect_error);
    }

    //check the username and password are exsit in the usertable
    if($username ==""||$password ==""){
        echo "<script type='text/javascript'>alert('Please input username and password!');
        location='login_signup.php' </script>";
    }else{

        $sql = "SELECT * FROM usertable WHERE username = '$username' and password = '$password'";
        $result = $connection->query($sql);

        if($result->num_rows>0){
        //    echo "<p>Wellcome Back! $username</p>";
        //    header('location:home.php');
            echo"<script type='text/javascript'>alert('Wellcome Back! $username!');
            location='home.php' </script>";
            
        }else{
            echo"<script type='text/javascript'>alert('Invalid Username Or Password!');
            location='login_signup.php' </script>";
        }
    }
?>  
 

   
