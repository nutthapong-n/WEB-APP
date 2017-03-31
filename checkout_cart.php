<?php


session_start();

//get extention

require('headAndFoot.inc.php');
require("DBlink.inc.php");
require("Style_sheets/checkout_cart_style.php");


//show_source("<checkout_cart.php>");
//show_source("<headAndFoot.inc.php>");
//show_source("/class/<Product.class.php>");
//show_source("/class/<Productlist.class.php>");
//show_source("/class/<Member.class.php>");

function __autoload($class_name)
{
	require_once "./class/".$class_name.".class.php";
}
?>



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
<body style="background-color: #008DA2">

	<div class="container well well-sm">
		<form>
			<div class="form-group">
				<table class="table table-hover" align="center" id="pTable1" >
					<tr>
						<th class="text-center">Product Code</th>
						<th class="text-center">Product Name</th>
						<th class="text-center">Price(baht)</th>
						<th class="text-center">amount</th>
					</tr>

					<?php 

					$i = 0;
					$list = new Productlist();

					while ($i < $list->getAmount()) { ?>
					<tr>
						<td class="text-center"><?php echo $list->getProduct($i)->getCode() ; ?></td>
						<td class="text-center"><?php echo $list->getProduct($i)->getName() ; ?></td>
						<td class="text-center"><?php echo $list->getProduct($i)->getPrice() ; ?></td>
						<td><input type="number" name="P<?echo$i?>"  id="P<?echo$i?>" min="0" class="form-control text-center"/></td>
					</tr>
					<?php $i++; } ?>
				</table>
			</div>
		</form>
		<div class="modal fade" id="modal" >
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header" style="background-color: #008DA2">
						<h1 align="center">Receipt</h1>
					</div>

					<div class="modal-body">
						<table class="table table-hover" align="center" id="pTable2">
							<tr>
								<th class="text-center">Product Code</th>
								<th class="text-center">Product Name</th>
								<th class="text-center">Price(baht)</th>
								<th class="text-center">amount</th>
								<th class="text-center">Costs(baht)</th>
							</tr>

							<?php 

							$i = 0;
							while ($i < $list->getAmount()) { ?>
							<tr>
								<td class="text-center"><?php echo $list->getProduct($i)->getCode() ; ?></td>
								<td class="text-center"><?php echo $list->getProduct($i)->getName() ; ?></td>
								<td class="text-center"><?php echo $list->getProduct($i)->getPrice() ; ?></td>
								<td><input type="number" name="P<?echo$i?>" class="form-control text-center" min="0" disabled/></td>
								<td class="text-center"></td>
							</tr>
							<?php $i++; } ?>
						</table>

						<div class="modal-footer content" style="background-color: #008DA2">
							<h2 id="result"></h2>
							<h1 id="vat"></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		

		<button class="btn btn-success pull-right" type="button" onclick="toQuota()" data-toggle="modal" data-target="#modal" >Calculate</button>
	</div>
</body>
<script type="text/javascript">
	function toQuota()
	{
		document.getElementById("modal").style.display = "block";
		

		var mainTable = document.getElementById("pTable1");
		var numInput = mainTable.getElementsByTagName("input");

		var resultTable = document.getElementById("pTable2");
		var cost= resultTable.getElementsByTagName("td");
		var resultRow = resultTable.getElementsByTagName("tr");


		var tr = document.getElementsByTagName("tr");
		var inval = document.getElementsByTagName("input");
		var sum = 0;
		
		for(var i = 0 ; i < numInput.length ; i++){
			var td = tr[i+1].getElementsByTagName("td")[2].innerHTML;
			sum += inval[i].value*td;
			cost[i*5+4].innerHTML = inval[i].value*td;
			if(inval[i].value >= 1 ){
				resultRow[i+1].style.display="";
			}
			else{
				resultRow[i+1].style.display="none";
			}
		}
		inval[5].value = inval[0].value;
		inval[6].value = inval[1].value;
		inval[7].value = inval[2].value;
		inval[8].value = inval[3].value;
		inval[9].value = inval[4].value;

		document.getElementById("result").innerHTML = "Total Price is: "+sum+" Baht" ;
		document.getElementById("vat").innerHTML = "+VAT 7%: "+(sum+Math.round(sum*0.07))+" Baht" ;
		



		
	}
</script>