<?php
$con = mysqli_connect("localhost", "service", "gamer.123", "YSA11Service");
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>