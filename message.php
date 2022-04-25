<?php require_once "database_controller.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Code Verification</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="message.php" method="POST" autocomplete="off">
                    <h2 class="text-center">Message</h2>
                    <p>You have now been registered to Home Automation. Please login with your details again. Thank you</p>
                   
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="message-login" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>