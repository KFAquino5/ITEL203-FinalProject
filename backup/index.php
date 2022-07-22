<?php include_once 'connection.php'; ?>

<!DOCTYPE html>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name= "viewport" content="width-Ddevice-width, intial-scale=1.0">
    <title>The Virtual University</title>
    <!--StyleSheet CsS File-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
                <li><a href="login.php">Sign in</a></1li>
            </ul>
        </nav> 

        

        <!--CONTENT AREA-->

        <div class="header-content">

            <!--headings-->

            <div class="header-text">

            <h1>The Smarter Way To Learn <span>Anything</span></h1>
            <p>The Virtual University is a social learning platform that provides accessibility of  higher level of virtual learning to students. Our goal is to prepare students with promise to enhance their intellectual, physical, social, emotional, spiritual
        and artistic growth so that they may realize their power and potential for good as citizens</p>

            <!--Button-->
        <a href="#" class="header-btn">Read More</a>

   </div>

        <!--Image-->

            <div class="header-image">
            <img src="headerimage.png">

    </div>

</div>

        <!--ARROW-->
            <div class="arrow"></div>
            <span class="scroll">Scroll Down</span>

        </section>


            <section class="subject" id="courses-offered">
                <!--HEADINGS-->
                <div class="subject-heading">
                    <h2>Courses Offered</h2>
                    <p>The Virtual University offers an online course that is in 2D animation / Online meeting. The entire course also uses the Filipino and English language to make it more attractive and understandable to student or future students of all ages and professions.</p>
                </div>

        <!--CONTAINERS-->
            <div class="box-container">
                <!--BOX 1-->
                    <div class="box">
                    <img src="InformationTechnology.png">
                    <font>Information Technology</font>
                    <p>Bachelor of Science in Information Technology (BSIT) is a four-year program which is designed to provide students with a working knowledge of computer concepts and essential skills necessary for work and communication in today's society. Students will learn safety, security, and ethical issues in computing and social networking. Students will also learn about input/output systems, computer hardware and operating systems.</p>
                        <!--button-->
                        <a href="#">View</a>
     </div>
                <!--BOX 2-->
                    <div class="box">
                    <img src="ComputerScience.png">
                    <font>Computer Science</font>
                    <p>Bachelor of Science in Computer Science (BSCS) is a four-year program that includes the study of computing concepts and theories, algorithmic foundations, and new developments in computing. The program prepares its students to design and create algorithmically complex software and develop new and effective algorithms for solving computing problems.</p>
                        <!--button-->
                        <a href="#">View</a>
                    </div>


</section>
<!--SIDEBAR-->
<div class="wrapper">
      <input type="checkbox" id="btn" hidden>
      <label for="btn" class="menu-btn">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
      </label>
      <nav id="sidebar">
        <div class="title">Side Menu</div>
        <ul class="list-items">
          <li><a href="#"><i class="fas fa-home"></i>Profile</a></li>
          <li><a href="#"><i class="fas fa-sliders-h"></i>Subjects</a></li>
          <li><a href="#"><i class="fas fa-address-book"></i>Activities</a></li>
          <li><a href="#"><i class="fas fa-cog"></i>Schedule</a></li>
          <li><a href="#"><i class="fas fa-stream"></i>Calendar</a></li>
          <li><a href="#"><i class="fas fa-user"></i>Groups</a></li>
          <li><a href="#"><i class="fas fa-globe-asia"></i>Forums</a></li>
          <li><a href="#"><i class="fas fa-envelope"></i>COR us</a></li>
        </ul>
      </nav>
    </div>


</body>
</html>