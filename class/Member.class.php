<?php
class Member{
	private $id;
	private $user;
	private $pass;
	private $name;
	private $surname;
	private $member;
	private $right;
	public function __construct($newId){
		$res = get_user($newId);
		$row = $res->fetch(PDO::FETCH_OBJ);
		$this->id = $row->id;
		$this->user = $row->username;
		$this->pass = $row->passwd;
		$this->name = $row->name;
		$this->surname = $row->surname;
		$this->right = $row->right;
		$this->member = array("id" => $this->id,"user" => $this->user,"pass"=>$this->pass,"name"=>$this->name,"surname"=>$this->surname,"right"=>$this->right );
	}
	public  function toArray(){
		return $member ;
	}
	public  function setProperty($target,$value){
		$this->member[$target] = $value;
	}
	public  function getProperty($target){
		return $this->member[$target];
	}
	public  function save()
	{
		$sql = "update members set username='{$this->member['user']}' , passwd='{$this->member['pass']}' ,name='{$this->member['name']}', surname = '{$this->member['surname']}' where id='{$this->member['id']}' ";
		//echo $sql;
		$GLOBALS['con']->exec($sql);
	}
	public function __toString(){
		return $this->name." ".$this->surname ;
	}
}
?>