@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
<h3>Editar usuario</h3>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($user,['route' => ['administrador.users.update',$user], 'method' => 'put']) !!}
            @include('administrador.users.partials.form')
            {!! Form::submit('Editar usuario',['class' => 'btn btn-primary btn-sm']) !!}
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
