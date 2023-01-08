<?php

    session_start();
    //Create connection
    $connection = new mysqli('localhost', 'root', '', 'client_db');
    //$connection = mysqli_connect('localhost', 'root', '', 'client_db');

    //Check connection
    if($connection->connect_error){
        echo "database connection error";
        die("Connection failed: ".$connection->connect_error);
    }

    if(isset($_POST['send'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];



        if($username==""||$password==""||$email==""){
            echo "The Username Or Password Or Email cannot be empty!";
        }else{
            $sql = "SELECT username FROM usertable WHERE username = '$username'";
            $result = $connection->query($sql);  
            if($result->num_rows>0){
                echo "<script type='text/javascript'>alert('The Username is exist! Change another one');
                location='login_signup.php' </script>";
            }else{
                echo "<script type='text/javascript'>alert('Wellcom To Be Our Customer! $username!');location='home.php'</script>";
                $request = "insert into usertable(username, password, email) values('$username','$password','$email')";
                mysqli_query($connection, $request);
            }
        }
    }else{
        echo 'something went wrong try again';
    }    
?>