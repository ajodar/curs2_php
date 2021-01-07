@extends('layouts.admin')

@section('titol')
    Modificar categoria
@endsection

@section('contingut')

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

        <form action="{{route('categories.update',['category'=>$category->id])}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <label for="name">Nom:</label>
            <input type="text" name="name" id="name" value="{{old('name',$category->name)}}"><br>

            <label for="description">Description:</label>
            <textarea name="description" id="description" cols="30" rows="10">{{old('description',$category->description)}}</textarea>
            <br>

            <label for="color">Color:</label>
            <input type="color" name="color" id="color" value="{{old('color',$category->color)}}">
            <br>

            <input type="submit" value="Guardar" class="btn btn-success">
        </form>

    </div>


@endsection
