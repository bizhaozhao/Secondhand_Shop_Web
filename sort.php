<?php

//will implement item detail page, sort by price, sort by brand, etc.

//Create connection
$connection = new mysqli('localhost', 'root', '', 'client_db');
//$connection = mysqli_connect('localhost', 'root', '', 'client_db');

 //Check connection
 if($connection->connect_error){
    echo "database connection error";
    die("Connection failed: ".$connection->connect_error);
}

?>