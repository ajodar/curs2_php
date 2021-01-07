@extends('layouts.admin')

@section('titol')
    Categories
    <a href="{{route('categories.create')}}" class="btn btn-primary float-right">AFEGIR CATEGORIA</a>
@endsection

@section('contingut')

    <div class="content col-12">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nom categoria</th>
                    <th>Accions</th>
                </tr>
            </thead>

                @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->name}}</td>
                        <td>
                            <a href="{{route('categories.edit', ['category'=>$category->id])}}" class="btn btn-info">Editar</a>

                            @if (is_null($category->deleted_at))
                                <form action="{{route('categories.destroy', ['category'=>$category->id])}}" method="POST" style="display:inline">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="submit" value="Eliminar" class="btn btn-danger">
                                </form>
                            @else
                                <a href="{{route('categories.restore', ['category'=>$category->id])}}" class="btn btn-success">Recuperar</a>
                            @endif
                        </td>
                    </tr>

                @endforeach

        </table>

    </div>


@endsection
