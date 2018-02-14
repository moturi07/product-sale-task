<?php
ob_start();
session_cache_expire(30);
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 0);
//MySql 
$db_username 	= 'root';
$db_password 	= '';
$db_name 		= 'product-sale-task';
$db_host 		= 'localhost';

	
//connection to database
$connection = mysqli_connect($db_host,$db_username,$db_password, $db_name);
if(!$connection)
{
echo "Failed to connect to database ";
}
$page_link=(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]/product-sale-task/";
?>
