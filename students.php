<?php include_once 'connection.php'; ?>
<!DOCTYPE html>

<html>
<head >

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name= "viewport" content="width-Ddevice-width, intial-scale=1.0">
    <title>The Virtual University</title>
    <!--StyleSheet CsS File-->
    
    <link rel="stylesheet" href="students.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
            <li><a href="index.php" class="text-decoration-none">Home</a></li>
            <li><a href="#" class="text-decoration-none">Courses</a></li>
            <li><a href="#" class="text-decoration-none">About</a></li>
            <li><a href="#" class="text-decoration-none">Contact Us</a></li>
            <li><a href="#" class="text-decoration-none">Forums</a></li>
            <div class="dropdown">
              <li class="dropbtn">Database</li>
              <div class="dropdown-content">
                <a href="#">Professors</a>
                <a href="students.php">Students</a>
              </div>
            </div>
            <li><a class="active text-decoration-none" href="login.php">Sign in</a></li>
        </ul>
    </nav> 

</section>



<div class="container">
  <form action="commands.php" method="post" style="margin-top:10%; color:#0a2351 ">
  <button type="submit" class="btn btn-primary" name="studentsbtn" value="asd">Refresh</button>
  </form>





</div>



<div class="container fluid student-table">
<table class="table table-bordered table-secondary table-striped" style="margin-top:3%;">
  <thead class="table-dark"><tr>
      
      <th clas>First Name</th>
      <th>Last Name</th>
      <th>Course</th>
      <th>Year & Section</th>
      <th>Email</th>
      <th>Student ID</th>
  </tr></thead>

    <?php
      
      if (isset($_SESSION['showbtn'] ))
      {

        foreach($_SESSION['showbtn'] as $students)
        {
        


    ?> 
    <tr>

      <th> <?php echo $students['firstName']; ?> </th>
      <th> <?php echo $students['lastName']; ?> </th>
      <th> <?php echo $students['course']; ?> </th>
      <th> <?php echo $students['yearSection']; ?> </th>
      <th> <?php echo $students['email']; ?> </th>
      <th> <?php echo $students['studentNumber']; ?> </th>

    </tr>
          <?php
        }
      }
      


          ?>



    </tbody>



  </table>

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