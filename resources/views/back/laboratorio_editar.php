<?php
 $id = limpiar_string(trim($_GET['editar']));
 $query = query ("SELECT * FROM laboratorio WHERE lab_Codigo = {$id}");
 confirmar($query);
 $fila = fetch_array($query); 

?>
<form action="" method="post">
            <div class="row">
            
                  <div class="form-group col-md-3">
                        <label for="lab_CodigoLab" require>
                        Codigo Laboratorio
                         </label>
                        <input type="text" class="form-control" name="lab_CodigoLab" id="lab_CodigoLab" style="text-transform:uppercase;" required value= "<?php echo $fila['lab_CodigoLab']; ?> ">
                            <label for="lab_NombreLab">
                                Numero de laboratorio
                            </label>
                             <input type="text" class="form-control" name="lab_NombreLab" id="lab_NombreLab" style="text-transform:uppercase;" required value= "<?php echo $fila['lab_NombreLab']; ?> ">

                            <label for="lab_Pabellon">
                          Pabellon
                           </label>
                           <input type="text" class="form-control" name="lab_Pabellon"         id="lab_Pabellon" style="text-transform:uppercase;" required value= "<?php echo $fila['lab_Pabellon']; ?> ">

                    </div>
                    <div class="form-group col-md-3">
                    <label for="lab_Piso">
                       Piso
                         </label>
                         <input type="text" class="form-control" name="lab_Piso" id="lab_Piso" style="text-transform:uppercase;" required value= "<?php echo $fila['lab_Piso']; ?> ">

                        <label for="lab_Aforo">
                        Aforo
                         </label>
                        <input type="text" class="form-control" name="lab_Aforo" id="lab_Aforo" style="text-transform:uppercase;" required value= "<?php echo $fila['lab_Aforo']; ?> ">
                        <label for="lab_NumeroPC">
                        Numer de pcs
                        </label>
                         <input type="text" class="form-control" name="lab_NumeroPC"     id="lab_NumeroPC" style="text-transform:uppercase;"         required value= "<?php echo $fila['lab_NumeroPC']; ?> ">
                    </div>
                    <div class ="form-group col-md-6">
                    <label for="lab_SoftwareInstalado" >
                        Software instalado
                        </label>
                         <textarea name="lab_SoftwareInstalado" id="lab_SoftwareInstalado" cols="3" rows="3" class="form-control"
                        style="text-transform:uppercase;" required ><?php echo $fila['lab_SoftwareInstalado']; ?> </textarea >
                        <br>
                        <div class="form-group d-grid gap-2 col-8 mx-auto ">
                          <input type="submit" value="Actulizar Laboratorio" name="actualizar" class="btn btn-warning btn-lg">
                     </div>
                    </div>
                  
                </div>
            </form>
            <?php
                   laboratorio_actualizar($id);
                   ?>