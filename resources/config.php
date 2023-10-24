<?php
ob_start();

//if (a>b) {
    # code...
//}
//a>b ? echo 'a es mayor que b': 'b es mayor que a';
//detectar la ruta relativa,para los servidores

defined("DS") ? NULL : define("DS",DIRECTORY_SEPARATOR);

//CREAR RUTAS RELATIVAS

defined("VIEW_FRONT") ? NULL : define("VIEW_FRONT",__DIR__ . DS . "views/front");
defined("VIEW_BACK") ? NULL: define("VIEW_BACK",__DIR__ . DS ."views/back");

//--CONSTANTES DE CONEXION

defined("DB_HOST") ? NULL : define("DB_HOST", "localhost");
defined("DB_USER") ? NULL : define("DB_USER", "root");
defined("DB_PASS") ? NULL : define("DB_PASS", "");
defined("DB_NAME") ? NULL : define("DB_NAME", "gestor_Laboratorio_2023");

$conexion = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if($conexion){
    echo 'estas conectado';
}

require_once("function.php");
?>