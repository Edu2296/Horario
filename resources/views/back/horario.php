<form action="/registrar_horario" method="post">
    <div class="row">
      <div class="col-md-2">
        <label for="laboratorio">Laboratorio:</label>
        <select name="laboratorio" id="laboratorio">
          <option value="101">L-101</option>
          <option value="202">L-202</option>
          <option value="303">L-303</option>
          <option value="404">L-404</option>
        </select>
      </div>
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
        <tr>
          <th>7:00</th>
          <td><button type="button" class="btn btn-primary">Agregar</button></td>
          <td><button type="button" class="btn btn-primary">Agregar</button></td>
          <td><button type="button" class="btn btn-primary">Agregar</button></td>
          <td><button type="button" class="btn btn-primary">Agregar</button></td>
          <td><button type="button" class="btn btn-primary">Agregar</button></td>
          <td><button type="button" class="btn btn-primary">Agregar</button></td>
          <td><button type="button" class="btn btn-primary">Agregar</button></td>
        </tr>
        <tr>
          <th>7:30</th>
          <td><button type="button" class="btn btn-primary">Agregar</button></td>
          <td><button type="button" class="btn btn-primary">Agregar</button></td>
          <td><button type="button" class="btn btn-primary">Agregar</button></td>
          <td><button type="button" class="btn btn-primary">Agregar</button></td>
          <td><button type="button" class="btn btn-primary">Agregar</button></td>
          <td><button type="button" class="btn btn-primary">Agregar</button></td>
          <td><button type="button" class="btn btn-primary">Agregar</button></td>
        </tr>
        <tr>
          <th>8:00</th>
          <td><button type="button" class="btn btn-primary">Agregar</button></td>
          <td><button type="button" class="btn btn-primary">Agregar</button></td>
          <td><button type="button" class="btn btn-primary">Agregar</button></td>
          <td><button type="button" class="btn btn-primary">Agregar</button></td>
          <td><button type="button" class="btn btn-primary">Agregar</button></td>
          <td><button type="button" class="btn btn-primary">Agregar</button></td>
          <td><button type="button" class="btn btn-primary">Agregar</button></td>
        </tr>
        ...
      </tbody>
    </table>
    <button type="submit" class="btn btn-primary">Registrar horario</button>
  </form>