<?php
error_reporting(0);
include_once('include/header.php'); 
if (isset($_SESSION['email']))
{
echo '<script>location.replace("index.php");</script>';
}
else
{
?>

<div class="container" >
<div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-2 ">

<h3 align="center">LOGIN</h3>

<form class="form-3" role="form" style="max-width:500;" action="<?php echo $page_link;?>include/login-check.php" method="post">    
<div class="form-group">       
<label for="firstname" class="col-sm-4 control-label">E-MAIL</label>                
<input type="email" class="col-lg-7 form-control" name="email" placeholder="admin@gmail.com" required>       
</div>    


<div class="form-group">       
<label for="firstname" class="col-sm-4 control-label">Password</label>       
<input type="password" class="col-lg-7 form-control" name="password" required placeholder="admin">       
</div>    


<div class="text-center form-group col-sm-11 col-lg-11 center-text">      
<button type="submit" name="submit" class="btn btn-default">LOGIN</button>   
</div>

   <div class="form-group">       
   <div class="col-sm-offset-4 col-sm-8 col-lg-offset-4 col-lg-8">          
      
   </div>    
   </div> 
</form>


<?php if(isset($_SESSION["info"])){echo "<span style='color:red;'>info: ".$_SESSION["info"]."</span>";	unset($_SESSION["info"]);}?>
</div>	
</div>

<?php
require_once('include/footer.php');
}
?>

</html>
