@extends('adminlte::page')

@section('title', 'Santa Monica')

@section('content_header')
<h1>Telefonos</h1>
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1></h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Busqueda</a></li>
        <li class="breadcrumb-item active">Telefonos</li>
      </ol>
    </div>
  </div>
</div><!-- /.container-fluid -->
@stop

@extends('adminlte::page')

@section('title', 'Telefonos')

@section('content_header')
    <h1>Lista de Telefonos</h1>
@stop

@section('content')
    <div class = "card">
        <div class = "card-body">

<div class="form-group">
        <label class="label">COD_TELEFONO</label>
        <input required autocomplete="off" name="cod_telefono" class="form-control"
                           type="text" placeholder="Buscar">
</div>

<div class="card-header">
    <a class="btn btn-primary" href="">Agregar</a>
    <i class="fa fa-plus-circle"></i>
</div>



   <table class= "table table-striped">
         <thead>
               <tr>
                   <th>COD_TELEFONO</th>
                   <TH>TIP_TELEFONO</TH>
                   <th>NUM_TELEFONO</th>
                   <th>Editar</th>
                   <TH COLSPAN = "5"> </TH>
                </tr>
               </tr>
        </thead>

        <tbody>
        @foreach($mostrar as $telefonos)
                    <tr>
                         <td>
                         <label class="label">{{$telefonos['COD_TELEFONO']}}</label>
                         </td>
                         <td>
                         <label class="label">{{$telefonos['TIP_TELEFONO']}}</label>
                         </td>
                         <td>
                         <label class="label">{{$telefonos['NUM_TELEFONO']}}</label>
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

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

@section('footer')

<div class="float-right d-none d-sm-block">
  <b>Version</b> 3.1.0
</div>
<strong>Copyright &copy; 2014-2021 <a href="">Marisqueria Santa Monica</a>.</strong> All rights reserved.

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">