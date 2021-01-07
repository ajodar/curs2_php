@extends('layouts.admin')

@section('titol')
    Modificar botiga
@endsection

@section('contingut')

    <div class="content col-12">

        <form action="{{route('employees.update',['employee'=> $employee->id])}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="PUT">

            <label for="name">Nom:</label>
            <input type="text" name="name" id="name" value="{{$employee->name}}"><br>

            <label for="lastName">Last name:</label>
            <input type="text" name="lastName" id="lastName" value="{{$employee->lastName}}">
            <br>

            <label for="address">Address:</label>
            <input type="address" name="address" id="address" value="{{$employee->address}}">
            <br>

            <label for="city">City:</label>
            <input type="city" name="city" id="city" value="{{$employee->city}}">
            <br>

            <label for="phone">Phone:</label>
            <input type="phone" name="phone" id="phone" value="{{$employee->phone}}">
            <br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{$employee->email}}">
            <br>

            <label for="country_id">País:</label>
            <select name="country_id" id="country_id">
                @foreach ($countries as $country)
                    <option value="{{$country->id}}" @if($country->id == $employee->country_id) selected @endif >{{$country->name}} </option>
                @endforeach
            </select>
            <br>

            <label for="department_id">Department:</label>
            <select name="department_id" id="department_id">
                @foreach ($departments as $department)
                    <option value="{{$department->id}}" @if($department->id == $employee->department_id) selected @endif >{{$department->name}}</option>
                @endforeach
            </select>
            <br>

            <input type="submit" value="Guardar" class="btn btn-success">
        </form>

    </div>


@endsection
