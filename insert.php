<?php



$connect = new PDO("mysql:host=localhost;dbname=postgres", "postges", "b1c3x39cur4z2");

$query = "
INSERT INTO tbl_sample 
(cv, vacancie) 
VALUES (:cv, :vacancie)
";

for($count = 0; $count<count($_POST['hidden_cv']); $count++)
{
	$data = array(
		':cv'	=>	$_POST['hidden_cv'][$count],
		':vacancie'	=>	$_POST['hidden_vacancie'][$count]
	);
	$statement = $connect->prepare($query);
	$statement->execute($data);
}

?>