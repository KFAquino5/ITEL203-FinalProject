<?php



include_once 'connection.php';



//****************************REGISTER****************************//

if (isset ($_POST['registerbtn']))
{

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $course = $_POST['course'];
    $yearSection = $_POST['yearSection'];
    $email = $_POST['email'];
    $studentNumber = $_POST['studentNumber'];
    $pw = $_POST['pw'];


    $insertStudent = "INSERT INTO
                        `students` ( `firstName`, `lastName`, `course`, `yearSection`, `email`, `studentNumber`, `pw`)
                        VALUES ( '$firstName',  '$lastName',  '$course',  '$yearSection', '$email',  '$studentNumber', '$pw')";



    if (mysqli_query($conn, $insertStudent)) 
    {

        echo "Data was registered";

    }   else
        {

            echo "Data was NOT registered" . mysqli_error($conn);
 
        }
            header("Location: login.php");

}

//****************************LOG IN****************************//

if ( isset($_POST['loginbtn']) ) 
{


    $email = $_POST['email'];
    $pw = $_POST['pw'];

    $select = "SELECT *
                FROM `students`
                WHERE `email` = '$email' AND `pw` = '$pw'
                LIMIT 1";

    $query = mysqli_query($conn, $select);

    if (mysqli_num_rows($query) != 0) 
    {
        if ($row = mysqli_fetch_assoc($query) ) 
        {
    
            $_SESSION['firstName'] = $row['firstName'];
            $_SESSION['lastName'] = $row['lastName'];

            header("Location: hello.php");



        } else 
            {

                echo mysqli_error($conn);

            }

    } else
        {

            echo "<script>window.alert('User cannot be found');
                            window.location = 'index.php';
                            </script>"; 

        }

}
//****************************LOG OUT****************************//

if (isset($_POST['logoutbtn']) )
{

    session_destroy();
    header("Location: login.php");








}


//****************************DISPLAY STUDENTS****************************//


if (isset($_POST['studentsbtn']) )
{
    $select = "SELECT *
                FROM `students` ";

    $query = mysqli_query($conn, $select);


    if ($query)
    {

        if(mysqli_num_rows($query) > 0 )
        {

            $_SESSION['showbtn'] = [];

            while($row = mysqli_fetch_assoc($query) )
            {

                
                array_push($_SESSION['showbtn'], $row);

            }

        

        }
    }
        else 
        {

        }

        header("Location: students.php");


    }





























































?> 