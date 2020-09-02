

<?php
include("dbConnection.php");

$getid = $_GET['deleteid'];
$sel = "DELETE FROM workload WHERE id = '$getid' ";
$result = mysqli_query($conn, $sel);
    
    if($result) {
        header("location: workload_database.php");
}
else {
     echo("Error description: " . $conn ->error);
}
?>