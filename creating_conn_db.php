<?php
$hostname="localhost";
$username="root";
$password="";
$conn = new mysqli($hostname,$username,$password);
if(($conn->connect_error)===TRUE){
    die("something went wrong:".mysqli_connect_error());
}
else{
    $create_db="CREATE DATABASE exam_db";
    if($conn->execute_query($create_db)){
        echo"Database created successfully";
    }
    echo"error creating database:".mysqli_erro($conn);
}
?>