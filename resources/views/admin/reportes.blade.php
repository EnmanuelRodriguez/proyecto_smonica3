@extends('adminlte::page')


@section('title', 'Marisqueria Santa Monica')

@section('content_header')
<h1>Reportes</h1>
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1></h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Busqueda</a></li>
        <li class="breadcrumb-item active">reportes</li>
      </ol>
    </div>
  </div>
</div><!-- /.container-fluid -->
@stop

@section('content')


<div class = "card">
        <div class = "card-body">


<div class="form-group">
        <label class="label">COD_REPORTE</label>
        <input required autocomplete="off" name="cod_reporte" class="form-control"
                           type="text" placeholder="Buscar">
</div>

<div class="card-header">
    <a class="btn btn-primary" href="">Agregar</a>
    <i class="fa fa-plus-circle"></i>
</div>
   
  <!-- /.card-header -->
  <table class= "table table-striped">
 <THEad>
      <tr>
      <th>Reporte</th>
        <th>Nombre</th>
        <th>Usuario</th>
        <th>Detalles</th>
        <th>Codigo de Formato</th>
        <th>Fecha Desde</th>
        <th>Fecha Hasta</th>
        <th>Opciones de Tabla</th>
        </tr>
      </thead>

      <tbody>
       
        <tr>
        <td>1</td>
        <td>JUAN</td>
        <td>JUANML</td>
        <TD>VENTA DE 500 UNIDADES REALIZADA</TD>
        <TD>EXC</TD>
        <TD>22-10-1</TD>
        <TD>22-11-2</TD>
        <td>       

        <a class="btn btn-warning" href="">
                                <i class="fa fa-edit"></i>
                            </a>
       </td>
        </tr>
       
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