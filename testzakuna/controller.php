<?php
	include "class.php";

	$bilangan = new operasibilangan();	
	$bilangan->seta($_POST['varA']);
	$bilangan->setb($_POST['varB']);

	$view = "<div class='sub-area'>";

	$view .= "<div class='view bilangan'>
			A = ".$bilangan->geta()."<br/>
			B = ".$bilangan->getb()."
			</div>";
	$view .= "<div class='view penghubung'>
			<img src='ic.png' height='48'/>
			</div>";
	$view .= "<div class='view bilangan'>
			A = ".$bilangan->switcha()."<br/>
			B = ".$bilangan->switchb()."
			</div>";

	$view .= "<div class='clear'></div></div>";
		
	echo $view;
?>