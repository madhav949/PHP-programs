<?php
$hostname ="localhost";
$username ="root";
$password ="";
$dbname ="exam_db";
$conn = new mysqli($hostname,$username,$password,$dbname);
if(($conn->connect_error)===TRUE){
    die("connection failed..");
}
else{
     echo"database connected";
}

?>
