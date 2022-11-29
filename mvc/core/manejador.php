<?php
/* Obtener la URI
Dividir en fragmentos la URI
Cada fragmente sera  controlador/metodo/paramatros 
Retrorna */

function obtener_url(){
    if(  isset( $_GET['url'] )  ){
        $url = $_GET['url'];
    } else {
        $url = 'index/index'; // Controlador y metodo defaul
    }


    $url = explode( '/', $url);

    // Defino el controlador, el metodo, y los parametros
    //print_r($url);
    $controlar =  isset ($url[0]) ? $url[0] . 'Controller' : 'indexController'  ;
    $metodo =  isset( $url[1] ) ? $url[1]  : 'index';
    $parametros = isset($url[2]) ?  array_slice( $url, 2 ) : array();

    return array( $controlar, $metodo, $parametros );

}

?>