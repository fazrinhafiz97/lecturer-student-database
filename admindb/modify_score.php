<?php
include("dbConnection.php");

$getid = $_GET['modifyid'];
$sql = "SELECT * FROM studentscore WHERE id = '$getid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$id = $row['id'];
$studid = $row['Student_ID'];
$courseid = $row['Course_ID'];
$quiz1score = $row['Quiz1_Score'];
$quiz2score = $row['Quiz2_Score'];
$email = $row['Email'];

if(isset($_POST['updateedit'])) {
    $upid = $_POST['upid'];
    $upstudid = $_POST['upstudid'];
    $upcourseid = $_POST['upcourseid'];
    $upquiz1score = $_POST['upquiz1score'];
    $upquiz2score = $_POST['upquiz2score'];
    $upemail = $_POST['upemail'];
    $sqledit = "UPDATE studentscore SET Student_ID = '$upstudid', Course_ID = '$upcourseid', Quiz1_score = '$upquiz1score', Quiz2_score = '$upquiz2score', Email = '$email WHERE id = '$upid'";
    $result = mysqli_query($conn, $sqledit);
    header("location: student_score_database.php");
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
    <input type="text" name="upcourseid" value="<?php echo $courseid; ?>"><br><br>
    <input type="text" name="upquiz1score" value="<?php echo $quiz1score; ?>"><br><br>
    <input type="text" name="upquiz2score" value="<?php echo $quiz2score; ?>"><br><br>
    <input type="text" name="upemail" value="<?php echo $email; ?>"><br><br>
    <input type="submit" name="updateedit" value="Update">
    </form>
</body>    
</html>