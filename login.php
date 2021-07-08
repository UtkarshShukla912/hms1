<?php
include('connection.php');

if(isset($_POST['submit']))
{

		$rnum = $_POST['rnumber'];
		$ridd = $_POST['rid'];
		$cancel= $_POST['cancel'];
		
		$result = $mysqli->query("INSERT INTO `login` (`room_no`,`room_id`,`cancel`) VALUES ('$rnum','$ridd','$cancel')");

		if($result)
		{
			header('Location: index.php');
		}
		else
			echo mysqli_error();
	}
	else
		echo 'Error while Checking ';
	?>