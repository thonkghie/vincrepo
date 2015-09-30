<?php
	include "class.php";

	$bilangan = new operasibilangan($_POST['varA'],$_POST['varB']);		

	$view = "<div class='sub-area'>";

	$view .= "<div class='view bilangan'>
			A = ".$_POST['varA']."<br/>
			B = ".$_POST['varB']."
			</div>";
	$view .= "<div class='view penghubung'>
			<img src='ic.png' height='48'/>
			</div>";
	$view .= "<div class='view bilangan'>
			A = ".$bilangan->geta()."<br/>
			B = ".$bilangan->getb()."
			</div>";

	$view .= "<div class='clear'></div></div>";
		
	echo $view;
?>