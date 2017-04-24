
<?php
	require_once "DBlink.inc.php";
	$qry = $con->query("select * from product");
	$i = 0;
	$productString="pro=";
	while($i < $qry->rowCount()){
		$res = $qry->fetch(PDO::FETCH_OBJ);
		$i++;
		if($i<$qry->rowCount())
			$productString = $productString.$res->product_name.'","';
		else
			$productString = $productString.$res->product_name;
	}
		// echo $productString;
?>
<html> 
<head>
<!-- <script src="jsonProduct.js"></script>  -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

</head>
<body> 

<script>
	$(document).ready(function(){
		$.post("jsonEcho.php",`<?=$productString?>`,function(result){
			alert(result);
			var myProduct = JSON.parse(result);

			document.write("<div align='center'><table border=1>");
			document.write("<tr><td>MY ITEM LIST</td></tr>");
			var c=0;
			while(c < myProduct.pName.length){
				document.write("<tr><td style='text-align:center;'>"+myProduct.pName[c]+"</td></tr>");
				c++;
			}
			document.write("</table></div>");
		});	
	});

</script>
</body>
</html>

