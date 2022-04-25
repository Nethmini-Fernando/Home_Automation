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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style_Index.css">
  <title>Home Automation</title>
</head>

<body>
 <!-- Head of Navigation bar -->
  <section id="web_head">
    <div class="web_head con">
      <div class="navigation-bar">
        <div class="headtitle">
          <a href="#Home">
            <h1><span>H</span>ome <span>A</span>utomation</h1>
          </a>
        </div>
        <div class="navigation-list">
          <div class="hamburger">
            <div class="icon_bar"></div>
          </div>
          <ul>
            <li><a href="#Home" data-after="Home">User</a></li>
            <li><a href="#Temperature" data-after="Service">Temperature</a></li>
            <li><a href="#Graph" data-after="Projects">Graph</a></li>
            <li><a href="#Operation" data-after="About">Operation</a></li>
            <li><a href="#Contact" data-after="About">Contact us</a></li>
            
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Navigation bar-->

   <!-- Home Section  -->
  <section id="Home">
      
        
    <div class="Home con">
      <div>
        <h1>WELCOME <span><?php echo $fetch_info['fname'],  $fetch_info['lname'] ?></span></h1>
        
        
     
        <a href="logout-user.php" class="btnLog"></a>
      </div>

    </div>
  </section>
  <!-- End Hero Section  -->
  <section id="Temperature">
      
  </section>
  
  
  
  
  <section id="Graph">
      
  </section>

  
  <!-- Operation Section -->
  <section id="Operation">
    <div class="Operation con">
      <div class="col-left">
        <div class="Operation-img">
            <img src="Photos/back.jpeg" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">OPER<span>ATION</span></h1>
        <h2>How the Embedded system and Website work</h2>
        <p>The temperature is controlled through the website. Therefore website and Arduino circuit should be 
            connected with the same WIFI. A new user has to register and then login into the website. The user 
            can view the temperature and humidity displayed in the temperature section. Users also can view the 
            graph through the previous temperature records. If there is an issue, the user can contact us through 
            the team or contact page.</p>
      </div>
    </div>
  </section>
  <!-- End Operation Section -->


   
   <!-- Our Team Section -->
     <section id="Contact">
         <?php include 'sendemail.php'; ?>
         <link rel="stylesheet" href="css/style_Contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  </head>
  <body>

    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->

    <!--contact section start-->
    <div class="contact-section">
      
      <div class="contact-form">
        <h2>Contact Us</h2>
        <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="text" name="subject" class="text-box" placeholder="Subject" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
    <!--contact section end-->

    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
     </section> 

  <!-- Footer -->
  <section id="footer">
    <div class="footer con">
      <div class="headtitle">
        <h1><span>H</span>ome <span>A</span>utomation</h1>
      </div>
      <h2>Home Automation</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png" /></a>
        </div>
      </div>
      <p></p>
    </div>
  </section>
  <!-- End Footer -->
  <script src="app.js"></script>
</body>

</html>