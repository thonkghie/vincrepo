<?php

class operasibilangan{
	private $a;
	private $b;	
		
	function __construct($x,$y){
		$this->a = $x;
		$this->b = $y;

		$this->a = $this->a + $this->b;
		$this->b = $this->a - $this->b;
		$this->a = $this->a - $this->b;
	}

	function geta(){
		return $this->a;
	}	
	
	function getb(){
		return $this->b;
	}	
}
?>