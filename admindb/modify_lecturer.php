<?php
include("dbConnection.php");

$getid = $_GET['modifyid'];
$sql = "SELECT * FROM lecturerinfo WHERE id = '$getid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$id = $row['id'];
$name = $row['Lect_Name'];
$email = $row['Lect_Email'];
$phone = $row['Lect_Phone'];
$lectid = $row['Lect_ID'];

if(isset($_POST['updateedit'])) {
    $upid = $_POST['upid'];
    $uplectid = $_POST['uplectid'];
    $upname = $_POST['upname'];
    $upemail = $_POST['upemail'];
    $upphone = $_POST['upphone'];
    $sqledit = "UPDATE lecturerinfo SET Lect_ID = '$uplectid', Lect_Name = '$upname', Lect_Email = '$upemail', Lect_Phone = '$upphone' WHERE id = '$upid'";
    $result = mysqli_query($conn, $sqledit);
    header("location: lecturer_info_database.php");
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
    <input type="text" name="uplectid" value="<?php echo $lectid; ?>"><br><br>
    <input type="text" name="upname" value="<?php echo $name; ?>"><br><br>
    <input type="text" name="upemail" value="<?php echo $email; ?>"><br><br>
    <input type="text" name="upphone" value="<?php echo $phone; ?>"><br><br>
    <input type="submit" name="updateedit" value="Update">
    </form>
</body>    
</html>