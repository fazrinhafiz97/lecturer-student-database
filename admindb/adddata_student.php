<html>
<head>
</head>
<body>
<?php

$lectid = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$gpa = filter_input(INPUT_POST, 'gpa');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project";

//Connect to database

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}

else {

$sql = "INSERT INTO studentinfo (Student_ID,Student_Name,Student_Email,Student_Phone,Student_GPA)
values ('$lectid','$name','$email','$phone','$gpa')";
if ($conn->query($sql)){
echo "Data have been added!";
echo "<br><br><button style='font-size : 22px; text-align : center;'><a href = 'student_info_database.php'>Click Here To Go Back</a></button>";
}
else {
echo "Error: ".$sql."<br>". $conn->error;
}
$conn->close();
}

?>
</body>
</html>