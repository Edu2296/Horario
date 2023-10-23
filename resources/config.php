<?php
ob_start();

//if (a>b) {
    # code...
//}
//a>b ? echo 'a es mayor que b': 'b es mayor que a';
//detectar la ruta relativa,para los servidores

defined("DS") ? NULL : define("DS",DIRECTORY_SEPARATOR);

//CREAR RUTAS RELATIVAS

defined ("VIEW_FRONT")? NULL: define ("VIEW_FRONT",__DIR__. DS . "views/front");
defined ("VIEW_BACK")? NULL: define ("VIEW_BACK",__DIR__. DS ."views/back");
?>