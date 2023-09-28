<?php
 
    //Probando la conexion a la base de datos
    
    include_once("conexion.php");

     BD::crearInstancia();
     
    include_once("modelos/planpagos.php");

    class ControladorCalculoCuotas{

        public function inicio(){

            include_once("vistas/calculocuotas/inicio.php");

        }

        public function calcularCuotas(){
           
            //print_r(planpagos::consultar_planpago());
            $plandepago = planpagos::consultar_planpago();

            if($_POST){

                //Primero: Borro el plan de pagos
                planpagos::borrarplanpagos();

                print_r($_POST);
                $monto = $_POST["monto"];
                $tasa = $_POST["tasa"];
                $meses = $_POST["meses"];

                //Segundo: Inserto el Plan de pagos
                planpagos::crearplanpagos($monto, $tasa, $meses);
                //Tercero: Consulto y muestro el plan de Pagos
                $plandepago = planpagos::consultar_planpago();
              

            }
            
            include_once("vistas/calculocuotas/calcularcuotas.php");

        }
        
    

    }

?>