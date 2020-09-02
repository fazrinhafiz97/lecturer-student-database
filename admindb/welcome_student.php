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
       <div style="background-color : cyan; font-size : 20px;">
       <a href = "student_info_database.php">Student Info</a>
       <br>
       <a href = "student_score_database.php">Student Score</a>
       <br>
       </div>
       <h2 style="font-size : 30px;">Restricted Tables.</h2>
       <br>
       <div style="background-color : cyan; font-size : 20px;">
       <a href = "course_info_database.php">Course Info</a>
       <br>
       <a href = "lecturer_info_database.php">Lecturer Info</a>
       </div>
       <br>
      <button style="font-size : 22px; text-align : center;"><a href = "index.html">Sign Out</a></button>
    <footer style="font-size : 12px; text-align : center;">
    UNIVERSITI TUN HUSSEIN ONN &copy 2019 </footer>
   </body>
   
</html>