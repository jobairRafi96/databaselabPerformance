<?php
 	session_start();
//if session was destroy in log out page we need to do login again.
 	session_destroy();
 	header("location: login.html");
 	
?>