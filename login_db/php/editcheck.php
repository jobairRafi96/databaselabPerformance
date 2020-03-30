<?php
session_start();


		if(isset($_POST['submit'])){
				$un =$_POST['username'];
				$pass = $_POST['password'];
				$em = $_POST['email'];
				$id = $_SESSION['id'];

				require_once('../service/functions.php');
				$result = edit($un,$pass,$em,$id);

				if ($result) {
					echo "edit done";
				}else{
					echo "error";
				}

			}
?>

