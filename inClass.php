<!DOCTYPE.html>
<?php

//procedural screme
/*$conn = mysqli_connect("localhost", "root") ;
mysqli_select_db($conn,"Myshop");
$result = mysqli_query($conn , "select * from Product");
$row = mysqli_fetch_array($result);
echo $row[0] ;*/


//OO screme
/*$conn2 = new mysqli("localhost", "root");
$conn2->select_db("Myshop");
$result2 = $conn2->query("select * from Product") ;
$row2 = $result2->fetch_array();
echo $row2[0] ;*/

//PDO
/*$con = new PDO("mysql:host=localhost;dbname=Myshop","root");
$result = $con->query("select * from Product");
$fet = $result->fetch(PDO::FETCH_OBJ);
$con->exec("DELETE FROM members WHERE username LIKE 'test'"); // to delete
echo " {$fet->pName} ";*/


function sum($n1 , $n2)
{
	return $n1+$n2;
}


function create_table($data)
{
	echo"<table  border='1px'; >";
	global $res;
	$i = 0;
	while($i < $data->affected_rows)
	{
		$row = $res->fetch_array();
		$j = 0;
		echo"<tr>";
		while($j < $res->field_count)
		{
			echo "<td>$row[$j]</td>";

			$j++;
		}
		echo "</tr>";

		$i++;
	}

	echo "</table>";


}
session_start();


function __autoload($class_name)
{
	require_once "./class/".$class_name.".class.php";
}
Authentication::login("admin","admin");

echo $_SESSION["member"] ;

//Authentication::login();






 ?> <br/>
