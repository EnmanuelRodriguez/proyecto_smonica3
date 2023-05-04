@extends('adminlte::page')


@section('title', 'Marisqueria Santa Monica')

@section('content_header')
<h1>Ventas</h1>
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1></h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Busqueda</a></li>
        <li class="breadcrumb-item active">Ventas</li>
      </ol>
    </div>
  </div>
</div><!-- /.container-fluid -->
@stop

@section('content')

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#venta">+ Agregar</button>
                <div class="modal fade bd-example-modal-sm" id="venta" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Nueva Registro de Venta</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <p>Ingrese Datos</p>
      
       
      </div>
      <div class="modal-footer">
      <div class="d-grid gap-2 col-6 mx-auto"><!-- DIV PARA CENTRAR FORMULARIO--->
      <form action="{{ route ('ventas.store') }}" method="post">
            
              @csrf

<div class="mb-3">
  <label for="venta" class="form-label">COD_CLIENTE</label>
  <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Ingrese el codigo cliente">
</div>
<div class="mb-3">
  <label for="venta" class="form-label">CANTIDAD</label>
  <input type="text" class="form-control" id="canti" name="canti" placeholder="Ingrese la cantidad">
</div>
<div class="mb-3">
  <label for="venta" class="form-label">PRECIO</label>
  <input type="text" class="form-control" id="precios" name="precios" placeholder="Ingrese el precio">
</div>
<div class="mb-3">
  <label for="venta" class="form-label">METODO DE PAGO</label>
  <input type="text" class="form-control" id="metodo" name="metodo" placeholder="Ingrese el metodo de pago">
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
        <label class="label">COD_VENTAS</label>
        <input required autocomplete="off" name="cod_correo" class="form-control"
                           type="text" placeholder="Buscar">
</div>

  <table class= "table table-striped">
 <THEad>
      <tr>
        <th >Nº</th>
          <th >COD_CLIENTE</th>
          <th >CANTIDAD</th>
          <th >PRECIO</th>
          <th >Editar</th>
        </tr>
      </thead>

      <tbody>
      @foreach($mostrar as $ventas) 
        <tr>
        <td>{{$ventas['COD_VENTAS']}}</td>
        <td>{{$ventas['COD_CLIENTE']}}</td>
        <td>{{$ventas['CANTIDAD']}}</td>
        <td>{{$ventas['PRECIO']}}</td>
        <td>       
            <a class="btn btn-warning" href="/ventas/edit/{{ $ventas['COD_VENTAS'] }}">
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