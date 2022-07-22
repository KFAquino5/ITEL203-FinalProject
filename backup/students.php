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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--FAV ICON-->
    <link rel="shortcut icon" href="ShortcutLogo.png">
</head>
<body>






<div class="container">
  <form action="commands.php" method="post">
  <button type="submit" class="btn btn-primary" name="studentsbtn" value="asd">Show Table</button>
  </form>


<?php 
  if (isset($_SESSION['showbtn'] ))
  {
    echo "hi";
  }
  else
  {
    echo "bye";
  }
  
?>



</div>



<div class="container fluid student-table">
<table class="table table-bordered">
  <thead><tr>
      
      <th>First Name</th>
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
















</body>
</html>