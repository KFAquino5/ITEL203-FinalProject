<?php include_once 'connection.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name= "viewport" content="width-Ddevice-width, intial-scale=1.0">
    <title>The Virtual University</title>
    <!--StyleSheet CsS File-->
    <link rel="stylesheet" href="style.css">
    <!--FAV ICON-->
    <link rel="shortcut icon" href="ShortcutLogo.png">
</head>
<body>
    <section class="header">
        <nav>
            <a href="#" class="logo">
                <img src="logo 3.png">
            </a>
            <!--For Responsive Menu-->
            <label class="menu-icon" for="menu-btn">
                <span class="nav-icon"></span>

            <!--Navigation-->

            <ul class="menu">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="#courses-offered">Courses</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Forums</a></li>
                <div class="dropdown">
                    <li class="dropbtn">Database</li>
                    <div class="dropdown-content">
                      <a href="#">Professors</a>
                      <a href="students.php">Students</a>
                    </div>
                  </div>
                <li><form action="login.php" method="post"><a type="submit" name="logoutbtn" class="logoutbtn" href="index.php">Log Out</a></form></li>
            </ul>
        </nav> 

        

        <!--CONTENT AREA-->

        <div class="header-content">

            <!--headings-->

            <div class="header-text">

            <h1>Hello <span>
                <?php
            
                echo $_SESSION['firstName'] . " " . $_SESSION['lastName'];
            
                ?> 
        
        
        </span></h1>
            <p>The Virtual University is a social learning platform that provides accessibility of  higher level of virtual learning to students. Our goal is to prepare students with promise to enhance their intellectual, physical, social, emotional, spiritual
        and artistic growth so that they may realize their power and potential for good as citizens</p>



   </div>

</section>



<!--SIDEBAR-->
<link rel="stylesheet" href="sidebar.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<div class="wrapper">
      <input type="checkbox" id="btn" hidden>
      <label for="btn" class="menu-btn">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
      </label>
      <nav id="sidebar">
        <div class="title">Side Menu</div>
        <ul class="list-items">
          <li><a href="#"><span class="fas fa-user"></span> Profile</a></li>
          <li><a href="#"><span class="fas fa-stream"></span> Subjects</a></li>
          <li><a href="#"><span class="fas fa-address-book"></span> Activities</a></li>
          <li><a href="#"><span class="fas fa-clock"></span> Schedule</a></li>
          <li><a href="#"><span class="fas fa-calendar"></span> Calendar</a></li>
          <li><a href="#"><span class="fas fa-users"></span> Groups</a></li>
          <li><a href="#"><span class="fas fa-globe-asia"></span> Forums</a></li>
          <li><a href="#"><span class="fas fa-envelope"></span> COR</a></li>
        </ul>
      </nav>
    </div>











</body>
</html>