<html>
   
   <head>
       <style>table {
       border-collapse: collapse;
       width: 100%;
       text-align: left;</style>
      <title>Student Info </title>
        <link rel="stylesheet" type="text/css" href="../programinfo/css/welcome_style.css">
   </head>
   
   <body>
       <h2 style="font-size : 30px;">Student Info</h2>
       <br>
       <div style="background-color : cyan; font-size : 20px;">
        <table>
            <tr>
            <th>Student ID</th>
            <th>Course_ID</th>
            <th>Quiz1_Score</th>
            <th>Quiz2_Score</th>
            <th>Email</th></tr>
<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if ($conn -> connect_error){
    die ("Connection failed:". $conn-> connect_error);
}

$sql = "SELECT Student_ID, Course_ID, Quiz1_Score, Quiz2_Score,Email FROM studentscore";

$result = $conn->query($sql);

if (!empty($result) && $result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Student_ID"]. "</td><td>" . $row["Course_ID"]. "</td><td>" . $row["Quiz1_Score"] . "</td><td>" . $row["Quiz2_Score"] . "</td><td>" . $row["Email"] . "</td><td><a href=''>Modify</a> | <a href='delete.php'>Delete</a>". " </td></tr>";
  }
    echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
            
    <br><br>
    <div style="align-content: center">
     <a href='add_score.php'>Add</a><br>
     <a href="welcome_lecturer.php">Main Menu To Lecturer Module Page</a><br>
     <a href="welcome_student.php">Main Menu To Student Module Page</a>
       </div>
    <br>
             <br>
           <br>
    <footer style="font-size : 12px; text-align : center;">
    UNIVERSITI TUN HUSSEIN ONN &copy 2020 </footer>
           </table>
       </div>
   </body>
   
</html>
           