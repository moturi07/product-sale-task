<?php
require('config.php');
if($_POST['id'])
{
$id=$_POST['id'];
$retval = mysqli_query($connection,"SELECT `product_id`, `image` FROM `products` WHERE product_id='$id'");
$row = mysqli_fetch_assoc($retval);
$filename=$row['image'];
 if (file_exists($filename)) {
    unlink($filename);

 }
$delete = "DELETE FROM products WHERE products.product_id='$id'";
mysqli_query($connection,$delete);
echo "Product was deleted successifully";
}

?>