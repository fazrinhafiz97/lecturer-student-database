

<?php
include("dbConnection.php");

$getid = $_GET['deleteid'];
$sel = "DELETE FROM courseinfo WHERE id = '$getid' ";
$result = mysqli_query($conn, $sel);
    
    if($result) {
        header("location: course_info_database.php");
}
else {
     echo("Error description: " . $conn ->error);
}
?>