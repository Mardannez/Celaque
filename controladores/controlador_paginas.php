<?php

    class ControladorPaginas{

        public function inicio(){
            //Cargando las vistas al controlador para acceder a ellas
           include_once("vistas/paginas/inicio.php"); 
           
        }

        public function error(){
            //Cargando las vistas al controlador para acceder a ellas
            include_once("vistas/paginas/error.php"); 
        }

    }

?>