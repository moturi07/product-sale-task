<?php require_once('include/header.php');

if((isset($_GET['product_name'])) && (isset($_SESSION['email']) ))
{
$product_name=$_GET['product_name'];
$product_id=$_GET['product_id'];

$retval = mysqli_query($connection,"SELECT `product_id`, `product_category`, `product_name`, `product_price`, `product_description`, `image` FROM `products` WHERE product_name='$product_name' AND product_id='$product_id'");
$row = mysqli_fetch_assoc($retval);
?>
<div class="container">
<div class="col-sm-12 col-md-12 col-lg-12" style="border:1px solid grey;margin-top:10px;">

<!--data for the profile of the agent-->
<form class="form-3" method="post" action="<?php echo $page_link;?>include/save_product.php" enctype="multipart/form-data" style="max-width:100%;">
<div class="form-group">       
<label for="firstname" class="col-sm-4 control-label" align="left">Product Category</label>           
<input type="hidden" name="product_id" value="<?php echo$row['product_id']?>">       
<input type="text" class="col-lg-7 form-control" name="product_category" value="<?php echo$row['product_category']?>">       
</div>    

<div class="form-group">       
<label for="name" class="col-sm-4 control-label">Product Name:</label>
<input type="text" name="product_name"  class="form-control"  value="<?php echo$row['product_name']?>">		
</div>   

<div class="form-group">       
<label for="name" class="col-sm-4 control-label">Product Price:</label>
<input type="text" name="product_price"  class="form-control"  value="<?php echo$row['product_price']?>">		
</div>
   
<div class="form-group">       
<label for="firstname" class="col-sm-4 control-label" align="left">Product Description</label>           
<textarea class="col-lg-7 form-control" name="product_description"><?php echo $row['product_description']?></textarea>       
</div>    

<div class="form-group">       
   <label for="name" class="col-sm-4 control-label">Product Pic:</label>
<input type="file" name="image" class="col-sm-8 form-control" id="inputfile" accept="image/*">
<input type="hidden" name="MAX_FILE_SIZE" value="100000" />	
   </div>
                            <div class="form-group col-lg-2 col-lg-offset-5" style="margin-top:5px;">
                            <button type="submit" class="btn btn-primary" name="product_update">UPDATE</button>
                            </div> 
   </form>
</div>


</div>

<?php if(isset($_SESSION["info"]))
{
	echo $_SESSION["info"];	unset($_SESSION["info"]);
}
}
else
{
header("location:admin.php");
}
?>

</div>
</div>



<?php
require_once('include/footer.php')
?>
</html>
