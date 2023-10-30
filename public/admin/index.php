<?php
 require_once("../../resources/config.php");
?>
<?php
    include(VIEW_BACK . DS . "head.php");
?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
         include(VIEW_BACK . DS . "siderbar.php");
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
            <?php
                        
            include(VIEW_BACK . DS . "topbar.php");
             ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <?php
                /*AQUI VA EL DASHBOARD 
                !* DEPENDIENDO DEL MENU , ESTA SECCION CARGARA EL CONTENIDO
                (METODO GET)
                */
                //SIRVE PARA LLAMAR A LABORATORIOS 
                if(isset($_GET['laboratorio'])){
                   // echo 'estas en laboratorio';
                   include(VIEW_BACK . DS . "laboratorio.php");
                }  
                if(isset($_GET['docentes'])){
                    // echo 'estas en laboratorio';
                    include(VIEW_BACK . DS . "docentes.php");
                 }  
                 if(isset($_GET['horario'])){
                    // echo 'estas en laboratorio';
                    include(VIEW_BACK . DS . "horario.php");
                 }  
                 if(isset($_GET['horariovista'])){
                    // echo 'estas en laboratorio';
                    include(VIEW_BACK . DS . "horariovista.php");
                 }  
                //---VARIABLE DE SESION
                ?>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <?php include(VIEW_BACK . DS . "footer.php"); ?>