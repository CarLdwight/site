<?php 
	
	unset($_SESSION['active']);    	
session_destroy();
header("Location:login2.php");
?>