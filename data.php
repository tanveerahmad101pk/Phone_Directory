<?php
session_start();
if($_SESSION ['logedin']==1)
{
	echo 'Tis is private data only for tanveer';
}
else
{
	header('index.php');
}
?>