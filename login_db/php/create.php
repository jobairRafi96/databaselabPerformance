<?php
	session_start();


	require_once('../service/functions.php');

	//$usertype = usertype($_SESSION['username']);
	//$row = mysqli_fetch_assoc($usertype);
	
				if ($_SESSION['user']['type'] == 'admin') {
					
					if(isset($_POST['submit'])){
					$username = $_POST['name'];
					$password = $_POST['pass'];
					$email = $_POST['email'];
					$type = $_POST['utype'];

					$con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');


					$sql = "insert into users values('','{$username}','{$password}','{$email}', '{$type}')";
					if(mysqli_query($con, $sql)){
						echo "Registration done!";
					}else{
						echo "Error";
					}
				}


			}else{
				echo "only admin can create user";
			}

	
	
?>

