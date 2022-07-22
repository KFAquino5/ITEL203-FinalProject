<?php
    $firstName =  $_POST['firstName'];
    $lastName =  $_POST['lastName'];
    $course =  $_POST['course'];
    $yearSection =  $_POST['yearSection'];
    $email =  $_POST['email'];
    $studentNumber =  $_POST['studentNumber'];
    $password =  $_POST['password'];
    $confirmPassword =  $_POST['confirmPassword'];
    $gender =  $_POST['gender'];

 //Database Connection
 $conn = new mysqli('localhost','root','','websitedb');
 if ($conn->connect_error) {
  die('Connection Failed : ' $conn->connection_error);
 }
 else {
  $stmt = $conn->prepare("insert into  studentdb(firstName, lastName, course, yearSection, email, studentNumber,
        password, confirmPassword, gender) values(?,?,?,?,?,?,?,?,?)");
  $stmt->bind_param("sssssisss",$firstName, $lastName, $course, $yearSection, $email, $studentNumber, $password,
         $confirmPassword, $gender);
  $stmt->execute();
  echo "Registration Successfully...";
  $stmt->close();
  $conn->close();
 }


?>