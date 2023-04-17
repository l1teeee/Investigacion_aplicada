



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
      <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.0.2/dist/sweetalert2.min.css">  
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
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


    <tr v-for="personas in persona" :key="personas.id">
    <td>{{personas.id}}</td>
    <td>{{personas.nombres}}</td>
    <td>{{personas.apellidos}}</td>
    <td>{{personas.edad}}</td>
    <td>{{personas.salario}}</td>
    <td>
    <button type="button" class="btn btn-secondary" id="showModifi">Modificar</button>
    <button type="button" class="btn btn-danger"  id="showElimi">Eliminar</button>
    </td>
    </tr> 

  	</tbody>
	</table>
    <center><div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-success" id="showDialog">Subir dato</button>
    </div></center>
    </div>
    
    

    <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.js" integrity="sha512-nqIFZC8560+CqHgXKez61MI0f9XSTKLkm0zFVm/99Wt0jSTZ7yeeYwbzyl0SGn/s8Mulbdw+ScCG41hmO2+FKw==" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.0.2/dist/sweetalert2.all.min.js"></script>


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
    <center>    <h5>Estas seguro que quieres eliminar este dato?</h1>
    <br>
</center>

  <div class="d-grid gap-2">
  <button id="confirmBtn2" value="default" class="btn btn-outline-success">Eliminar</button>

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
  
  



  <<script>
    let url = 'http://localhost:3000/api/personas';
    new Vue({
      el: '#app',
      vuetify: new Vuetify(),
       data() {
        return {            
            articulos: [],
            dialog: false,
            operacion: '',            
            articulo:{
                id: null,
                descripcion:'',
                precio:'',
                stock:''
            }          
        }
       },
       created(){               
            this.mostrar()
       },  
       methods:{          
            //MÉTODOS PARA EL CRUD
            mostrar:function(){
              axios.get(url)
              .then(response =>{
                this.articulos = response.data;                   
              })
            },
            crear:function(){
                let parametros = {descripcion:this.articulo.descripcion, precio:this.articulo.precio,stock:this.articulo.stock };                
                axios.post(url, parametros)
                .then(response =>{
                  this.mostrar();
                });     
                this.articulo.descripcion="";
                this.articulo.precio="";
                this.articulo.stock="";
            },                        
            editar: function(){
            let parametros = {descripcion:this.articulo.descripcion, precio:this.articulo.precio, stock:this.articulo.stock, id:this.articulo.id};                            
            //console.log(parametros);                   
                 axios.put(url+this.articulo.id, parametros)                            
                  .then(response => {                                
                     this.mostrar();
                  })                
                  .catch(error => {
                      console.log(error);            
                  });
            },
            borrar:function(id){
             Swal.fire({
                title: '¿Confirma eliminar el registro?',   
                confirmButtonText: `Confirmar`,                  
                showCancelButton: true,                          
              }).then((result) => {                
                if (result.isConfirmed) {      
                      //procedimiento borrar
                      axios.delete(url+id)
                      .then(response =>{           
                          this.mostrar();
                       });      
                      Swal.fire('¡Eliminado!', '', 'success')
                } else if (result.isDenied) {                  
                }
              });              
            },

            //Botones y formularios
            guardar:function(){
              if(this.operacion=='crear'){
                this.crear();                
              }
              if(this.operacion=='editar'){ 
                this.editar();                           
              }
              this.dialog=false;                        
            }, 
            formNuevo:function () {
              this.dialog=true;
              this.operacion='crear';
              this.articulo.descripcion='';                           
              this.articulo.precio='';
              this.articulo.stock='';
            },
            formEditar:function(id, descripcion, precio, stock){              
              this.articulo.id = id;
              this.articulo.descripcion = descripcion;                            
              this.articulo.precio = precio;
              this.articulo.stock = stock;                      
              this.dialog=true;                            
              this.operacion='editar';
            }
       }      
    });
  </script>

  </body>
</html>


 