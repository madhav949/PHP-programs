<?php
include("conn_db.php");
$sql_insert_data ="INSERT INTO tbl_emp(Name,Mark,Faculty)
VALUES('MadY', 75,'BSC-CSIT'),
('RADY',65,'BE')
";
if($conn->execute_query($sql_insert_data)){
    echo"data inserted";
}
else{
    echo"failed to inserted";
}
?>