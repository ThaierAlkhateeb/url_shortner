<?php
@session_start();
include_once "Shortner.php";
$instance= new Shortner;

if(isset($_POST['url']))
{
	$url= $_POST['url'];

	if($code = $instance->makeCode($url)){
		$u= $instance->getUrl($code);
		$_SESSEION['url']="<a href=\"http://localhost/url_shortner/redirect.php?code=$code\">localhost/url_shortner/$code</a>";
	
	}

}
//header('location:index.php');
?>