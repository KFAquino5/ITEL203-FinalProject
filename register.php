<?php include_once 'connection.php'; ?>


<!DOCTYPE html>
<link href="style.css" rel="stylesheet" type="text/css">
<html lang="en" dir="ltr">

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="form.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Register • The Virtual University</title>
    <!--StyleSheet CsS File-->
    <link rel="stylesheet" href="style.css">
    <!--FAV ICON-->
    <link rel="shortcut icon" href="ShortcutLogo.png">
   </head>

<body>
  <section class="header">
    <nav>
        <a href="index.php" class="logo">
            <img src="logo 3.png">
        </a>
        <!--For Responsive Menu-->
        <label class="menu-icon" for="menu-btn">
            <span class="nav-icon"></span>

        <!--Navigation-->

        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Courses</a></li>
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
            <li><a class="active" href="login.php">Sign in</a></li>
        </ul>
    </nav> 

  <div class="container">
    <div class="title">Student Registration Form</div>
    <div class="content">
      <form action="commands.php" method="post">
        <div class="user-details">

          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" placeholder="Enter your First name" name="firstName" required>
          </div>

          <div class="input-box">
            <span class="details">Last name</span>
            <input type="text" placeholder="Enter your Last name" name="lastName" required>
          </div>

          <div class="input-box">
            <span class="details">Course</span>
            <input type="text" placeholder="Enter your Course (Ex: BSIT)" name="course" required>
          </div>

          <div class="input-box">
            <span class="details">Year & Section</span>
            <input type="text" placeholder="Enter your Year and Section (Ex: 2A)" name="yearSection" required>
          </div>

          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="Enter your Email" name="email" required>
          </div>

          <div class="input-box">
            <span class="details">Student Number</span>
            <input type="text" placeholder="Enter your Student Number  (Ex: 0320-2682)" name="studentNumber" required>
          </div>

          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" name="pw" required>
          </div>


          
        </div>

        <div class="button">
          <input type="submit" name= "registerbtn" value="Register">
        </div>

        

        <div class="already-account">Already have an account? <span><a href="login.php">Login here</a></span>
          </div>




      </form>
    </div>
  </div>
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
