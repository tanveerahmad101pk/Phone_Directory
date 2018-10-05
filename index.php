
<?php
//print_r ($_GET);
if(isset($_POST['first_name']))
{
echo $_POST['first_name'];
echo $_POST['my_email'];
echo 'Reg Successfully';
}
else
{
	echo 
	'<form >
<h2></h2><br>
Name: <input type="text" name="first_name">
Password: <input type="text" name="my_email">
<input type="submit" name="button"> 

</form>';
}
?>