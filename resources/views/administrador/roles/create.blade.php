@extends('adminlte::page')
@section('title', 'Inicio')

@section('content_header')
    <h1>Creación de roles</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'administrador.roles.store']) !!}
            @include('administrador.roles.partials.form')
            {!! Form::submit('Crear rol', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
