<?php
class Product{
	private $name;
	private $price;
	private $code;
	public function __construct($code , $price ,$name){
		$this->name = $name;
		$this->price = $price;
		$this->code = $code;
	}
	public function getName(){
		return $this->name;
	}
	public function getPrice(){
		return $this->price;

	}
	public function getCode(){
		return $this->code;	
	}
}
?>