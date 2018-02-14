<?php require_once('include/header.php');?>

<div class="container">
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="col-sm-7 col-md-9 col-lg-9">
<?php 
if(isset($_GET['product_name']))
{
$product_name = $_GET['product_name'];


$retval = mysqli_query($connection,"SELECT `product_name`, `product_category`, `product_name`, `product_price`, `product_description`, `image`, `product_status`, `products_available`, `date_modified` FROM `products` where product_name='$product_name'");
if(! $retval )
{
echo "Fail to load the Property ";

}
if($row = mysqli_fetch_array($retval))
{
	$product_category=$row['product_category'];

}
?>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="col-md-8">
<?php echo "<img src=\"../images/" . $row['image'] . "\" class=\"img-responsive\" alt=\"\" />";?>
</div>	
<div class="col-md-4">
<h1 class="text-center" style="text-transform:uppercase;font-weight:bold;"><?php echo $row['product_name']; ?></h1>
<hr>
<p><strong>PRODUCT CATEGORY: </strong><?php echo $row['product_category']; ?></p>
<p><strong>PRODUCT PRICE: </strong> kshs. <?php echo $row['product_price']; ?></p>
<p><strong>PRODUCT DETAILS: </strong><br><?php echo $row['product_description'];?></p>
</div>	
</div>	



</div>

<div class="col-sm-5 col-md-3 col-lg-3">
<strong>SIMILAR PROPERTIES</strong>
<?php 
$retvala = mysqli_query($connection,"select * from products where product_category='$product_category' LIMIT 3");
while($rows = mysqli_fetch_array($retvala))
{
echo "<h2>".$rows['product_name']."</h2>";
echo '<a href="'.$page_link.'product/'.$rows['product_name'].'.html">';
echo "<img src=\"../images/" . $rows['image'] . "\" class=\"img-responsive\" alt=\"\" /></a>";
}?>
</div>
</div>
</div>


<?php
}
require_once('include/footer.php');

?>
</html>
