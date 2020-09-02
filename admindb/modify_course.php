<?php
include("dbConnection.php");

$getid = $_GET['modifyid'];
$sql = "SELECT * FROM courseinfo WHERE id = '$getid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$id = $row['id'];
$courseid = $row['Course_ID'];
$name = $row['Course_Name'];

if(isset($_POST['updateedit'])) {
    $upid = $_POST['upid'];
    $upcourid = $_POST['upcourid'];
    $upname = $_POST['upname'];
  
    $sqledit = "UPDATE courseinfo SET Course_ID = '$upcourid', Course_Name = '$upname' WHERE id = '$upid'";
    $result = mysqli_query($conn, $sqledit);
    header("location: course_info_database.php");
}

?>



<html>
<head>
  <link rel="stylesheet" type="text/css" href="../programinfo/css/welcome_style.css">
<title>Modify</title>
</head>
<body>

    <form method="post" action="">
    <input type="text" name="upid" value="<?php echo $id; ?>"><br><br>    
    <input type="text" name="upcourid" value="<?php echo $courseid; ?>"><br><br>
    <input type="text" name="upname" value="<?php echo $name; ?>"><br><br>
    <input type="submit" name="updateedit" value="Update">
    </form>
</body>    
</html>