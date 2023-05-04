@extends('adminlte::page')



@section('title', 'Dasboard')

@section('content_header')
    <h1>Santa Monica</h1>
    <h1>Mariscos y Carnes</h1>
@stop

@section('content')
<section class="content">
<div class="container-fluid">

<div class="row">
<div class="col-lg-3 col-6">

<div class="small-box bg-info">
<div class="inner">
<h3>50</h3>
<p>Compras</p>
</div>
<div class="icon">
<i class="fas fa-shopping-cart"></i>
</div>
<a href="#" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-success">
<div class="inner">
<h3>153</h3>
<p>Ventas</p>
</div>
<div class="icon">
<i class="fas fa-handshake"></i>
</div>
<a href="#" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-danger">
<div class="inner">
<h3>15</h3>
<p>Total Clientes</p>
</div>
<div class="icon">
<i class="far fa-address-card"></i>
</div>
<a href="#" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>



<div class="col-lg-3 col-6">

<div class="small-box bg-warning">
<div class="inner">
<h3>14</h3>
<p>Usuarios Registrados</p>
</div>
<div class="icon">
<i class="fas fa-user-plus"></i>
</div>
<a href="#" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="card bg-gradient-success">
<div class="card-header border-0">
<h3 class="card-title">
<i class="far fa-calendar-alt"></i>
Calendar
</h3>
<div class="card-tools">

<div class="btn-group">
<button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
<i class="fas fa-bars"></i>
</button>
<div class="dropdown-menu" role="menu">
<a href="#" class="dropdown-item">Add new event</a>
<a href="#" class="dropdown-item">Clear events</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">View calendar</a>
</div>
</div>
<button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
</div>

</div>

<div class="card-body pt-0">

<div id="calendar" style="width: 100%"></div>
</div>

</div>

</section>

</div>

</div>
</section>

</div>

<footer class="main-footer">
<strong>Copyright &copy <a href="https://adminlte.io">Santa Monica Marisco y Carnes</a>.</strong>
All rights reserved.
<div class="float-right d-none d-sm-inline-block">
<b>Version</b> 1.0.0
</div>
</footer>

<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>



@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop