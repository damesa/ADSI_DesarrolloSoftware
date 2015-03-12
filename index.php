<?php

//require "Tienda/index.php"
$paginas = array(
    'pymestion' => 'Tienda/index.php',
    'cursodegit'=> 'Cursogit/index.php',
    'jquery' => 'jqueryData/index.php'
);

if(isset($_GET['url'])){
   
   require $paginas[$_GET['url']];
    
}
else{
    require "Pagina/index.php";
}
?>
<style>
    #damesa{
        position: absolute;
        right: 2rem;
        top: 2rem;
        background: #5AFD7B;
        padding: 1rem;
        border-radius: 10px;
        color: #fff;
    }
</style>
<div id="damesa"><a href="index.php">Damesa.com</a></div>


