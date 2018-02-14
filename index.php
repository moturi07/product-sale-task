<?php 
require_once('include/header.php');
?>
<div class="col-lg-12 col-md-12 text-center space1">
<div class="products">
<?php
$sql = "SELECT * FROM products ORDER BY (product_name) DESC;";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
	$product_category=$row['product_category'];
	$product_category_icon=$row['image'];
	$product_name=$row['product_name'];
		
		echo '<div class="col-md-3 row1">
		<div class="product">
		<img src="images/'.$product_category_icon.'" class="img-responsive">
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

<?php
require_once('include/footer.php')
?>