<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/style-index.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Home Automation</title> 
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="log.png" alt="">
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
                        <a href="index.php">
                            <i class='bx bxs-thermometer icon' ></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bar-chart icon' ></i>
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
                    <a href="signup-user.php">
                        <i class='bx bx-book-heart icon' ></i>
                        <span class="text nav-text">Sign up</span>
                    </a>
                </li>
                <li class="">
                    <a href="login-user.php">
                        <i class='bx bx-log-in-circle icon' ></i>
                        <span class="text nav-text">Login</span>
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
        <div class="text">Home</div>
    </section>

    <script src="script.js"></script>

</body>
</html>
