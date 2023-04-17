



<!-- <!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        
    </head>
    <body>
        <h1>Hola</h1>
    </body>
</html> -->


 
<!DOCTYPE html>
  <html>
    <head>
      <link rel="stylesheet" href="{{asset('css/app.css') }}">
      <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <title>Manager</title>

    </head>
    <body style="background-color: #fff;">
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
    <tr>
      <td>1</td>
      <td>Julián</td>
      <td>Mendez</td>
      <td>56</td>
      <td>1056</td>
      <td><button type="button" class="btn btn-secondary" id="showModifi">Modificar</button>
      <button type="button" class="btn btn-danger">Eliminar</button></td>

    </tr>
  	</tbody>
	</table>
    <center><div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-success" id="showDialog">Subir dato</button>
    </div></center>
    </div>
    

    

    

    <!-- A modal dialog containing a form -->
<dialog id="favDialog">
  <form>
  <div class="row mb-4">
    <center>
    <h1>SUBIR DATO</h1>

    </center>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">Nombre</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" class="form-control" />
        <label class="form-label" for="form6Example2">Apellido</label>
      </div>
    </div>
  </div>
  <div class="form-outline mb-4">
    <input type="number" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">Edad</label>
  </div>

  <div class="form-outline mb-4">
    <input type="number" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">Salario</label>
  </div>

  <div class="d-grid gap-2">
  <button id="confirmBtn" value="default" class="btn btn-outline-success">Enviar</button>

    <button value="cancel" formmethod="dialog" class="btn btn-outline-danger">Cancel</button>
  </div>    
    <div>
      
    </div>
  </form>
</dialog>
<!-- <output></output> -->


    <!-- A modal dialog containing a form -->
<dialog id="favModi">
  <form>
  <div class="row mb-4">
    <center>
    <h1>Modificar DATO</h1>

    </center>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">Nombre</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" class="form-control" />
        <label class="form-label" for="form6Example2">Apellido</label>
      </div>
    </div>
  </div>
  <div class="form-outline mb-4">
    <input type="number" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">Edad</label>
  </div>

  <div class="form-outline mb-4">
    <input type="number" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">Salario</label>
  </div>

  <div class="d-grid gap-2">
  <button id="confirmBtn1" value="default" class="btn btn-outline-success">Modificar</button>

    <button value="cancel" formmethod="dialog" class="btn btn-outline-danger">Cancel</button>
  </div>    
    <div>
      
    </div>
  </form>
</dialog>
<!-- <output></output> -->
</center>




<!-- A modal dialog containing a form -->
<dialog id="favEliminar">
  <form>
  <div class="row mb-4">
    <center>
    <h1>Modificar DATO</h1>

    </center>
    <h1>Estas seguro que quieres eliminar este dato?</h1>

  <div class="d-grid gap-2">
  <button id="confirmBtn1" value="default" class="btn btn-outline-success">Modificar</button>

    <button value="cancel" formmethod="dialog" class="btn btn-outline-danger">Cancel</button>
  </div>    
    <div>
      
    </div>
  </form>
</dialog>
<!-- <output></output> -->
</center>




<script>
const showButton = document.getElementById('showDialog');
const showButton1 = document.getElementById('showModifi');
const showButton2 = document.getElementById('favEliminar');


const favDialog = document.getElementById('favDialog');
const favModi = document.getElementById('favModi');
const favEliminar = document.getElementById('favModi');


const outputBox = document.querySelector('output');
const selectEl = favDialog.querySelector('select');
const selectEl1 = favModi.querySelector('select');

const confirmBtn = favDialog.querySelector('#confirmBtn');
const confirmBtn1 = favModi.querySelector('#confirmBtn1');


showButton.addEventListener('click', () => {
    favDialog.showModal();
});

showButton1.addEventListener('click', () => {
    favModi.showModal();
});


selectEl.addEventListener('change', (e) => {
  confirmBtn.value = selectEl.value;
});

selectEl1.addEventListener('change', (e) => {
  confirmBtn1.value = selectEl.value;
});

confirmBtn.addEventListener('click', (event) => {
    event.preventDefault(); 
    favDialog.close();
});

confirmBtn1.addEventListener('click', (event) => {
    event.preventDefault(); 
    favDialog.close();
});
</script>






<!-- <div class="bg-success p-2" style="--bs-bg-opacity: .5;" id="subir">
  <form>
  <div class="row mb-4">
    <center>
    <h1>Subir dato</h1>

    </center>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">Nombre</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" class="form-control" />
        <label class="form-label" for="form6Example2">Apellido</label>
      </div>
    </div>
  </div>
  <div class="form-outline mb-4">
    <input type="number" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">Edad</label>
  </div>

  <div class="form-outline mb-4">
    <input type="number" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">Salario</label>
  </div>

  <button type="submit" class="btn btn-primary btn-block mb-4">Subir</button>
  </form>
  </div> -->
   

<!-- 

  <div class="bg-success p-2" style="--bs-bg-opacity: .5;" id="actu">
  <form>
  <div class="row mb-4">
    <center>
    <h1>Actualizar datos</h1>

    </center>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">Nombre</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" class="form-control" />
        <label class="form-label" for="form6Example2">Apellido</label>
      </div>
    </div>
  </div>
  <div class="form-outline mb-4">
    <input type="number" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">Edad</label>
  </div>

  <div class="form-outline mb-4">
    <input type="number" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">Salario</label>
  </div>

  <button type="submit" class="btn btn-primary btn-block mb-4">Actualizar</button>
  </form> 

  </div>
  

  <div class="bg-success p-2" style="--bs-bg-opacity: .5;" id="actuindi">
  <form>
  <div class="row mb-4">

  
    <center>
    <h1>Actualizar datos</h1>
    <div class="dropdown">
  <button class="dropbtn">Dropdown</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
    </center>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">Nombre</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" class="form-control" />
        <label class="form-label" for="form6Example2">Apellido</label>
      </div>
    </div>
  </div>
  <div class="form-outline mb-4">
    <input type="number" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">Edad</label>
  </div>

  <div class="form-outline mb-4">
    <input type="number" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">Salario</label>
  </div>

  <button type="submit" class="btn btn-primary btn-block mb-4">Actualizar</button>
  </form> 

  </div> -->
  
  




  </body>
</html>


 