<?php
	// views/logout.php
	session_start();
	session_destroy();
	header("Location: login.php");
?>
