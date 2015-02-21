<?php 
	include 'header.tpl.php';
 ?>
 	
 	<section>
 	<div>
 		<button>Nuevo</button>
 	</div>
 		<article>
 			<header>
 				<h1><?= $_GET['titulo']; ?></h1>
 			</header>
 			<figure>
 				<img src="<?= $_GET['imagen']; ?>">
 			</figure>
 			<footer>
 				<p><?= $_GET['nota']; ?></p>
 			</footer>
 		</article>

 	</section>

 <?php 
	include 'footer.tpl.php';
 ?>