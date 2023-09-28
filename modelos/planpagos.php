<?php
    class planpagos{
       
       
       //Creando un Constructor para leer los registros de la tabla plan de pago

        public $id;
        public $Numero_Cuota;
        public $Valor_Cuota;
        public $Fehca_Registro;
        public $Fecha_Vencimiento;
        public $Fecha_Maxima_Pago;

        public function __construct($id, $Numero_Cuota, $Valor_Cuota, $Fehca_Registro, $Fecha_Vencimiento, $Fecha_Maxima_Pago){
            $this -> id=$id;
            $this -> Numero_Cuota=$Numero_Cuota;
            $this -> Valor_Cuota=$Valor_Cuota;
            $this -> Fecha_Registro=$Fehca_Registro;
            $this -> Fecha_Vencimiento=$Fecha_Vencimiento;
            $this -> Fecha_Maxima_Pago=$Fecha_Maxima_Pago;
            
         }

         public static function consultar_planpago(){
            $listaPlanPago=[];
            $conexionDB = BD::crearInstancia();
            $sql = $conexionDB -> query("SELECT * FROM planpagos");
            
            foreach($sql -> fetchAll() as $planpago){
                // Instancio la lista vacia, a la tabla tabla que estoy consultando
                $listaPlanPago[] = new planpagos($planpago['Id'],$planpago['NumeroCuota'],$planpago['ValorCuota'],$planpago['FechaRegistro'],$planpago['FechaVencimiento'],$planpago['FechaMaximaPago']);

            }

            return $listaPlanPago;
         }


        //Fucion para crear el plan de pago en la base de datos
        public static function crearplanpagos($monto, $tasa, $meses){

        $conexion = BD::crearInstancia();

        //Aqui debo ejecutar el procedimiento para crear las cuotas en la base de datos
        //$sql = $conexion -> prepare("");
        $sql = $conexion -> query("CALL Crear_Cuotas($monto, $tasa, $meses  )");

       }

       //Funcion para eliminar los registros del plan de pago
       public static function borrarplanpagos(){

        $conexion = BD::crearInstancia();

        //Aqui debo ejecutar el procedimiento para crear las cuotas en la base de datos
        //$sql = $conexion -> prepare("");
        $sql = $conexion -> query("CALL Eliminar_Cuotas()");

       }


    }

?>