@extends('adminlte::page')


@section('title', 'Marisqueria Santa Monica')

@section('content_header')
<h1>Inventario</h1>
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1></h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Busqueda</a></li>
        <li class="breadcrumb-item active">Inventario</li>
      </ol>
    </div>
  </div>
</div><!-- /.container-fluid -->
@stop

@section('content')

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#inventario">+ Agregar</button>
                <div class="modal fade bd-example-modal-sm" id="inventario" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Nueva Registro de Empleado</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <p>Ingrese Datos</p>
      
       
      </div>
      <div class="modal-footer">
      <div class="d-grid gap-2 col-6 mx-auto"><!-- DIV PARA CENTRAR FORMULARIO--->
      <form action="{{ route ('inv_final.store') }}" method="post">
            
              @csrf

<div class="mb-3">
  <label for="inventario" class="form-label">COD_PRODUCTO</label>
  <input type="text" class="form-control" id="producto" name="producto" placeholder="Ingrese el codigo del producto">
</div>
<div class="mb-3">
  <label for="inventario" class="form-label">COD_INV_COMPRA</label>
  <input type="text" class="form-control" id="invcompra" name="invcompra" placeholder="Ingrese el codigo inventario compra">
</div>
<div class="mb-3">
  <label for="inventario" class="form-label">COD_INV_VENTA</label>
  <input type="text" class="form-control" id="invventa" name="invventa" placeholder="Ingrese el codigo inventario venta">
</div>
<div class="mb-3">
  <label for="inventario" class="form-label">CANTIDAD</label>
  <input type="text" class="form-control" id="cantidades" name="cantidades" placeholder="Ingrese la cantidad">
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
        <label class="label">COD_INV_FINAL</label>
        <input required autocomplete="off" name="cod_inv_final" class="form-control"
                           type="text" placeholder="Buscar">
</div>
   
  <!-- /.card-header -->
  <table class= "table table-striped">
 <THEad>
      <tr>
          <th>Nº</th>
          <th>COD_PRODUCTO</th>
          <th>COD_INV_COMPRA</th>
          <th>COD_INV_VENTA</th>
          <th>CANTIDAD</th>
          <th>EDITAR</th>
        </tr>
      </thead>

      <tbody>
      @foreach($mostrar as $inv_final) 
        <tr>
        <td>{{$inv_final['COD_INV_FINAL']}}</td>
        <td>{{$inv_final['COD_PRODUCTO']}}</td>
        <td>{{$inv_final['COD_INV_COMPRA']}}</td>
        <td>{{$inv_final['COD_INV_VENTA']}}</td>
        <td>{{$inv_final['CANTIDAD']}}</td>
        <td>       
            <a class="btn btn-warning" href="/inv_final/edit/{{ $inv_final['COD_INV_FINAL'] }}">
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