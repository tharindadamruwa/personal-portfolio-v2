<?php

$con = mysqli_connect("localhost", "root", "", "bbtdp_database");

if (mysqli_connect_errno()) {
    
    die("Database connection field" . mysqli_connect_error());

} else{
    
    // echo "connection successfull";

}

?>