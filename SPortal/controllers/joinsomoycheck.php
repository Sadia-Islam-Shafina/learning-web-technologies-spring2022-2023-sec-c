<?php
session_start();
require_once('../models/joinsomoymodel.php');

// form submitted kina
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate
    if (empty($username) || empty($password)) {
        echo 'All fields are required.';
    } elseif (strlen($password) < 4) {
        echo 'Password must be at least 4 characters long.'; 
    }
    else{
            $somoy = ['username'=>$username, 'password'=> $password];
            $status = addsomoy($somoy);
            
        //if($status){
            header('location: ../views/done.php');
       // }else{
         //   echo "Re-submit all.";
        //}
    }
}else{
        
    header('location: ../views/home.php');
}
?>