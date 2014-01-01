<?php
$page = $_GET['page'];
if(!isset($page) || $page == "head" || $page == "foot" || $page == "menu" || empty($page))
	$page = "home";

$file = "includes/".$page.".php";
if(file_exists($file))
	include $file;
else
	include "includes/404.php";
?>
