<?php
// connect to database
include_once ('connection.php');

// file properties
$file = $_FILES['image']['tmp_name'];

if (!isset($file))
  echo "Please select a profile pic";
else
{
  $image = addslashes(file_get_content($_FILES['image']['tmp_name']));
  $image_name = addslashes($FILES['image']['name']);
  $image_size = getimagesize($_FILES['image']['tmp_name']);

  if ($image_size==FALSE)
    echo "That isn't a image.";
  else
  {
	  mysqli_query ($con,"insert into pics (image_name,image) values('$image_name','$image') ");
{
	echo "Image Upload Successfully";
    
}
?>