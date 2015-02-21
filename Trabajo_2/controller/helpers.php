<?php 

	function cargarview($page){
		
		$file = "view/$page.tpl.php";
		require $file;
	}

	function cargarcontroller($page,$get){
		$file = "controller/$page.php";

		if(file_exists($file)){
			require $file."?".$get;
		}
		else{
			require "controller/404.php";
		}
		
	}




 ?>
