<?php
   include('session.php');
?>
<html>
   
   <head>
      <title>Welcome </title>
        <link rel="stylesheet" type="text/css" href="../programinfo/css/welcome_style.css">
   </head>
   
   <body>
      <h1 style="font-size : 60px; text-align : center;">Welcome <?php echo $login_session; ?> !</h1> 
       <h2 style="font-size : 30px;">Manageable Tables.</h2>
       <br>
       <div style="background-color : lightblue; font-size : 20px;">
       <br>
        <br>
       <a style="font-color : white" href = "lecturer_info_database.php">Register Lecturer</a>
       <br>
           <br>
       <a style="font-color : white" href = "student_info_database.php">Register Student</a>
        <br>
           <br>
       <a style="font-color : white" href = "course_info_database.php">Register Course</a>
       <br>
        <br>
        <a style="font-color : white" href = "workload_database.php">Assign Workload</a>
        <br><br>
    
       </div>
       <br>
           <br>
           <br>
           <br>
           <br>
       
      <button style="font-size : 22px; text-align : center;"><a href = "index.html">Sign Out</a></button>
    <footer style="font-size : 12px; text-align : center;">
    UNIVERSITI TUN HUSSEIN ONN &copy 2020 </footer>
   </body>
   
</html>