<?php
include('connection.php');

if(isset($_POST['submit']))
{
	$check_in = $_POST['in'];
	$check_out = $_POST['out'];
	$rm = $_POST['room'];
	$room_type = $_POST['type'];
	$result = $mysqli->query("INSERT INTO `check` (`check_in`,`check_out`,`room`,`room_type`) VALUES ('$check_in','$check_out','$rm','$room_type')");

	if($result)
	{
		header('Location: book.html');
	}
	else
		echo mysqli_error();
}
else
	echo 'Error while Checking ';
?>