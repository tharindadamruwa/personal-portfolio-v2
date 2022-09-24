<?php

session_start();

$my_username  = "tharindadamruwa";
$my_pass = "chandraTR2006;";


$username = $_POST['username'];
$password = $_POST['password'];

if (!empty($username) and !empty($password)) {
    
    if ($username == $my_username and $password == $my_pass) {
        
        $_SESSION['log'] = 1;

        if ($_SESSION['log'] == 1) {
            
            $data = "success";
            
        } else {

            $data = "Something went wrong..!";
            
        }
        
    } else {
        
        $data = "Username or password is wrong..!";
        
    }
    
} else {

    $data = "Username or password is empty..!";
    
}

echo $data;