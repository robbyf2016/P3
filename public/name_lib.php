<?php

class name {
	
	var $name;
	public $height;
	private $pinn_number;
	protected $social_insurance;
	
	function __construct($persons_name){
		
		$this->name = $persons_name;
	}
	
	function set_name ($new_name){
	
		$this->name = $new_name;	
	}
	
	public function get_name (){
		
		return $this->name;
	}
	
	private function get_pinn(){
		
		return $this->pinn_number;
		
	}
	
}

?>