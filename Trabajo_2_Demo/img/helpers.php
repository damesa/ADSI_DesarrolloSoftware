<?php

/*
 * Contiene pedasos de codigo que puede ser usados por gualquie
 * archivo que los necesite , las funciones aqui deven ser de
 * uso general
 */

function pathjpgraph($archivo){
    $raiz = '../../vendor/jpgraph/jpgraph/lib/JpGraph/src/';
    $file =$raiz.$archivo; 
    return $file;
}
?>