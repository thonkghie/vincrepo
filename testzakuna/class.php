<?php

class operasibilangan{
	private $a;
	private $b;
	
	function seta($i){
		$this->a = $i;
	}
	
	function geta(){
		return $this->a;
	}
	
	function setb($i){
		$this->b = $i;
	}
	
	function getb(){
		return $this->b;
	}
	
	function switcha(){
		return $this->getb();	
	}

	function switchb(){
		return $this->geta();
	}	
}
?>