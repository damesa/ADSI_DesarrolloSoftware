<?php 
	
 	/**
 	* 
 	*/
 	class Tabla 
 	{
 		public $title = "";
 		public $subtitle = "";
 		public $descripcion = "";
        public $nota ="";
        public $grafica="";


 		function __construct($title,$subtitle,$descripcion,$nota,$grafica)
 		{
 			$this->$title = $title;
 			$this->$subtitle = $subtitle;
 			$this->$descripcion = $descripcion;
 			$this->$nota = $nota;
 			$this->$grafica = $grafica.".php";
 		}

 	 public function dibujar()
 	 {
 	 	$html = "
 	 	<div class='grafica'>
		<h1 class='titulo'>$this->title</h1>
		<h2 class='subtitulo'>$this->subtitle</h2>	
		<div class='descripcon'>$this->descripcion</div>
		<figure>
		<img src=".$this->$grafica.">
		</figure>
		<p class='nota'>$this->nota</p>
		</div>
 	 	";

 	 	return $html;
 	 }

 	}

 ?>