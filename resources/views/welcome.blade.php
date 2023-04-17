
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
      <th scope="col">Salario</th>
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
        <button type="button" class="btn btn-primary" onclick="abrirDialogo()">Modificar</button>

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
  <button type="button" class="btn btn-success" onclick="abrirAgregar()">Agregar Usuario</button>

  <BR><BR>
  <dialog id="agreDialog">
  <form action="{{url('/persona')}}" method="POST">
      @csrf
      <div class="row mb-4" >
        <center>
        <h1>Agregar nueva Personas</h1>
        </center>
          <div class="col">
            <div class="form-outline">
              <label class="form-label" for="form6Example1">Nombre</label>
              <input type="text" id="form6Example1" class="form-control" name="nombres" placeholder="Digite su Nombre" required/>
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
              <label class="form-label" for="form6Example2">Apellido</label>
              <input type="text" id="form6Example2" class="form-control" name="apellidos" placeholder="Digite su Apellido" required/>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Edad</span>
            <input type="number" class="form-control" id="form6Example6" name="edad" placeholder="Digite su edad" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Salario</span>
            <input type="number" class="form-control" id="form6Example6" name="salario" placeholder="Digite su salario" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="btn-group" role="group" aria-label="Basic example">
          <input class="btn btn-success" type="submit" name="Enviar">
        </div>
      </center>
    </form>
  </dialog>
</center>

<dialog id="favDialog">
  <form action="{{ route('personas.update', $persona->id) }}" method="POST" >
    @csrf
    @method('PUT')
    <div class="row mb-4">
      <center><h1>Modificar datos de la persona</h1></center>
      <div class="col">
        <div class="form-outline">
          <label class="form-label" for="form6Example1">Nombre</label>
          <input type="text" id="form6Example1" class="form-control" name="nombres" value="{{ $persona->nombres }}" />
        </div>
      </div>
      <div class="col">
        <div class="form-outline">
          <label class="form-label" for="form6Example2">Apellido</label>
          <input type="text" id="form6Example2" class="form-control" name="apellidos" value="{{ $persona->apellidos }}" />
        </div>
      </div>
    </div>
    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example6">Edad</label>
      <input type="number" id="form6Example6" class="form-control-sm" name="edad" min="1" max="100" value="{{ $persona->edad }}" />
    </div>
    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example6">Salario</label>
      <input type="number" id="form6Example6" class="form-control-sm" min="350" name="salario" value="{{ $persona->salario }}" />
    </div>
    <div class="btn-group" role="group" aria-label="Basic example">
      <input class="btn btn-success" type="submit" name="Modificar">
    </div>
  </form>
</dialog>


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


</script>



<script>
function abrirDialogo() {
  // Obtiene el elemento del cuadro de diálogo
  var dialog = document.getElementById('favDialog');

  
  // Abre el cuadro de diálogo
  dialog.showModal();

}

function abrirAgregar(){
  var agregar = document.getElementById('agreDialog');
  agregar.showModal();

}


</script>








  </body>
</html>


 