<?php
	
	require('db.php');
	
	function validate($username, $password){

		$con = getConnection();
		$sql = "select * from users where username='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}

	function usertype($username){

		$con = getConnection();
		$sql = "select type from users where username='{$username}'";
		$result = mysqli_query($con, $sql);

		return $result;
	}


	function getAllUsers(){
		$con = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function edit($username,$password,$email,$id){

		$con = getConnection();
		$sql = "update users set username = '{$username}', password = '{$password}', email='{$email}' where Id='{$id}'";
		$result = mysqli_query($con, $sql);

		return $result;
	}


?>