<?php
include("conn_db.php");
$sql_create_tbl = "CREATE TABLE tbl_emp(
    id INT(5) AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(20) NOT NULL,
    Mark INT(5) NOT NULL,
    Faculty VARCHAR(10) NOT NULL
)";
if($conn->execute_query($sql_create_tbl)){
    // echo"table is created";
}
else{
    echo"Failed to  create table";
}

?>