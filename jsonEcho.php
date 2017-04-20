<?php 
$prod = array("pName" => array($_POST["pro"]));
echo str_replace("\\","",json_encode($prod)); 
?>