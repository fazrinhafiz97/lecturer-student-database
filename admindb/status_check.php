<?php
include("dbConnection.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

$status = filter_input(INPUT_POST, 'status');
$sql = "SELECT * FROM databaseuser WHERE status = '$status'";
$result = mysqli_query($conn,$sql) or die( mysqli_error($conn));
$row = mysqli_fetch_field($result);
$count = mysqli_num_rows($result);
if ($count == 1){
/////////////////STATUS CHECK PAGE BREAK////////////
    
if($row->status = "admin") {
       
        header("location: login1.php");
}

////////////STATUS CHECK PAGE BREAK//////////////////////

elseif($row->status = "lecturer") {
 
        header("location: login2.php");

}
///////////STATUS CHECK PAGE BREAK///////////////

elseif($row->status = "student") {
 
        header("location: login3.php");

   }

///////////////INVALID STATUS/////////////////

}
}
?>