<?php include('dbConnection.php'); ?>

<html>
<head>
</head>
  <head>
       <style>table {
       border-collapse: collapse;
       width: 100%;
       text-align: left;</style>
      <title>Assing Workload</title>
        <link rel="stylesheet" type="text/css" href="../programinfo/css/welcome_style.css">
   </head>
   
   <body>
       <h2 style="font-size : 30px;">Assign Workload</h2>
       <h3>Click add button to add workload ,click modify to modify workload and delete to delete data.</h3>
       <br>
       <div style="background-color : cyan; font-size : 20px;">
           <br>
        <table>
            <tr>
            <th>No.</th>
            <th>Lecturer Name</th>
            <th>Course Name</th>
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

$sql = "SELECT * FROM workload";

$result = $conn->query($sql);

if (!empty($result) && $result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id = $row["id"];
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["lect_name"]. "</td><td>" . $row["course_name"]. "</td><td><a href='delete_workload.php?deleteid=$id'>Delete</a>" . " </td></tr>";
  }
    echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
    <br><br>
    <div style="align-content: center">
    <a href='add_workload.php'>Add</a><br>
    <a href='welcome.php'>Main Menu</a>
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