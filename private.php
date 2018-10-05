<?php
session_start ();
if ($_SESSION ['logedin']==1){
	echo 'this is ting ting ting';
}else {
	header('location:index.php');
?>
<a href="logout.php">logout</a>