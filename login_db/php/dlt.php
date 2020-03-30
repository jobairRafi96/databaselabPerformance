<?php


	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$type = $_POST['type'];

		$con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');

		$sql = "DELETE FROM users WHERE username='{$username}'";
		if(mysqli_query($con, $sql)){
			echo "Registration done!";
		}else{
			echo "Error";
		}
	}
	


