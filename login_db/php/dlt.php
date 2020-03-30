<?php
	 	


		$id=$_GET['Id'];

		echo $id;

		$con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');

		$sql = "delete from users where Id='{$id}'";
		if(mysqli_query($con, $sql)){
			echo "delete  done!";
		}else{
			echo "Error";
		}
	

?>
	


