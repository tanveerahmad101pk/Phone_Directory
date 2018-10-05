
<?php
//print_r ($_GET);
session_start();

if(isset($_POST['first_name']) )
{
echo $_POST['first_name'];
echo $_POST['my_email'];
echo 'Reg Successfully';
} 
if (isset($_POST['first_name']) && $_POST['first_name']=='hasan')
{
	
	$_SESSION['logedin']=1;
	header['location: data.php'];
	
}
else
{
	//echo 'Please logedin';
	echo 
	'<form >
<h2></h2><br>
Name: <input type="text" name="first_name">
Password: <input type="text" name="my_email">
<input type="submit" name="button"> 

</form>';
}
?>