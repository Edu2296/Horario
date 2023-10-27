<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Laboratorio</h1>
    </div>

    <div class="row ">
        <div class="col-md-3">
        <?php
                mostrar_msj();
            ?>
            <form action="" method="post">
                <div class="form-group">
                <label for="lab_CodigoLab" require>
                        Codigo Laboratorio
                    </label>
                    <input type="text" class="form-control" name="lab_CodigoLab" id="lab_CodigoLab" style="text-transform:uppercase;" required placeholder="'S01001'">
                <label for="lab_NombreLab">
                        Numero de laboratorio
                    </label>
                    <input type="text" class="form-control" name="lab_NombreLab" id="lab_NombreLab" style="text-transform:uppercase;" required placeholder="'1'">

                 <label for="lab_Pabellon">
                        Pabellon
                    </label>
                    <input type="text" class="form-control" name="lab_Pabellon" id="lab_Pabellon" style="text-transform:uppercase;" required placeholder="'H'">
                <label for="lab_Piso">
                       Piso
                    </label>
                    <input type="text" class="form-control" name="lab_Piso" id="lab_Piso" style="text-transform:uppercase;" required placeholder="'4'">

                <label for="lab_Aforo">
                        Aforo
                    </label>
                    <input type="text" class="form-control" name="lab_Aforo" id="lab_Aforo" style="text-transform:uppercase;" required placeholder="'31'">
                <label for="lab_NumeroPC">
                        Numer de pcs
                    </label>
                    <input type="text" class="form-control" name="lab_NumeroPC" id="lab_NumeroPC" style="text-transform:uppercase;" required placeholder="'31'">

                    <label for="lab_SoftwareInstalado" >
                        Software instalado
                    </label>
                    <textarea name="lab_SoftwareInstalado" id="lab_SoftwareInstalado" cols="30" rows="10" class="form-control"
                    style="text-transform:uppercase;" required placeholder ="Todos los software instalados en este laboratorio"></textarea >

                </div>
                <div class="form-group d-grid gap-2 col-6 mx-auto">
                    <input type="submit" value="Registrar" name="registrar" class="btn btn-primary">
                </div>
            </form>
            <?php
                laboratorio_agregar();
            ?>
        </div>
        <!---->
        <div class="col-md-9">
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