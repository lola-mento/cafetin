@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
<h3>Pagina de creación de empleados</h3>
@stop

@section('content')
    @livewire('administrador.employee-create')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
