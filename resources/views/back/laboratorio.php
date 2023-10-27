<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h1 mb-0 text-gray-800">Laboratorios de Computo</h1>
    </div>
    <div class=" col-md-5 d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Registrar nuevos laboratorios</h1>
         <a href="index.php?laboratorio_registrar" class="btn btn-secondary">Registar laboratorio</a>
    </div>
    <div class="  col-md-2 d-sm-flex align-items-center justify-content-between mb-4 d-grid gap-2 d-md-block">
         <h1 class="h4 mb-0 text-gray-800">Buscar laboratorios</h1> <br>
         <form action="" method ="POST">
           <div class="form-group  ">
           <input type="text" class="form-control" name="lab_CodigoLab" id="lab_CodigoLab" style="text-transform:uppercase;" required placeholder="'S01001'">
           </div>
           <div class="form-group ">
           <input type="submit" value="Buscar" name="buscar" class="btn btn-info">
           </div>
         </form>
    </div>
   
    <div class="row ">
       
        <!---->
        <div class="col-md-12">
            <table class="table table-hover   text-center  align-middle ">
                <thead >
                    <tr >
                        <th>ID</th>
                        <th >Codigo</th>
                        <th>Laboratorio</th>
                        <th >Pabellon</th>
                        <th >Piso</th>
                        <th>Aforo</th>
                        <th>Pcs</th>
                        <th>Software</th>
                    </tr>
                </thead>
                <tbody>
                    <!--Esto llama para mostrar los datos almacenados-->
                    <?php
                    show_laboratorio_admin();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>