<?php
class Productlist{
	public $Productlist ;
	public function __construct(){
		$res = $GLOBALS['con']->query("select * from product");
		//echo $res->rowCount();
		for ($i=0; $i < $res -> rowCount(); $i++) { 
			$row = $res->fetch(PDO::FETCH_OBJ);
			$this->Productlist[$i] = new Product($row->product_code,$row->price,$row->product_name);
		}
	}
	public function getPrice($name){
		for ($i=0; $i < $Productlist.length ; $i++) { 
			if($name == $Productlist[i].getName())
			{
				return $Productlist[i].getPrice();
			}
		}
		return 0;
	}
	public function getAmount(){
		return count($this->Productlist);
	}
	public function getProduct($n){
		return $this->Productlist[$n];
	}
}

?>