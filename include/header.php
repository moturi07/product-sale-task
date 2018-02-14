<?php include('config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" href="images/logo.png" size="18x18"> 
    <title>test task</title>
	
<link href="<?php echo $page_link;?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $page_link;?>assets/css/style.css" rel="stylesheet">
<link href="<?php echo $page_link;?>assets/css/font-awesome.css" rel="stylesheet" type="text/css">
<script src="<?php echo $page_link;?>assets/js/jquery.js"></script>
	
<script   src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

 <!-- Navigation -->
<div class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display    -->
			
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#head">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Top Menu Items -->
<div class="collapse navbar-collapse" id="head">        
    <ul class="nav navbar-nav top-nav">
        <li><a href="<?php echo $page_link;?>index.php">Home</a></li>
        <li class="dropdown">             
			<a href="<?php echo $page_link;?>product_category.php" class="dropdown-toggle" data-toggle="dropdown">Products<b class="caret"></b></a>
			<ul class="dropdown-menu">
<?php
$sql = "SELECT * FROM products GROUP BY product_category ORDER BY (product_category) DESC;";
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {	
		echo'<li class="divider"></li>'; 	
		echo '<a href="'.$page_link.'product-category/'.$row['product_category'].'.html">'.$row['product_category'].'</a>';
}}
?>		
</ul>          
</li> 
<?php
if(isset($_SESSION['email']))
{?>
<li><a href="<?php echo $page_link;?>admin.php">Admin</a></li>
<li><a href="<?php echo $page_link;?>include/logout.php">logout</a></li>
<?php
}							
else
{
echo '<li><a href="'.$page_link.'login.php">Login</a></li>';	
}?>
</ul>
<form method="post" class="form-horizontal form1 col-md-6" action="<?php echo $page_link;?>searchme.php" style="">
<div class="input-group input-group-lg center-block" style="display:inline;">
<div class="input-group">
<input type="text" class="form-control" placeholder="Search for..." name="s_search">
<span class="input-group-btn">    
<button type="submit" class="btn btn-primary btn-sm" name="submit_search"><span class="fa fa-search"></span> Search</button>
</span>
</div>
</div>
</form>
</div>
 </div>
<!-- /.container -->
