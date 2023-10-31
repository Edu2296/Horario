<?php
$hora_inicial = "7:00:00";
$hora_final = "22:00:00";
$intervalo = "00:45:00";

$horarios = [];

for ($hora = $hora_inicial; $hora <= $hora_final; $hora = date("H:i:s", strtotime($hora . " + $intervalo"))) {
  $horarios[] = $hora;
}
?>

<div class="container">
  <form action="/registrar_horario" method="post">
    <div class="form-group">
      <label for="laboratorio">Laboratorio:</label>
      <select name="laboratorio" id="laboratorio" class="form-control">
        <option value="101">L-101</option>
        <option value="202">L-202</option>
        <option value="303">L-303</option>
        <option value="404">L-404</option>
      </select>
    </div>
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
        <?php foreach ($horarios as $hora):?>
          <tr>
            <th><?php $hora|strftime('%I:%M %p')?></th>
            <td><button type="button" class="btn btn-primary btn-block">Agregar</button></td>
            <td><button type="button" class="btn btn-primary btn-block">Agregar</button></td>
            <td><button type="button" class="btn btn-primary btn-block">Agregar</button></td>
            <td><button type="button" class="btn btn-primary btn-block">Agregar</button></td>
            <td><button type="button" class="btn btn-primary btn-block">Agregar</button></td>
            <td><button type="button" class="btn btn-primary btn-block">Agregar</button></td>
            <td><button type="button" class="btn btn-primary btn-block">Agregar</button></td>
          </tr>
          <?php endforeach; ?>
      </tbody>
    </table>
    <button type="submit" class="btn btn-primary btn-block">Registrar horario</button>
  </form>
</div>