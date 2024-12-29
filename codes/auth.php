<?php

include('config/app.php');
include_once('controllers/RegisterController.php');

if (isset($_POST['register_btn'])) {
    
    $fname= validateInput($db->conn,$_POST['fname']) ;
    $lname=validateInput($db->conn,$_POST['lname']) ;
    $email=  validateInput($db->conn, $_POST['email']);
    $password=validateInput($db->conn,$_POST['password']); 
    $confirm_password=validateInput($db->conn,$_POST['confirm_password']) ;

    $register=new RegisterController;
    $result_password=$register->confirmPassword($password,$confirm_password);
    if ($result_password) {
      
    }else {
        redirect("PAssword and Confirm Password Does not matches","register.php");
    }
}

?>