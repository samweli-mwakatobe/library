<?php
		$host ='localhost';
		$username ='root';
		$password ='';
		$db='library';

		$con =mysqli_connect($host, $username, $password, $db);

		if (!$con) {
			die("connection field");
		}
?>