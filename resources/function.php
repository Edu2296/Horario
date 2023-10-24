<?php 
///---FUNCIONES BASE
function query($sql){
     // global $conexion;
    //$query ="SELECT * FROM laboratorio";<== $sql
     //$query_res= mysqli_query($conexion,$query);
    global $conexion;
    return mysqli_query($conexion,$sql);
}
function confirmar($query){
    global $conexion;
    if(!$query){
        die("Fallo en la conexion" . mysqli_error($conexion));
    }
}

///---FUNCIONES FRONT
    function show_laboratorio(){
        //global $conexion;
        ///$query ="SELECT * FROM laboratorio";
        //$query_res= mysqli_query($conexion,$query);
        $query = query("SELECT * FROM laboratorio");
        print_r($query);
    }
    
///---FUNCIONES BACK
?>