@extends('layouts.admin')

@section('titol')
    Nova categoria
@endsection

@section('contingut')

    <style>
        .is-invalid{
            background-color: red;
        }
    </style>
    <div class="col-12">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>

    <div class="content col-12">

        <form action="{{route('categories.store')}}" method="post">
            @csrf
            <label for="name">Nom:</label>
            <input type="text" name="name" id="name" class="@error('name') is-invalid @enderror" value="{{old('name')}}" ><br>

            <label for="description">Description:</label>
            <textarea name="description" id="description" cols="30" rows="10">{{old('description')}}</textarea>
            <br>

            <label for="color">Color:</label>
            <input type="color" name="color" id="color" value="{{old('color')}}">
            <br>

            <input type="submit" value="Crear" class="btn btn-success">
        </form>

    </div>


@endsection
