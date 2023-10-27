<?php 
///---FUNCIONES BASE
//libreria para zona horaria
date_default_timezone_set('UTC');

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
function fecth_array($query){
    return mysqli_fetch_array($query);
}
//- limpiar el string del input - para que no pase sql injections
function limpiar_string($str){
    global $conexion;
    return mysqli_real_escape_string($conexion, $str);
}
//--VARIABLE DE ENVIAR MENSAJE DE SESION PARA MOSTRAR MENSAJE
function set_mensaje($msj){
    if(!empty($msj)){
        $_SESSION['mensaje']=$msj;
    }else{
        $msj='';
    }
}
//-- MOSTRAR MENSAJE 
function mostrar_msj(){
    if(isset($_SESSION['mensaje'])){
        echo $_SESSION['mensaje'];
        unset($_SESSION['mensaje']);
    }
}
//--MENSAJE DE REGISTRO DE LABORATORIO
function display_success_msj($msj){
    $mensaje= <<<DELIMITADOR
    <div class="alert alert-success alert-dismissible fade  show" role="alert">
             <strong>Holy guacamole!</strong> {$msj}.
             <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
  </div>
DELIMITADOR;
    return $mensaje;
}

///---FUNCIONES FRONT
function show_laboratorio(){
    //global $conexion;
    ///$query ="SELECT * FROM laboratorio";
    //$query_res= mysqli_query($conexion,$query);
    $query = query("SELECT * FROM laboratorio");
    confirmar($query);
    //print_r($query);
    while($fila= fecth_array($query)){
        // print_r($fila);
        $laboratorio = <<<DELIMITADOR
        <li class="nav-item">
            <a class="nav-link" href="#">
            {$fila['lab_NombreLab']}
             </a>
        </li>
DELIMITADOR;
        echo $laboratorio; 
    }
}
    
///---FUNCIONES BACK
//crea una funcion para registar los datos en mysql

function laboratorio_agregar(){
    if(isset($_POST['registrar'])){
       
       $lab_CodigoLab = strtoupper(limpiar_string(trim($_POST['lab_CodigoLab'])));
       $lab_NombreLab = strtoupper(limpiar_string(trim($_POST['lab_NombreLab'])));
       $lab_Pabellon = strtoupper(limpiar_string(trim($_POST['lab_Pabellon'])));
       $lab_Piso = strtoupper(limpiar_string(trim($_POST['lab_Piso'])));
       $lab_Aforo = strtoupper(limpiar_string(trim($_POST['lab_Aforo'])));
       $lab_NumeroPC = strtoupper(limpiar_string(trim($_POST['lab_NumeroPC'])));
       $lab_SoftwareInstalado = strtoupper(limpiar_string(trim($_POST['lab_SoftwareInstalado'])));

       $query = query("INSERT INTO laboratorio (lab_CodigoLab,lab_NombreLab,lab_Pabellon,lab_Piso,lab_Aforo,lab_NumeroPc,lab_SoftwareInstalado) VALUES 
       ('{$lab_CodigoLab}','{$lab_NombreLab}',
       '{$lab_Pabellon}','{$lab_Piso}',
       '{$lab_Aforo}','{$lab_NumeroPC}',
       '{$lab_SoftwareInstalado}')");

       confirmar($query);
       set_mensaje(display_success_msj('Laboratorio registrado correctamente'));
       header("Location: index.php?laboratorio_registrar");
  
    }
}
//crea una funcion para llamar los datos de mysql
function show_laboratorio_admin(){
    $query=query("SELECT * FROM laboratorio");
    confirmar($query);
    while($fila= fecth_array($query)){
        $laboratorio=<<<DELIMITADOR
        <tr>
        <td >{$fila['lab_Codigo']}</td>
        <td>{$fila['lab_CodigoLab']}</td>
        <td>{$fila['lab_NombreLab']}</td>
        <td>{$fila['lab_Pabellon']}</td>
        <td>{$fila['lab_Piso']}</td>
        <td>{$fila['lab_Aforo']} </td>
        <td>{$fila['lab_NumeroPC']}</td>
        <td>{$fila['lab_SoftwareInstalado']}</td>

        <!---PARA ACTULIZAR CON EL METODO GET MANIPULAR-->
        <td> <a href="index.php?laboratorio&edit="{$fila['lab_Codigo']}" class="btn btn-small btn-warning">Editar</a></td>
        <td><a href="#" class="btn btn-small btn-danger">Eliminar</a></td>
    </tr>
DELIMITADOR;
        echo $laboratorio;
    }
}

?>
