@extends('adminlte::page')


@section('title', 'Marisqueria Santa Monica')

@section('content_header')
<h1>Clientes</h1>
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1></h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Busqueda</a></li>
        <li class="breadcrumb-item active">Clientes</li>
      </ol>
    </div>
  </div>
</div><!-- /.container-fluid -->
@stop

@section('content')

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#cliente">+ Agregar</button>
                <div class="modal fade bd-example-modal-sm" id="cliente" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Nueva Registro de Cliente</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <p>Ingrese Datos</p>
      
       
      </div>
      <div class="modal-footer">
      <div class="d-grid gap-2 col-6 mx-auto"><!-- DIV PARA CENTRAR FORMULARIO--->
      <form action="{{ route ('clientes.store') }}" method="post">
            
              @csrf

<div class="mb-3">
  <label for="cliente" class="form-label">COD_PERSONA</label>
  <input type="text" class="form-control" id="persona" name="persona" placeholder="Ingrese el codigo persona">
</div>
<div class="mb-3">
  <label for="cliente" class="form-label">FACTURA</label>
  <input type="text" class="form-control" id="facturas" name="facturas" placeholder="Ingrese la factura" onkeyup="convertir('facturas'), this.value= LetrasEspacio(this.value)"required>
</div>
              <button type = "submit"  class="btn btn-primary">enviar</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">cancelar</button>
          </form>
          </div><!-- DIV PARA CENTRAR FORMULARIO--->
          <!-- boton cancelar movido -->
      </div>
    </div>
  </div>
</div>

<div class = "card">
        <div class = "card-body">
 

<div class="form-group">
        <label class="label">COD_CLIENTE</label>
        <input required autocomplete="off" name="cod_correo" class="form-control"
                           type="text" placeholder="Buscar">
</div>

   
  <!-- /.card-header -->
  <table cellspacing="5" cellpadding="5" class= "table table-striped">
 <THEad>
      <tr>
          <th>Nº</th>
          <th>COD_PERSONA</th>
          <th>FACTURA</th>
          <TH>EDITAR</TH>
        </tr>
      </thead>

      <tbody>
      @foreach($mostrar as $clientes) 
        <tr>
        <td>{{$clientes['COD_CLIENTE']}}</td>
        <td>{{$clientes['COD_PERSONA']}}</td>
        <td>{{$clientes['FACTURA']}}</td>
        <td>       

        <a class="btn btn-warning" href="/clientes/edit/{{ $clientes['COD_CLIENTE'] }}">
                                <i class="fa fa-edit"></i>
                            </a>

       </td>
        </tr>
        @endforeach 
      </tbody>

    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

@stop


@section('footer')

<div class="float-right d-none d-sm-block">
  <b>Version</b> 3.1.0
</div>
<strong>Copyright &copy; 2014-2021 <a href="">Marisqueria Santa Monica</a>.</strong> All rights reserved.

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@Stop

@section('js')
<script> //<!--Funciones de caracteres validos-->

// sustituye los dos espacios por uno
function espacios(CajaTexto){
 var input = document.getElementById(CajaTexto);
    input.value = input.value.replace('  ', ' '); //sustituimos dos espacios seguidos por uno

}


function Letras(string){//solo letras y numeros
var out = '';
//Se añaden las letras validas
var filtro = 'abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZáéíúóüÁÉÍÓÚÜ';//Caracteres validos
for (var i=0; i<string.length; i++)
   if (filtro.indexOf(string.charAt(i)) != -1)
   out += string.charAt(i);
  return out;
}
function LetrasEspacio(string){//solo letras y numeros
var out = '';
//Se añaden las letras validas
var filtro = 'abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZáéíúóüÁÉÍÓÚÜ ';//Caracteres validos
for (var i=0; i<string.length; i++)
   if (filtro.indexOf(string.charAt(i)) != -1)
   out += string.charAt(i);
  return out;
}
function LetrasEspacioNumeros(string){//solo letras y numeros
var out = '';
//Se añaden las letras validas
var filtro = 'abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZáéíúóüÁÉÍÓÚÜ1234567890- ';//Caracteres validos
for (var i=0; i<string.length; i++)
   if (filtro.indexOf(string.charAt(i)) != -1)
   out += string.charAt(i);
  return out;
}
function Numeros(string){//solo letras y numeros
var out = '';
//Se añaden las letras validas
var filtro = '1234567890,.';//Caracteres validos
for (var i=0; i<string.length; i++)
   if (filtro.indexOf(string.charAt(i)) != -1)
   out += string.charAt(i);
  return out;
}
function calcular_edad() {
  var form = document.getElementById('fech_nacimiento').value; //fecha de nacimiento en el formulario
  var fechaNacimiento = form.split("-");
  var annoNac = fechaNacimiento[0];
  var mesNac = fechaNacimiento[1];
  var diaNac = fechaNacimiento[2];

  var fechaHoy = new Date(); // detecto la fecha actual y asigno el dia, mes y anno a variables distintas
  var annoActual = fechaHoy.getFullYear();
  var mesActual = fechaHoy.getMonth() + 1;
  var diaActual = fechaHoy.getDate();

  var edad = annoActual - annoNac;
  if (mesNac > mesActual) {
    //alert('mes de nacimiento mayor');
    edad--;
  }
  if (mesNac == mesActual) {
    //alert('mes igual');
    if (diaNac > diaActual) {
      //alert('dia de nacimiento mayor');
      edad--;
    }
  }
  document.getElementById('edad').value = edad;
}

function convertir(CajaTexto) {
  // Recibes el texto input del html y conviertes todos los caracteres a minúscula
  let nombre = document.getElementById(CajaTexto).value.toLowerCase();
 
  // Esta expresion regular busca un conjunto de caracteres que no sean espacios
  //Cada grupo encontrado lo remplaza por si mismo con la primera letra mayuscula
  nombre = nombre.replace(/([^\s]+)/gm, function (textoEncontrado) {
          return textoEncontrado.charAt(0).toUpperCase() + textoEncontrado.substring(1);
  });
 
  // Finalmente asignas el output al elemento hmtl
  document.getElementById(CajaTexto).value = nombre;
}
//función que capitaliza la primera letra caja de texto primer nombre
function capitalizarPrimeraLetra(CajaTexto) {
 var input = document.getElementById(CajaTexto);
 //almacenamos el valor del input
  var palabra = input.value;
  //Si el valor es nulo o undefined salimos
  if(!input.value) return;
  // almacenamos la mayuscula
  var mayuscula = palabra.substring(0,1).toUpperCase();
  //si la palabra tiene más de una letra almacenamos las minúsculas
  if (palabra.length > 0) {
    var minuscula = palabra.substring(1).toLowerCase();
  }
  //escribimos la palabra con la primera letra mayuscula
  input.value = mayuscula.concat(minuscula);
}
</script>
@Stop