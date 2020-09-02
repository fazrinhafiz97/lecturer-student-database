<?php
include ('dbConnection.php');
session_start();
$email=$_SESSION['email'];
   if(!(isset($_SESSION[email]))){
header("location:index.php");
   }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}
h2 {text-align: center;}

/* Style the side navigation */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: lightblue;
  overflow-x: hidden;
  
}


/* Side navigation links */
.sidenav a {
  color: white;
  padding: 16px;
  text-decoration: none;
  display: block;
}

/* Change color on hover */
.sidenav a:hover {
  background-color: skyblue;
  color: black;
  width:200px;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  margin-left:auto;
  margin-right:auto;
  padding: 10px;
 text-align: left;
 column-width: 100px;
 tr:nth-child(even){background-color: #f2f2f2}
}

</style>
</head>
<body>
<div class="sidenav">
 <a href="\lecturer\register.php">Register Subject</a>
  <a href="/lecturer/regiquiz.php">Create Quiz</a>
  <a href="">Logout</a>
</div>

</body>
</html>