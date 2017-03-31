<?php
function get_users(){
	return $GLOBALS['con']->query("select * from members");
}
function get_user($id){
	return $GLOBALS['con']->query("select * from members where id = '$id'");
}
function update_user($id,$target,$value){
	$GLOBAL['con']->exec("update members set '$target' = '$value' where id = '$id' ");
}
function delete_user($id){
	$GLOBAL['con']->exec("delete members where id = '$id' ");
}

?>