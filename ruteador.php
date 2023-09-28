<?php

    //echo $controlador;
    //echo $accion;

    include_once("controladores/controlador_".$controlador.".php");

    //Instanciando el Controller de paginas
    $objControlador = "Controlador".ucfirst($controlador);

    $controlador = new $objControlador();
    //Accediendo a la accion o metodo de inicio
    $controlador -> $accion();

?>