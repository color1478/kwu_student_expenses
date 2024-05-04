<?php 
    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $db_name = "student";  
    $conn = new mysqli($servername, $username, $password, $db_name, 3307);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo " ";
    
    ?>