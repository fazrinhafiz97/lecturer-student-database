<?php
include("dbConnection.php");

$getid = $_GET['modifyid'];
$sql = "SELECT * FROM workload WHERE id = '$getid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$id = $row['id'];
$lect = $row['lect_name'];
$course = $row['course_name'];

if(isset($_POST['updateedit'])) {
    $upid = $_POST['upid'];
    $uplect = $_POST['uplect'];
    $upcourse = $_POST['upcourse'];
  
    $sqledit = "UPDATE workload SET lect_name = '$uplect', course_name = '$upcourse' WHERE id = '$upid'";
    $result = mysqli_query($conn, $sqledit);
    header("location: workload_database.php");
}

?>



<html>
<head>
  <link rel="stylesheet" type="text/css" href="../programinfo/css/welcome_style.css">
<title>Modify</title>
</head>
<body>

    <form method="post" action="">
        
        <label for="upname"><b>Lecturer</b>
         <select name="upname" id="upname" value="<?php echo $lect; ?>">
    <?php 
       include("connect.php");
$sql = mysqli_query($conn, "SELECT Lect_Name FROM lecturerinfo");
while ($row = $sql->fetch_assoc()){
echo "<option name=\"upname\" value=". $row['Lect_Name'] .">" . $row['Lect_Name'] .  "</option>";
}
?>
    
</select>
        </label>
    
    <label for="upcourse"><b>Course</b>
    <select name="upcourse" id="upcourse" value="<?php echo $course; ?>">
<?php 
       include("connect.php");
$sql = mysqli_query($conn, "SELECT Course_Name FROM courseinfo");
while ($row = $sql->fetch_assoc()){
echo "<option name=\"upcourse\" value=". $row['Course_Name'] .">" . $row['Course_Name'] .  "</option>";
}
?>
</select>
        </label>
        <input type="submit" name="updateedit" value="Update">
    </form>
</body>    
</html>