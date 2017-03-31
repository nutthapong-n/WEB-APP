	<?php
	if($press == "logout")
	{
		session_unset();
		session_destroy();
	}
		function __autoload($class_name)
	{	
	require_once "./class/".$class_name.".class.php";
	}
	//check login
	$member = Authentication::login($_POST["user"],$_POST["Password"]);
	if( $member == NULL && $_POST["press"] == "login"){
		?>
		<div class="Popup" align="center">
		<a id="alert_message">Your username or password is indirect</a>
		
		</div>
		<?php


	}
	if( $member && $_POST["press"] == "login")
	{
		$_SESSION["member"] = $member;
		$_SESSION["username"] = $_POST["user"];
		$_SESSION["password"] = $_POST["Password"];
		$_SESSION["logon"] = 1;
		if($member->getProperty("right") == "admin"){
			header('Location: members_table.php');
		}
		else{
			header('Location: checkout_cart.php');
		}
	}
	?>