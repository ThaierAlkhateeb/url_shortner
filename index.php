<?php
@session_start();?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Url shortner</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="container">
			<h1 class="title">Shortner</h1>
				<?php
	      if(isset( $_SESSION["url"])){
			echo $_SESSION["url"];
			 unset($_SESSION["url"]);
		}else{
			
		}
	?>
	<form action="shorten.php" method="post">
				<input type="url" name="url" placeholder="enter the url" autocomplete="off"/>
				<input type="submit" value="shorten" />
			</form>
		</div>

	</body>	

</html>