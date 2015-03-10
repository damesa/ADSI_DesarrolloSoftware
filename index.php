<?php

//require "Tienda/index.php"

if(isset($_GET['url'])){
    if($_GET['url']=='pymestion'){
        require "Tienda/index.php";
    }
    else if($_GET['url']=='cursogit'){
        require "Cursos/index.php?url=cursogit";
    }
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


