<?php
include('connection.php');

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mob = $_POST['mobile'];
	$check_in = $_POST['in'];
	$check_out = $_POST['out'];
	$rm = $_POST['room'];
	$room_type = $_POST['type'];
	$result = $mysqli->query("INSERT INTO `book` (`name`,`email`,`mobile_no`,`check_in`,`check_out`,`room`,`room_type`) VALUES ('$name','$email','$mob','$check_in','$check_out','$rm','$room_type')");

	if($result)
	{
		header('Location: payment.html');
	}
	else
		echo mysqli_error();
}
else
	echo 'Not book';
?>