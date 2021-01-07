@extends('layouts.admin')

@section('titlePage')
    Gestor d'empleats
@endsection

@section('titol')
    Empleats
    <a href="{{route('employees.create')}}" class="btn btn-primary float-right">AFEGIR EMPLEAT</a>
@endsection

@section('contingut')

    <div class="content col-12">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Cognoms</th>
                    <th>Telèfon</th>
                    <th>País</th>
                    <th>Departament</th>
                    <th>Accions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->lastName}}</td>
                        <td>{{$employee->phone}}</td>
                        <td>{{$employee->country_id}}</td>
                        <td>{{$employee->department_id}}</td>
                        <td>
                            <a href="{{route('employees.edit',['employee'=>$employee->id]) }}" class="btn btn-info">Editar</a>
                            <a href="" class="btn btn-danger" >Eliminar</a>
                        </td>
                    </tr>

                @endforeach

            </tbody>



        </table>

    </div>


@endsection
