<?php
include('config.php');
if(isset($_POST['product_update']))
{
$product_id=strtolower($_POST['product_id']);
$product_category=ucwords($_POST['product_category']);
$product_name=ucwords($_POST['product_name']);
$product_price=ucwords($_POST['product_price']);
$product_description=$_POST['product_description'];
$image =$_FILES['image'];	

if(is_uploaded_file($_FILES['image']['tmp_name']))
{
	// Check to see if the type of file uploaded is a valid image type
	function is_valid_type($file)
	{
    $valid_types = array("image/jpg", "image/jpeg", "image/bmp", "image/png");
	    if (in_array($file['type'], $valid_types))
	        return 1;
	    return 0;
	}
		$TARGET_PATH = "images/";	  

	$image =$_FILES['image'];	
	$temp=explode(".",$_FILES["image"]["name"]);
	$TARGET_PATH .=$product_id.'.'.end($temp);	
	$tar=$product_id.'.'.end($temp);	

	if(!is_valid_type($image))
{	
$_SESSION["info"]= "You must upload a jpeg, png, or bmp";
header("location:../admin.php");
	}	 

	if ((move_uploaded_file($image['tmp_name'], $TARGET_PATH))&& (isset($_FILES['image'])))
	{			
$sql="UPDATE `products` SET `product_category`='$product_category',`product_name`='$product_name', `product_price`='$product_price', `product_description`='$product_description',`image`='$tar' WHERE product_id='$product_id'";

$result=FALSE;
if(mysqli_query($connection,'BEGIN'))
{	
if(mysqli_query($connection,$sql))
{
$result=mysqli_query($connection,'COMMIT');
$_SESSION["info"]= "You have updated your account successfully ";
header("location:../admin.php");
}
else
{
$_SESSION["info"]= "An error occurred during update";
header("location:../admin.php");
}
}}
	else
	{
	    // A common cause of file moving failures is because of bad permissions on the directory attempting to be written to
	    // Make sure you chmod the directory to be writeable
$_SESSION["info"]= "Could not upload file.  Check read/write persmissions on the directory ";
header("location:../admin.php");
	}
}
else
{
    $sql=mysqli_query($connection,"UPDATE `products` SET `product_category`='$product_category',`product_name`='$product_name', `product_price`='$product_price', `product_description`='$product_description' WHERE product_id='$product_id' AND product_name='$product_name'");	
if($sql) 
{
$_SESSION["info"]= "You have updated your account successfully ";
header("location:../admin.php");
}
else
{
mysqli_query($connection,'ROLLBACK');
$_SESSION["info"]= "An error occured";
header("location:../admin.php");
}
}	
}
mysqli_close($connection);
?>