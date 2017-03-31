<!DOCTYPE.html>
<head>
	<title>Seller Management</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php
session_start();
//get extention
$member = $_SESSION["member"];

require('headAndFoot.inc.php');
require("DBlink.inc.php");
require("/Style_sheets/checkout_cart_style.php");	
require "db_user.inc.php" ;

function __autoload($class_name)
{	
	require_once "./class/".$class_name.".class.php";
}

?>
<body style="background-color: #008DA2">
	<div class="container well well-sm" >
		<table class="table table-striped" align="center" id="pTable1" >
			<?php
			$res = get_users();
			
			?>
			<tr>
				<th>ID</th>
				<th>name</th>
				<th>surname</th>
				<th>Right</th>
			</tr>
			<?php
			$i = 0;
			while($i < $res->rowCount()){
				$row = $res->fetch(PDO::FETCH_OBJ);
				echo"
				<tr>
					<th>{$row->id}</th>
					<th>{$row->name}</th>
					<th>{$row->surname}</th>
					<th>{$row->right}</th>
				</tr>";
				$i++;
			}
			?>
		</table>
	</div>
</body>