<?php 

	function cargarview($page){
		
		$file = "view/$page.tpl.php";
		require $file;
	}

	function cargarcontroller($page){
		$file = "controller/$page.php";

		if(file_exists($file)){
			require $file;
		}
		else{
			require "controller/404.php";
		}
		
	}


 ?>
