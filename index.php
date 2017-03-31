<!DOCTYPE.html>
<?php
	error_reporting (E_ALL ^ E_NOTICE);
	session_start();
	$press = $_GET["press"] ;

	//get extendtion
	require_once "Style_sheets/index_CSS.php";
	require_once "DBlink.inc.php";
	require_once "db_user.inc.php";
	require "home_controller.php";	 		


	//show_source("<index.php>"); 
	//show_source("/class/<Authentication.class.php>");
	//show_source("/class/<Member.class.php>");
	
?>



<head>
	<title>Seller Management</title>
			<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body  style="background-size: cover; overflow: auto; background-color: #008DA2">
	<div style="position: relative;">
		<img src="/www/image/header.png" style="width: 100%; height: 25%;">
	</div>
	<form class="loginForm" action="index.php" method="post" id="loginForm">
		<div class="header">
			<h3 align="center">LogIn</h3>
		</div>
		<div class="body" >
			<input type="Username" id="user" name="user" placeholder="Username" required><br/>
			<input type="Password" id="pass" name="Password" placeholder="Password" required>
		</div>
		<div>
			<button type="summit"  class="login"  name="press" value="login">Go..Login</button>
		</div>
	</form>

	
	
</body><?php

?>

<script type="text/javascript">

</script>