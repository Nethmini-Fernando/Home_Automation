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
            <li><a href="#Home" data-after="Home">Home</a></li>
            <li><a href="#Operation" data-after="Operation">Operation</a></li>
            <li><a href="#team" data-after="Team">Our Team</a></li>
            <li><a href="#Contact" data-after="Contact">Contact us</a></li>
            
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
        <h1>Welcome to,</h1>
        <h1>Home Automation <span>Remote Temperature Controller</span></h1>
        <p>Switch on your dream of home automation and allow users to schedule temperature to live a pleasant day-to-day life.</p>
        
        <a href="signup-user.php" class="btnSignup"></a>
        <a href="login-user.php" class="btnLogin"></a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->
  
  
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
        <p>
            The temperature is controlled through the website. Therefore website and Arduino circuit should be connected with the same WIFI. 
            A new user has to register and then login into the website. The user can view the temperature and humidity displayed in the 
            temperature section. Users also can view the graph through the previous temperature records. If there is an issue, the user can 
            contact us through the team or contact page.
            
        </p>
        
      </div>
    </div>
  </section>
  <!-- End Operation Section -->
  
  <!-- Our Team Section -->
     <section id="team">
      <div class="team container">
          
          <style> 
              
h1 {
  -webkit-text-stroke: 0.3px black;
  text-align: center;
}
.teamcontainer {
  position: relative;
  width: 50%;
}
.middle {
  background-image: url('Photos/back.png');
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed; 
  border-radius: 30px 0 30px 0;
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 60%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}
.teamcontainer:hover .image {
  opacity: 0.3;
}
.teamcontainer:hover .middle {
  opacity: 1;
}
.text {
  -webkit-text-stroke: 0.4px black;
  text-align: center;
  color: white;
  color:black;
  font-size: 14px;
}

.persons {
  text-align: center;
  column-count: 3;
}

img.rounded-corners {
  border-radius: 30px 0 30px 0;
}

#person {
  border-color: #666 #006400;
  border-image: none;
  border-radius: 50px 0 50px 0;
  border-style: solid;
  border-width: 5px;
  padding: 20px; 
  background-color: lightblue;
  width: 240px;
  height: 300px;  
}
</style>
<h1 class="section-title">Our<span> Team</span></h1>
          
<div class="persons">

<div class="teamcontainer">
	<p id="person">
	<img src="Photos/nethmini.png" alt="Nethmini Fernando" width="240" height="300" class="rounded-corners">
	</p>
  <div class="middle">
    <div class="text">
		<b><br>Nethmini Fernando</b> <br><br> Project Manager <br><br>
                <a href="https://www.facebook.com/crystal.eyes419"><img src="Photos/fb.png" style="width:40px;height:40px;"></a>
		<a href="https://www.instagram.com/__crystal_eyes__/"><img src="Photos/instagram.png" style="width:40px;height:40px;"></a>
	</div>
  </div>
</div> 

<div class="teamcontainer">
	<p id="person">
	<img src="Photos/hasaranga.png" alt="Naveen Hasaranga" width="240" height="300" class="rounded-corners">
	</p>
  <div class="middle">
    <div class="text">
		<b>Naveen Hasaranga</b> <br> Embedded Developer & Web Developer <br>
		<a href="https://www.facebook.com/naveen.hasaranga.1"><img src="Photos/fb.png" style="width:40px;height:40px;"></a>
		<a href="https://www.instagram.com/naveen.hasaranga/"><img src="Photos/instagram.png" style="width:40px;height:40px;"></a>
	</div>
  </div>
</div>

<div class="teamcontainer">
	<p id="person">
	<img src="Photos/charuka.png" alt="Charuka Senarathna" width="240" height="300" class="rounded-corners">
	</p>
  <div class="middle">
    <div class="text">
		<b><br>Charuka Senarathna</b> <br><br> Database Analyst <br>
		<a href="https://www.facebook.com/charuka.senarathna.3"><img src="Photos/fb.png" style="width:40px;height:40px;"></a>
		<a href="https://www.instagram.com/charuka.a_/"><img src="Photos/instagram.png" style="width:40px;height:40px;"></a>
	</div>
  </div>
</div>

<div class="teamcontainer">
	<p id="person">
	<img src="Photos/nimesha.png" alt="Nimesha Yatigammana" width="240" height="300" class="rounded-corners">
	</p>
  <div class="middle">
    <div class="text">
		<b>Nimesha Yatigammana</b> <br> Embedded Developer & Web Developer <br>
		<a href="https://www.facebook.com/chethana.yatigammana"><img src="Photos/fb.png" style="width:40px;height:40px;"></a>
		<a href="https://www.instagram.com/_nimesha_yat_00_/"><img src="Photos/instagram.png" style="width:40px;height:40px;"></a>
	</div>
  </div>
</div>
    
<div class="teamcontainer">
	<p id="person">
	<img src="Photos/prasadi.png" alt="Prasadi Iresha" width="240" height="300" class="rounded-corners">
	</p>
  <div class="middle">
    <div class="text">
		<b><br>Prasadi Iresha</b> <br><br> Business Analysis <br><br>
		<a href="https://www.facebook.com/prasadi.iresha.14"><img src="Photos/fb.png"  style="width:40px;height:40px;"></a>
		<a href="https://www.instagram.com/r_o_w_z_a_y/"><img src="Photos/instagram.png" style="width:40px;height:40px;"></a>
	</div>
  </div>
</div>

<div class="teamcontainer">
	<p id="person">
	<img src="Photos/thulanjana.png" alt="Thulanjana Pramod" width="240" height="300" class="rounded-corners">
	</p>
  <div class="middle">
    <div class="text">
		<b><br>Thulanjana Pramod</b> <br><br> Web Developer & Embedded Developer <br>
		<a href="https://www.facebook.com/thulanjana.pramod.1/"><img src="Photos/fb.png" style="width:40px;height:40px;"></a>
		<a href="https://www.instagram.com/__thulanjana_pramod__/"><img src="Photos/instagram.png" style="width:40px;height:40px;"></a>
	</div>
  </div>
</div>

</div>
          </div>
  </section>
   <!-- End Our Team Section -->
   
   <!-- Contact us Section -->
     <section id="Contact">
          <div class="team container">
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
        <h1 class="section-title">Con<span>tact</span> Us</h1>
        <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="text" name="subject" class="text-box" placeholder="Subject" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
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