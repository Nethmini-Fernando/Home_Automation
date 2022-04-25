<?php 
session_start();
require "database_con.php";
$email = "";
$firstname = "";
$lastname = "";

$errors = array();

//if user signup button
if(isset($_POST['signup'])){
    //user's signup details
    $userid = rand(999, 111);
    $firstname = mysqli_real_escape_string($db_con, $_POST['fname']);
    $lastname = mysqli_real_escape_string($db_con, $_POST['lname']);
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
        //adding data to user_reg
        $insert_data = "INSERT INTO users_reg (userid, fname, lname,  email, password, code, status)
                        values('$userid','$firstname','$lastname', '$email', '$encpass', '$code', '$status')";
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
    //if user click verification code submit button
    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($db_con, $_POST['otp']);
        $check_code = "SELECT * FROM users_reg WHERE code = $otp_code";
        $code_res = mysqli_query($db_con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE users_reg SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($db_con, $update_otp);
            if($update_res){
                $_SESSION['uname'] = $uname;
                $_SESSION['email'] = $email;
                header('location: message.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while updating code!";
            }
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }
    
    //message login - after sign up
    if(isset($_POST['message-login'])){
            
                header('location: login-user.php');
                
    }

    //if user click login button
    if(isset($_POST['login'])){
       
        $email = mysqli_real_escape_string($db_con, $_POST['email']);
        $password = mysqli_real_escape_string($db_con, $_POST['password']);
        $check_email = "SELECT * FROM users_reg WHERE email = '$email'";
        $email_recheck = mysqli_query($db_con, $check_email);
       
        if(mysqli_num_rows($email_recheck) > 0){
            $fetch = mysqli_fetch_assoc($email_recheck);
            $fetch_pass = $fetch['password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['email'] = $email;
                
                $status = $fetch['status'];
                if($status == 'verified'){
                  
                  $_SESSION['email'] = $email;
                  $_SESSION['password'] = $password;
                    header('location: home.php');
                }else{
                    $info = "It's look like you haven't still verify your email - $email";
                    $_SESSION['info'] = $info;
                    header('location: user-otp.php');
                }
            }else{
                $errors['email'] = "Incorrect email or password!";
            }
        }else{
            $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
        }
       
    }

    //if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($db_con, $_POST['email']);
        $check_email = "SELECT * FROM users_reg WHERE email='$email'";
        $run_sql = mysqli_query($db_con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE users_reg SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($db_con, $insert_code);
            if($run_query){
                $subject = "Password Reset Code";
                $message = "Your password reset code is $code";
                $sender = "From: nethufernando1435@gmail.com";
                if(mail($email, $subject, $message, $sender)){
                    $info = "We've sent a passwrod reset otp to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: reset-code.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Failed while sending code!";
                }
            }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email address does not exist!";
        }
    }

    //if user click check reset otp button
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($db_con, $_POST['otp']);
        $check_code = "SELECT * FROM users_reg WHERE code = $otp_code";
        $code_res = mysqli_query($db_con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;
            $info = "Please create a new password that you don't use on any other site.";
            $_SESSION['info'] = $info;
            header('location: new-password.php');
            exit();
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

    //if user click change password button
    if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($db_con, $_POST['password']);
        $confirm_pass= mysqli_real_escape_string($db_con, $_POST['cpassword']);
        if($password !== $confirm_pass){
            $errors['password'] = "Confirm password not matched!";
        }else{
            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
            $encpass = password_hash($password, PASSWORD_BCRYPT);
            $update_pass = "UPDATE users_reg SET code = $code, password = '$encpass' WHERE email = '$email'";
            $run_query = mysqli_query($db_con, $update_pass);
            if($run_query){
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
                header('Location: password-changed.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    }
    
   //if login now button click
    if(isset($_POST['login-now'])){
        header('Location: login-user.php');
    }
?>