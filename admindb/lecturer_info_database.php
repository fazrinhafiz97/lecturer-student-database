
<html>
   
   <head>
       <style>table {
       border-collapse: collapse;
       width: 100%;
       text-align: left;</style>
      <title>Lecturer Info</title>
        <link rel="stylesheet" type="text/css" href="../programinfo/css/welcome_style.css">
   </head>
   
   <body>
       <h2 style="font-size : 30px;">Lecturer Info</h2>
       <br>
       <div style="background-color : lightpink; font-size : 20px;">
        <table>
            <tr>
            <th>No.</th>
            <th>Lecturer ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            </tr>
<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if ($conn -> connect_error){
    die ("Connection failed:". $conn-> connect_error);
}

$sql = "SELECT * FROM lecturerinfo";

$result = $conn->query($sql);

if (!empty($result) && $result->num_rows > 0) {
  // output data of each row
    
  while($row = $result->fetch_assoc()) {
    $id = $row["id"];
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["Lect_ID"]. "</td><td>" . $row["Lect_Name"]. "</td><td> " . $row["Lect_Email"]. "</td><td>" . $row["Lect_Phone"] . "</td><td> <a href='modify_lecturer.php?modifyid=$id'>Modify</a> | <a href='delete_lecturer.php?deleteid=$id'>Delete</a>" . " </td></tr>";
  }
    echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
    <br><br>
    <div style="align-content: center">
    <a href='add_lecturer.php'>Add</a><br>
    <a href='welcome.php'>Main Menu To Admin Module Page</a><br>
    <a href='welcome_lecturer.php'>Main Menu To Lecturer Module Page</a><br>
    <a href='welcome_student.php'>Main Menu To Student Module Page</a>
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