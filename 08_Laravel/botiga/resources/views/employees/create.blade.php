@extends('layouts.admin')

@section('titol')
    Nou empleat
@endsection

@section('contingut')

    <div class="content col-12">

        <form action="{{route('employees.store')}}" method="post">
            @csrf
            <label for="name">Nom:</label>
            <input type="text" name="name" id="name"><br>

            <label for="lastName">Last name:</label>
            <input type="text" name="lastName" id="lastName">
            <br>

            <label for="address">Address:</label>
            <input type="address" name="address" id="address">
            <br>

            <label for="city">City:</label>
            <input type="city" name="city" id="city">
            <br>

            <label for="phone">Phone:</label>
            <input type="phone" name="phone" id="phone">
            <br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <br>

            <label for="country_id">País:</label>
            <select name="country_id" id="country_id">
                @foreach ($countries as $country)
                    <option value="{{$country->id}}">{{$country->name}}</option>
                @endforeach
            </select>
            <br>

            <label for="department_id">Department:</label>
            <select name="department_id" id="department_id">
                @foreach ($departments as $department)
                    <option value="{{$department->id}}">{{$department->name}}</option>
                @endforeach
            </select>
            <br>

            <input type="submit" value="Crear" class="btn btn-success">
        </form>

    </div>


@endsection
