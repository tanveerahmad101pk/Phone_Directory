<?php
session_start ();
session_destroy();
unset($_SESSION ['logedin']);
header('location: index.php');
	
?>