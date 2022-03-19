<?php 
session_start();
require "database_con.php";
$email = "";
$name = "";
$errors = array();

//if user signup button
if(isset($_POST['signup'])){
    //user's signup details
    $name = mysqli_real_escape_string($db_con, $_POST['name']);
    $email = mysqli_real_escape_string($db_con, $_POST['email']);
    $password = mysqli_real_escape_string($db_con, $_POST['password']);
    $confirm_pass= mysqli_real_escape_string($db_con, $_POST['cpassword']);
    //Checking if password matches
    if($password !== $confirm_pass){
        $errors['password'] = "Error! Confirm password not matched!";
    }
    //Checking if the email exists
    $email_check = "SELECT * FROM users_reg WHERE email = '$email'";
    $email_recheck = mysqli_query($db_con, $email_check);
    if(mysqli_num_rows($email_recheck) > 0){
        $errors['email'] = "Email address you provided is already in use!";
    }
    //sends the otp code and verifies the account
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(9999999, 1111111);
        $status = "NOTVERIFIED";
        $insert_data = "INSERT INTO users_reg (name, email, password, code, status)
                        values('$name', '$email', '$encpass', '$code', '$status')";
        $data_check = mysqli_query($db_con, $insert_data);
        if($data_check){
            $subject = "HOME AUTOMATION - Email Verification Code ";
            $message = "Your verification code is $code";
            $sender = "From: nethufernando1435@gmail.com";
            if(mail($email, $subject, $message, $sender)){
                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: user-otp.php');
                exit();
            }else{
                $errors['otp-error'] = "Error while sending the code. Check your WiFi Connection!";
            }
        }else{
            $errors['db-error'] = "Error! Could not enter to the Database";
        }
    }

}
