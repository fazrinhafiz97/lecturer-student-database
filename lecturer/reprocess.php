<?php
header("lecturer/register.php");
include_once 'dbConnection.php';

if(isset($_POST['submit']))
{	 

	 $courses = $_POST['courses'];
	 $subject = $_POST['subject'];
	 $subject_code = $_POST['subject_code'];
	 $section = $_POST['sections'];
	 $sql = "INSERT INTO register (courses,subject, subject_code, section)
	 VALUES ('".$courses."','".$subject."','".$subject_code."','".$section."');";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
