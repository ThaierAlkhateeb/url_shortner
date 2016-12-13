<?php
require "Shortner.php";
if(isset($_GET['code'])){
	$instance= new Shortner;
	$code=$_GET['code'];
	if($url= $instance->getUrl($code)){
		header("location:{$url}");
		die();
	}
}
header('location:index.php');