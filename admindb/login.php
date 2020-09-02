<?php
include("dbConnection.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'psw');
$status = filter_input(INPUT_POST, 'status');
$sql = "SELECT * FROM databaseuser WHERE username = '$username' and password = '$password' and status = '$status'";
$result = mysqli_query($conn,$sql) or die( mysqli_error($conn));
$row = mysqli_fetch_row($result);

$count = mysqli_num_rows($result);

    if($count == 1 ) {
        print_r ($row);
        $logged_in_user = mysqli_fetch_assoc($result);
        
        if ($row[3] == 'admin') {

			        $_SESSION['login_user'] = $username;
        
        header("location: welcome.php");	  
			}
        
       else if ($row[3] == 'lecturer') {
             $_SESSION['login_user'] = $username;
        
        header("location: welcome_lecturer.php");
       }
    
         else if ($row['3'] == 'student') {
             $_SESSION['login_user'] = $username;
        
        header("location: welcome_student.php");
       }
        
        }
    
    else {
         $error = "Your Login Name or Password or Status is invalid";
        echo $error;
      }
   }

?>