<html>
<head>
</head>
<body>
<?php

$studid = filter_input(INPUT_POST, 'studid');
$courseid = filter_input(INPUT_POST, 'courseid');
$quiz1score = filter_input(INPUT_POST, 'quiz1score');
$quiz2score = filter_input(INPUT_POST, 'quiz2score');
$email = filter_input(INPUT_POST, 'email');
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

$sql = "INSERT INTO studentscore (Student_ID, Course_ID, Quiz1_Score, Quiz2_Score, Email)
values ('$studid','$courseid','$quiz1score','$quiz2score','$email')";
if ($conn->query($sql)){
echo "Data have been added!";
echo "<br><br><button style='font-size : 22px; text-align : center;'><a href = 'student_score_database.php'>Click Here To Go Back</a></button>";
}
else {
echo "Error: ".$sql."<br>". $conn->error;
}
$conn->close();
}

?>
</body>
</html>