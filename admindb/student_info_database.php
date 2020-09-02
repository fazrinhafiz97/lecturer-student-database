
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
       <div style="background-color : lightblue; font-size : 20px;">
        <table>
            <tr>
            <th>No.</th>
            <th>Student ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>GPA</th></tr>
<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if ($conn -> connect_error){
    die ("Connection failed:". $conn-> connect_error);
}

$sql = "SELECT id, Student_ID, Student_Name, Student_Email, Student_Phone, 	Student_GPA FROM studentinfo";

$result = $conn->query($sql);

if (!empty($result) && $result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id = $row["id"];
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["Student_ID"]. "</td><td>" . $row["Student_Name"]. "</td><td> " . $row["Student_Email"]. "</td><td>" . $row["Student_Phone"] . "</td><td>" . $row["Student_GPA"] . "</td><td> <a href='modify_student.php?modifyid=$id'>Modify</a> | <a href='delete_student.php?deleteid=$id'>Delete</a>" . " </td></tr>";
  }
    echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
    <br><br>
    <div style="align-content: center">
     <a href='add_student.php'>Add</a><br>
     <a href="welcome.php">Main Menu To Admin Module Page</a><br>
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