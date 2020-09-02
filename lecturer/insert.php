<?php

//insert.php

$connect = new PDO("mysql:'localhost', 'root', '', 'project');

$query = "
INSERT INTO tbl_sample
(insert_number, question) 
VALUES (:insert_number, :question)
";

for($count = 0; $count<count($_POST['hidden_insert_number']); $count++)
{
	$data = array(
		':insert_number'	=>	$_POST['hidden_insert_number'][$count],
		':question'	=>	$_POST['hidden_question'][$count]
	);
	$statement = $connect->prepare($query);
	$statement->execute($data);
}

?>