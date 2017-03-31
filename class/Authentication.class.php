<?php
class Authentication{
	public static function login($user,$pass){
		include("DBlink.inc.php");
		$sql = "select * from members where username = '$user' and passwd = '$pass' ";
		$res = $con->query($sql);
		$row = $res->fetch(PDO::FETCH_OBJ);
		if($row->username && $row->passwd && $res->rowCount() == 1)
		{
			$member = new Member($row->id);
			return $member;
		}
		$_SESSION["MEMBER"] = NULL;
		return NULL;

	}
	
}
?> 