<?php
class Cart{
	private $product;
	private $count;
	private $sum;
	public function __construct($name , $amount){
		$product = new Productlist();
	}
	public function add($product){
		for ($i=0; $i < $this->product.length ; $i++) { 
			if($this->product[i].getName() == $product){
				$this->count[i]++;
				$this->sum += $this->product[i].getPrice();
			}
		}

	}
	public function getSum(){
		return $this->sum;
	}	
	
}
?>