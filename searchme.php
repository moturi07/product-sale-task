<?php
require_once('include/header.php');
?>
<div class="container">
<div class="col-sm-12 col-md-12 col-lg-12 ">

<?php
if((isset($_POST['submit_search'])) && (!empty($_POST['s_search'])))
	  {
			  $name =$_POST['s_search'];
		  //-run  the query against the mysql query function 
$result=mysqli_query($connection,"SELECT * FROM property WHERE property_id LIKE '$name%' OR agency_name LIKE '$name%' OR details LIKE '$name%' OR property_name LIKE '$name%' OR location LIKE '$name%' OR bed_type LIKE '$name%' OR price='$name' LIMIT 18 ");

		  //-create  while loop and loop through result set 
	  $num_rows=mysqli_num_rows($result);
	if($num_rows>0)
	{
echo "<h2>Found ".$num_rows." properties</h2>";
while($row = mysqli_fetch_array($result))
{
	$agent_id=$row['agent_id'];
	$agent=$row['agency_name'];
	$agency_name=$row['agency_name'];
	$property_id=$row['property_id'];
	$property_name=$row['property_name'];
	$image=$row['image'];
	$location=$row['location'];
	$bed_type=$row['bed_type'];
	$price=$row['price'];
	$details=$row['details'];
	$listing_date=$row['listing_date'];
	?>
<div class="col-sm-12 col-md-12 col-lg-12 container-fluid panel panel-default">
<div class="col-sm-6 col-md-3 col-lg-3">
<?php echo "<img src=\"uploads/houses/" . $row['image'] . "\" class=\"img-thumbnail\" alt=\"\" />";?>

</div>	
	<div class="col-sm-6 col-md-9 col-lg-9">
<p style="text-transform:uppercase;font-weight:bold;"><?php echo $property_name; ?></p>
<strong>AGENT: </strong><?php echo '<a href="agentinfo.php?agent_id='.$agent_id.'">'.$agent.'</a>'; ?><br>
<strong>LOCATION: </strong><?php echo $location; ?><br>
<strong>PRICE: Kshs </strong><?php echo $price; echo' <br>';

echo $details;
echo  ' <span class="input-group-btn"><a href="houseinfo.php?property_id='.$property_id.'&agent_id='.$agent_id.'" role="button" class="btn btn-primary btn-md" style="float:right;">More details
    <span class="glyphicon glyphicon-menu-right"></span></a></span>';?>
</div>	
</div>	<br>
	<?php
	}
}
else
{
echo "<h4>No results were found please try again with a different criteria</h4>";	
echo '<span class="input-group-btn">    <button type="button" onclick="goBack()" class="btn btn-primary btn-sm center-block"><span class="glyphicon glyphicon-menu-left"></span><span class="glyphicon glyphicon-menu-left"></span>Back
    </button></span>';
}
}

else
{
	echo "<a href=\"index.php\">BACK</a>";
}
 mysqli_close($connection);
	?>
</div>
</div>

<?php
require_once('include/footer.php')
?>
