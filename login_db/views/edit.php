<?php
session_start();

	$Id = $_GET['Id'];
	$_SESSION['id']=$Id;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<h2>Edit Page</h2>
	<form action="../php/editcheck.php" method="post">
		<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>email:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>

</body>
</html>