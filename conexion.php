<?php

    class BD{

        //Utilizando PDO connection

        private static $instancia = NULL;

        public static function crearInstancia(){

            if(!isset(self::$instancia)){

                $opcionesPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

                self::$instancia = new PDO('mysql:host=localhost;dbname=calculocuotas','root','',$opcionesPDO);
                echo "Conexion realizada correctamente";
            }

            return self::$instancia;

        }

    }

?>