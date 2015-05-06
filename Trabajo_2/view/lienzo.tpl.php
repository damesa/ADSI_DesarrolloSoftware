<?php 
	include 'header.tpl.php';
 ?>
 	
 	<section>
 	<div>
 		<button>Nuevo</button>
 	</div>
 		<article>
 			<header>
 				<h1><?= $_POST['titulo']; ?></h1>
 			</header>
 			<figure>
 				<img src="<?= $_POST['imagen'] ?>">
 			</figure>
 			<footer>
 				 <p><?= $_POST['nota']; ?></p>
 			</footer>
 		</article>

 	</section>

 <?php 
	include 'footer.tpl.php';
 ?>