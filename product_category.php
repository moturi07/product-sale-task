<?php require_once('include/header.php');?>
<div class="container">
<div class="col-md-12 text-center space1">
<div class="products">
<?php 
$product_category=(isset($_GET['product_category'])) ? $_GET['product_category'] : '';

$construct.="products.`product_category`='$product_category'";	

$sql = "SELECT * FROM products where ".$construct." ORDER BY trim(product_name) DESC;";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
	$product_category=$row['product_category'];
	$product_category_icon=$row['image'];
	$product_name=$row['product_name'];
		
		echo '<div class="col-md-3 col-sm-2 col-xs-12 row1">
		<div class="product">
		<img src="'.$page_link.'images/'.$product_category_icon.'" class="img-responsive">
		<div class="details"><h2 class="">'.$product_name.'</h2>
		<p>'.$row['product_price'].'</p>
		<a href="'.$page_link.'product/'.$row['product_name'].'.html">View</a>
		</div></div></div>' ;
    }
} else {
    echo "";
}

mysqli_close($connection);
?>
</div>
</div>
</div>


<?php
require_once('include/footer.php');

?>
</html>
