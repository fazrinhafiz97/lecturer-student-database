<html>
<head>
  <link rel="stylesheet" type="text/css" href="../programinfo/css/welcome_style.css">
<title>Modify</title>
</head>
<body>
<form action="adddata_workload.php" method="post">
<h1>Add data</h1>
    <p>Please enter the data.</p>
    <hr>
    <label for="lectname"><b>Lecturer</b>
    <select name="lectname" id="lectname">
<?php 
       include("dbConnection.php");
$sql = mysqli_query($conn, "SELECT Lect_Name FROM lecturerinfo");
while ($row = $sql->fetch_assoc()){
echo "<option name=\"lectname\">" . $row['Lect_Name'] . "</option>";
}
?>
    
</select>
        </label>
    <label for="coursename"><b>Course</b>
    <select name="coursename" id="coursename">
<?php 
       include("dbConnection.php");
$sql = mysqli_query($conn, "SELECT Course_Name FROM courseinfo");
while ($row = $sql->fetch_assoc()){
echo "<option name=\"coursename\">" . $row['Course_Name'] . "</option>";
}
?>
</select>
    </label>
    <button type="submit" class="addbtn">Add</button>
    </form>
</body>    
</html>