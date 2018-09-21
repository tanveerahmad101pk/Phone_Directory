
<?php 
include_once ('connection.php');
if (isset ($_POST['submit']))
{
$fname=$_POST['fname'];
$laname=$_POST['lname'];
$email=$_POST['email'];
$mobnumber=$_POST['mobnumber'];
$add=$_POST['add'];
$pass=$_POST['pass'];

mysqli_query ($con,"insert into user_reg (first_name,last_name,mob_number,email,password) values('$fname','$laname','$email','$mobnumber','$add','$pass') ");
{
	echo "Submitted";
}
}

?>

<!Doctype Html>
<html>

<head>
<head>
</head>
<title></title>
</head>
<body>
<form action=""  method="post">
<h2>Registor Yourself</h2><br>
First Name: <input type="text" name="fname"><br>
Last Name: <input type="text" name="lname"><br>
E-mail: <input type="text" name="email"><br>
Mobile Number: <input type="text" name="mobnumber"> <br>

Address:<br> <textarea name="add" rows="5" cols="40"></textarea><br>
Password: <input type="text" name="pass"><br>
<input type="submit" name="submit">

</form>
</body>

</html>