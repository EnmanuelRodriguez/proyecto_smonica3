@extends('adminlte::page')

@section('title', 'Santa Monica')

@section('content_header')
<h1>Proveedores</h1>
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1></h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Busqueda</a></li>
        <li class="breadcrumb-item active">Proveedores</li>
      </ol>
    </div>
  </div>
</div><!-- /.container-fluid -->
@stop

@section('content')


<button type="button" class="btn btn-success" data-toggle="modal" data-target="#proveedor">+ Agregar</button>
                <div class="modal fade bd-example-modal-sm" id="proveedor" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Nueva Registro de Proveedor</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <p>Ingrese Datos</p>
      
       
      </div>
      <div class="modal-footer">
      <div class="d-grid gap-2 col-6 mx-auto"><!-- DIV PARA CENTRAR FORMULARIO--->
      <form action="{{ route ('proveedores.store') }}" method="post">
            
              @csrf

<div class="mb-3">
  <label for="proveedor" class="form-label">COD_PERSONA</label>
  <input type="text" class="form-control" id="persona" name="persona" placeholder="Ingrese el codigo persona">
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
        <label class="label">Codigo Proveedor</label>
        <input required autocomplete="off" name="cod_correo" class="form-control"
                           type="text" placeholder="Buscar">
</div>

   <table class= "table table-striped">
         <thead>
               <tr>
                   <th>COD_PROVEEDOR</th>
                   <th>Cod_Persona</th>
                   <th>Editar </th>
                   <TH COLSPAN = "5"> </TH>
                </tr>
               </tr>
        </thead>

        <tbody>
        @foreach($mostrar as $proveedores)
                    <tr>
                         <td><label class="label">{{$proveedores['COD_PROVEEDOR']}}</label></td>                         
                         <td><label class="label">{{$proveedores['COD_PERSONA']}}</label></td> 
                        
                        
                        <td>

                        <a class="btn btn-warning" href="/proveedores/edit/{{ $proveedores['COD_PROVEEDOR'] }}">
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