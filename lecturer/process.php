<?php
include_once 'dbConnection.php';

if(isset($_POST['submit']))
{	 

	 $name = $_POST['name'];
	 $matric = $_POST['matric'];
	 $Q1 = $_POST['Q1'];
	 $Q2 = $_POST['Q2'];
	 $Q3 = $_POST['Q3'];
	 $Q4 = $_POST['Q4'];
	 $Q5= $_POST['Q5'];
	 $sql = "INSERT INTO quiz (Name, Matric_ID, Q1,Q2,Q3,Q4,Q5)
	 VALUES ('".$name."','".$matric."','".$Q1."','".$Q2."','".$Q3."','".$Q4."','".$Q5."');";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>