<?php
	Error_reporting (1);
	$con=Mysqli_connect("localhost","root","","bookshop");
	if ($con==false)
   	{
		echo "Database Connection is not Successful"; // error message
	}
?>