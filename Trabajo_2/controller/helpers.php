<?php 
	
	function CargarView($page){
		
		$file = "view/$page.tpl.php";
		require $file;
	}

	function CargarController($page){
		$file = "controller/$page.php";

		if(file_exists($file)){
			require $file;
		}
		else{
			require "controller/404.php";
		}
		
	}

	function CargarModel($page){
		
		$file = "model/$page.php";
		require $file;
	}


 ?>
