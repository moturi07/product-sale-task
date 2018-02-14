<?php
require('config.php');

if(session_destroy()) // Destroying All Sessions
{
session_destroy();


header("Location: ../login.php"); // Redirecting To login Page
}

?>