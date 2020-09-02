<?php
include("dbConnection.php");
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}

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

/* Style the content */
.content {
  text-align:"center";

}
* {
  box-sizing: border-box;
  width:50%;
  padding: 5px;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
  position: absolute;
  left: 30%;
  margin-left: -50px;
  border: 1px solid black;
  
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  text-align:"center";
}

.courses {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  text-align:"center";
}

.sections {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  align:"center";
}

courses:focus {
  background-color: #ddd;
  outline: none;
  }
sections:focus {
  background-color: #ddd;
  outline: none;
  }
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
 
}

/* Set a style for the submit button */
.registerbtn {
  background-color: lightblue;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
	width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
<div class="sidenav">
  <a href="#">Course</a>
  <a href="#">Subject</a>
  <a href="#">Register</a>
  <a href="#">View Student</a>
  <a href="#">Logout</a>
</div>
<form method="post" action="process.php">
  <div class="container">
    <h1>BIC 210404 QUIZ DATABASE</h1>
    <h3>Please fill in this form to answer the question.</h3>

  <label for="name"><b>Enter your name.</b></label>
    <input type="text" placeholder="Name" name="name" id="name" required>

  <label for="matric"><b>Matric Number.</b></label>
    <input type="text" placeholder="Matric Number" name="matric" id="matric" required>

    <label for="q1"><b>What is a disadvantage of a computerized database?</b></label>
    <input type="text" placeholder="Enter the answer" name="Q1" id="q1" required>

    <label for="q2"><b>What stores all of the data in the database?</b></label>
    <input type="text" placeholder="Enter the answer" name="Q2" id="q2" required>
	
	<label for="q3"><b>What is a disadvantage of a computerized database?</b></label>
    <input type="text" placeholder="Enter the answer" name="Q3" id="q3" required>
	
	<label for="q4"><b>Checking the data that you have entered against the original source data is called</b></label>
    <input type="text" placeholder="Enter the answer" name="Q4" id="q4" required>
	
	<label for="q5"><b>A relational database is a good idea because it cuts data</b></label>
    <input type="text" placeholder="Enter the answer" name="Q5" id="q5" required>
	
    <button type="submit" name="submit" class="registerbtn">Submit</button>
  </div>
</form>

</body>
</html>