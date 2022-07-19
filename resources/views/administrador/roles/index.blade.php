@extends('adminlte::page')
@section('title', 'Inicio')
@section('content_header')
<a class="btn btn-secondary btn-sm float-right" href="{{route('administrador.roles.create')}}">Crear rol</a>
<h1>Gestion de roles</h1>
@stop

@section('content')
@include('sweetalert::alert')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="roles">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Rol</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $rol)
                        <tr>
                            <td>{{$rol->id}}</td>
                            <td>{{$rol->name}}</td>
                            <td width="10px"><a href="{{route('administrador.roles.edit',$rol)}}" class="btn btn-primary">Editar</a></td>
                            <td width="10px">
                                <form action="{{route('administrador.roles.destroy',$rol)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
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

@push('js')
<script>
    $(document).ready(function () {
        $('#roles').DataTable({
            responsive:true,
            autoWidth:false,
            "language":{
                "lengthMenu":"Mostrar "+
            `<select class="custom-select custom-select-sm form-control form-control-sm">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
                <option value="-1">Todos</option>
                </select>`
                +" registros por página",
                "zeroRecords":"Nada encontrado",
                "info":"Mostrando la página _PAGE_ de _PAGES_",
                "search":"Buscar:",
                "paginate":{
                    'next':'Siguiente',
                    'previous':'Anterior'
                }
            }
        });
    });
</script>
@endpush


