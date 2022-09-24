<?php require_once "connection.php"?>
<?php

$pro_name = mysqli_real_escape_string($con, $_POST['pro_name']);
$pro_dec = mysqli_real_escape_string($con, $_POST['pro_dec']);
$pro_git = mysqli_real_escape_string($con, $_POST['pro_git']);

if (!empty($pro_name) and !empty($pro_dec) and !empty($pro_git)) {
    
    $query = "INSERT INTO projects (name, description, git_link) VALUES ('{$pro_name}', '{$pro_dec}', '{$pro_git}')";
    $result = mysqli_query($con, $query);

    if ($result) {
        
        $data = "Success";
        
    } else {
        
        $data = "Database query field..!";
        
    }
    
} else {
    
    $data = "Project information are empty..!";
    
}

echo $data;

?>
<?php mysqli_close($con)?>