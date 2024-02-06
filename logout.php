<?php

error_reporting('0');

include('config.php');


session_start();
 
session_destroy();
session_unset();
header("Location: index.php");
exit();


?>

