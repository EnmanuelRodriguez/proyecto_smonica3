@extends('adminlte::page')

@section('title', 'Santa Monica')

@section('content_header')
<h1>Correos</h1>
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1></h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Busqueda</a></li>
        <li class="breadcrumb-item active">Correos</li>
      </ol>
    </div>
  </div>
</div><!-- /.container-fluid -->
@stop

@section('content')
    <div class = "card">
        <div class = "card-body">

<div class="form-group">
        <label class="label">COD_CORREO</label>
        <input required autocomplete="off" name="cod_correo" class="form-control"
                           type="text" placeholder="Buscar">
</div>

<div class="card-header">
    <a class="btn btn-primary" href="">Agregar</a>
    <i class="fa fa-plus-circle"></i>
</div>



   <table class= "table table-striped">
         <thead>
               <tr>
                   <th>COD_CORREO</th>
                   <TH>TIP_CORREO</TH>
                   <th>CORREO</th>
                   <th>Editar</th>
                   <TH COLSPAN = "5"> </TH>
                </tr>
               </tr>
        </thead>

        <tbody>
        @foreach($mostrar as $correos)
                    <tr>
                         <td>
                         <label class="label">{{$correos['COD_CORREO']}}</label>
                         </td>
                         <td>
                         <label class="label">{{$correos['TIP_CORREO']}}</label>
                         </td>
                         <td>
                         <label class="label">{{$correos['CORREO']}}</label>
                         </td>
                        <td>
                            <a class="btn btn-warning" href="">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
       </table>
      </div>
    </div>
@stop

@section('footer')

<div class="float-right d-none d-sm-block">
  <b>Version</b> 3.1.0
</div>
<strong>Copyright &copy; 2014-2021 <a href="">Marisqueria Santa Monica</a>.</strong> All rights reserved.

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">