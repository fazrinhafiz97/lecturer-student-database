<html>
<head>
</head>
<body>
<?php

$lectid = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
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

$sql = "INSERT INTO lecturerinfo (Lect_ID,Lect_Name,Lect_Email,Lect_Phone)
values ('$lectid','$name','$email','$phone')";
if ($conn->query($sql)){
echo "Data have been added!";
echo "<br><br><button style='font-size : 22px; text-align : center;'><a href = 'lecturer_info_database.php'>Click Here To Go Back</a></button>";
}
else {
echo "Error: ".$sql."<br>". $conn->error;
}
$conn->close();
}

?>
</body>
</html>