<?php require_once "database_controller.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM users_reg WHERE email = '$email'";
    $run_Sql = mysqli_query($db_con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $fetch_info['name'] ?> | Home</title>
    <meta charset="UTF-8">
  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    
    <link rel="stylesheet" href="css/style-home.css">
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Home Automation</title> 
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="loo.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Home Automation</span>
                    <span class="profession">Temperature Controller</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

              

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="user.php">
                            <i class='bx bx-user icon' ></i>
                            <span class="text nav-text">User</span>
                           
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bxs-thermometer icon' ></i>
                            <span class="text nav-text">Temperature<br>Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bar-chart icon' ></i>
                            <span class="text nav-text">Graph</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wrench icon' ></i>
                            <span class="text nav-text">Operation</span>
                        </a>
                    </li>

                      <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-user icon' ></i>
                            <span class="text nav-text">About us</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-phone call icon'></i>
                            <span class="text nav-text">Contact us</span>
                        </a>
                    </li>

                 
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="logout-user.php">
                        <i class='bx bx-log-out-circle icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
                <li class="search-box">
                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text">Welcome <?php echo $fetch_info['name'] ?></h1></div>
        
         
       
    </section>
  

    <script src="script.js"></script>

</body>
</html>
