<?php include('include/header.php');
if(isset($_SESSION['email']))
{
?>
<div class="container">	
<?php if(isset($_SESSION["info"])){echo "<div class='alert alert-info'>".$_SESSION["info"]."</div>";	unset($_SESSION["info"]);}?>
<div id="info">

</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<?php
$sql = "SELECT * FROM products ORDER BY (product_name) DESC;";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
	$product_category=$row['product_category'];
	$product_category_icon=$row['image'];
	$product_name=$row['product_name'];
		
		echo '<div class="col-md-12 row1">
		<div class="col-md-4">
		<img src="images/'.$product_category_icon.'" class="img-responsive"></div>
		<div class="col-md-8"><h2 class="">'.$product_name.'</h2>
		<p>Kshs. '.$row['product_price'].'</p>
		<a href="'.$page_link.'edit-product/'.$product_name.'/'.$row['product_id'].'.html">Edit</a>
		<br><a id="'.$row['product_id'].'" class="delete">Delete</a>
		</div></div>' ;
    }
} else {
    echo "";
}

mysqli_close($connection);
?>
</div>
</div>

<?php
require_once('include/footer.php');
}
else{
	echo '<script>location.replace("login.php");</script>';
}
?>
<script type="text/javascript">
$(function() {
$(".delete").click(function(){
var element = $(this);
var del_id = element.attr("id");
var info = 'id=' + del_id;
if(confirm("Are you sure you want to Delete "+del_id+"?"))
{
 $.ajax({
   type: "POST",
   url: "include/del_product.php",
   data: info,
success: function(html){    
$("#info").html(html);
	location.reload().delay(2000);
 }
});

 }
return false;

});
});
</script>