<!--<h1>Visualización de horarios</h1>
  <form action="visualizar_horarios.php" method="post">
    <select name="laboratorio">
      <option value="L-101">Laboratorio 1</option>
      <option value="L-202">Laboratorio 2</option>
      <option value="L-303">Laboratorio 3</option>
    </select>
    <input type="submit" value="Visualizar">
  </form>
  <?php
    if (isset($_POST['laboratorio'])) {
      // Obtenemos los horarios registrados para el laboratorio seleccionado
      $laboratorio = $_POST['laboratorio'];
      $horarios = getHorariosRegistrados($laboratorio);

      // Mostramos los horarios registrados
      if ($horarios) {
        foreach ($horarios as $horario) {
          echo "<p>";
          echo "Hora: " . $horario['horario_hora'] . "<br>";
          echo "Día: " . $horario['horario_dia'] . "<br>";
          echo "Curso: " . $horario['curso'] . "<br>";
          echo "Docente: " . $horario['docente'] . "<br>";
          echo "Ciclo: " . $horario['ciclo'] . "<br>";
          echo "Nombre EA: " . $horario['nombreEA'] . "<br>";
          echo "</p>";
        }
      } else {
        echo "<p>No hay horarios registrados para este laboratorio</p>";
      }
    }

    // Función para obtener los horarios registrados
    function getHorariosRegistrados($laboratorio) {
      // Consulta SQL para obtener los horarios registrados
      $sql = "SELECT
        horario.horario_hora,
        horario.horario_dia,
        curso.cur_nombre,
        docentes.doc_nombre,
        curso.cur_ciclo,
        ea.ea_nombre
      FROM
        horario
      INNER JOIN
        ea
      ON
        horario.horario_ea = ea.ea_id
      INNER JOIN
        curso
      ON
        ea.ea_cur_Id = curso.cur_id
      INNER JOIN
        docentes
      ON
        ea.ea_doc_Id = docentes.doc_Id
      WHERE
        horario.horario_laboratorio = ?";

      // Parámetros de la consulta
      $parametros = array($laboratorio);

      // Ejecutamos la consulta
      $resultado = mysqli_query($GLOBALS['conexion'], $sql, $parametros);

      // Devolvemos los resultados de la consulta
      return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    }
  ?>
</body>-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Visualización de horarios</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <h1>Visualización de horarios</h1>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card-columns">
          <?php
          // Obtenemos los horarios registrados
         // $horarios = getHorarios();

          // Iteramos sobre los horarios
          //foreach ($horarios as $horario) {
            // Creamos una tarjeta para cada horario
            ?>
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Laboratorio <?php //echo $horario['horario_laboratorio'] ?></h5>
              </div>
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Hora</th>
                      <th>Lunes</th>
                      <th>Martes</th>
                      <th>Miércoles</th>
                      <th>Jueves</th>
                      <th>Viernes</th>
                      <th>Sábado</th>
                      <th>Domingo</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    // Iteramos sobre las horas del horario
                    //foreach ($horario['horas'] as $hora) {
                      ?><tr>
                        <td><?php echo $hora['hora'] ?></td>
                        <td><?php echo $hora['curso'] ?></td>
                        <td><?php echo $hora['docente'] ?></td>
                        <td><?php echo $hora['ciclo'] ?></td>
                        <td><?php echo $hora['nombreEA'] ?></td>
                      </tr><?php
                    //}
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <?php
         // }
          ?>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
