<?php
include('connection.php');

if(isset($_POST['submit']))
{
	$card_type = $_POST['type'];
	$m = $_POST['month'];
	$y = $_POST['year'];
	$card_no = $_POST['num'];
	$card_name = $_POST['name'];
	$c_no = $_POST['cvv'];
	$pass = $_POST['password'];
	$result = $mysqli->query("INSERT INTO `payment` (`card_type`,`month`,`year`,`card_no`,`card_name`,`cvv`,`pass`) VALUES ('$card_type','$m','$y','$card_no','$card_name','$c_no','$pass')");

	if($result)
	{
		header('Location: overview.html');
	}
	else
		echo mysqli_error();
}
else
	echo 'Error try Again ';
?>