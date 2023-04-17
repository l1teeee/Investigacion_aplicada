
<!DOCTYPE html>
  <html>
    <head>
      <link rel="stylesheet" href="{{asset('css/app.css') }}">
      <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <title>Control de usuarios</title>

    </head>
    <body style="background-color: #fff;">
    <nav class="navbar navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="#">Investigación Aplicada</a>
    <a class="navbar-brand" href="#">DSS</a>
  </div>
    </nav>
    <center>
    <div class="muestras">
        <h1>Control de usuarios</h1>
    <table class="table table-striped table-hover" >
  	<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Edad</th>
      <th scope="col">Salario $</th>
      <th scope="col">Operaciones</th>
    </tr>
  	</thead>
  	<tbody>
    @foreach($personas as $persona)
    <tr>
        <td>{{ $persona->id }}</td>
        <td>{{ $persona->nombres }}</td>
        <td>{{ $persona->apellidos }}</td>
        <td>{{ $persona->edad }} años</td>
        <td>${{ $persona->salario }}</td>
        <td>
            <button type="button" class="btn btn-secondary" id="showModifi_{{ $persona->id }}">Modificar</button>
            <form action="{{ route('personas.destroy', $persona->id) }}" method="POST" class="d-inline-block">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro que deseas eliminar este registro?')">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
  	</tbody>
	</table>

  <BR><BR>
    <form action="{{url('/persona')}}" method="POST">
      @csrf
      <div class="row mb-4" >
        <center>
        <h1>Agregar nueva Personas</h1>
        </center>
          <div class="col">
            <div class="form-outline">
              <label class="form-label" for="form6Example1">Nombre</label>
              <input type="text" id="form6Example1" class="form-control" name="nombres"/>
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
              <label class="form-label" for="form6Example2">Apellido</label>
              <input type="text" id="form6Example2" class="form-control" name="apellidos"/>
            </div>
          </div>
        </div>
        <div class="form-outline mb-4">
          <label class="form-label" for="form6Example6 ">Edad</label>
          <input type="number" id="form6Example6" class="form-control-sm" name="edad"/>
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="form6Example6">Salario</label>
          <input type="number" id="form6Example6" class="form-control-sm" name="salario"/>
        </div>

        <div class="btn-group" role="group" aria-label="Basic example">
          <input class="btn btn-success" type="submit" name="Enviar">
        </div>
      </center>
    </form>
</center>


<dialog id="favEliminar">
  <form>
  <div class="row mb-4">
    <center><h1>Modificar DATO</h1></center>
    <center><h5>Estas seguro que quieres eliminar este dato?</h1><br></center>
    <div class="d-grid gap-2">
      <button id="confirmBtn2" value="default" class="btn btn-outline-success">Eliminar</button>
      <button value="cancel" formmethod="dialog" class="btn btn-outline-danger">Cancel</button>
    </div>    
  </form>
</dialog>
</center>


<script>
const showButton = document.getElementById('showDialog');
const showButton1 = document.getElementById('showModifi');
const showButton2 = document.getElementById('showElimi');

const favDialog = document.getElementById('favDialog');
const favModi = document.getElementById('favModi');
const favEliminar = document.getElementById('favEliminar');

const outputBox = document.querySelector('output');
const selectEl = favDialog.querySelector('select');
const selectEl1 = favModi.querySelector('select');
const selectEl2 = favEliminar.querySelector('select');

const confirmBtn = favDialog.querySelector('#confirmBtn');
const confirmBtn1 = favModi.querySelector('#confirmBtn1');
const confirmBtn2 = favEliminar.querySelector('#confirmBtn2');

showButton.addEventListener('click', () => {
    favDialog.showModal();
});

showButton1.addEventListener('click', () => {
    favModi.showModal();
});

showButton2.addEventListener('click', () => {
    favEliminar.showModal();
});


selectEl.addEventListener('change', (e) => {
  confirmBtn.value = selectEl.value;
});

selectEl1.addEventListener('change', (e) => {
  confirmBtn1.value = selectEl.value;
});

selectEl2.addEventListener('change', (e) => {
  confirmBtn2.value = selectEl.value;
});


confirmBtn.addEventListener('click', (event) => {
    event.preventDefault(); 
    favDialog.close();
});

confirmBtn1.addEventListener('click', (event) => {
    event.preventDefault(); 
    favDialog.close();
});

confirmBtn2.addEventListener('click', (event) => {
    event.preventDefault(); 
    favDialog.close();
});
</script>

  </body>
</html>


 