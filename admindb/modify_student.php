<?php
include("dbConnection.php");

$getid = $_GET['modifyid'];
$sql = "SELECT * FROM studentinfo WHERE id = '$getid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$id = $row['id'];
$name = $row['Student_Name'];
$email = $row['Student_Email'];
$phone = $row['Student_Phone'];
$studid = $row['Student_ID'];
$gpa = $row['Student_GPA'];

if(isset($_POST['updateedit'])) {
    $upid = $_POST['upid'];
    $upstudid = $_POST['upstudid'];
    $upname = $_POST['upname'];
    $upemail = $_POST['upemail'];
    $upphone = $_POST['upphone'];
    $upgpa = $_POST['upgpa'];
    $sqledit = "UPDATE studentinfo SET Student_ID = '$upstudid', Student_Name = '$upname', Student_Email = '$upemail', Student_Phone = '$upphone', Student_GPA = '$upgpa' WHERE id = '$upid'";
    $result = mysqli_query($conn, $sqledit);
    header("location: student_info_database.php");
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
    <input type="text" name="upstudid" value="<?php echo $studid; ?>"><br><br>
    <input type="text" name="upname" value="<?php echo $name; ?>"><br><br>
    <input type="text" name="upemail" value="<?php echo $email; ?>"><br><br>
    <input type="text" name="upphone" value="<?php echo $phone; ?>"><br><br>
    <input type="text" name="upgpa" value="<?php echo $gpa; ?>"><br><br>
    <input type="submit" name="updateedit" value="Update">
    </form>
</body>    
</html>