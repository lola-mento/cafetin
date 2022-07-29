@extends('adminlte::page')
@section('title', 'Inicio')
@section('content_header')
<a class="btn btn-secondary btn-sm float-right" href="{{route('administrador.employees.create')}}">Crear Empleado</a>
<h1>Gestion de empleados</h1>
@stop

@section('content')
@include('sweetalert::alert')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="empleados">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Salario</th>
                        <th>Telefono</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{$employee->id}}</td>
                            <td>{{$employee->name}}</td>
                            <td>{{$employee->lastname}}</td>
                            <td>{{$employee->salary}}</td>
                            <td>{{$employee->phone}}</td>
                            <td width="10px"><a href="{{route('administrador.employees.edit',$employee)}}" class="btn btn-primary">Editar</a></td>
                            <td width="10px">
                                <form action="{{route('administrador.employees.destroy',$employee)}}" method="POST">
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
        $('#empleados').DataTable({
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


