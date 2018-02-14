<?php
require('config.php');
 // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['email']) || empty($_POST['password'])) {
echo  "Email or Password is empty";
header("Location:login.php");
}
else
{
// To protect MySQL injection for Security purpose
$email = mysqli_real_escape_string($connection,$_POST['email']);
$password = mysqli_real_escape_string($connection,$_POST['password']);

// SQL query to fetch information of registerd users and finds user match.
$qry = "select email,password from tbl_login where  email='$email' AND password='$password'";

$res = mysqli_query($connection,$qry);
$num_row = mysqli_num_rows($res);
$row=mysqli_fetch_assoc($res);
if( $num_row == 1 ) {
		$_SESSION['email'] =$row['email'];
		header("location:../admin.php");	
}
else{
echo "The user does not exist or wrong credentials";
header("Location:../login.php");
}
}
mysqli_close($connection); // Closing Connection
}

?>