@extends('layouts.base')

@section('contingut')

    <div class="title m-b-md">
        Buscador de productes
    </div>

    <div class="content">
        <form action="{{ route('product_result_search') }}" method="post">
            @csrf
            <label for="nom">Nom del producte:</label>
            <input type="text" name="nom" id="nom"><br>

            <label for="categoria">Categoria: </label>
            <select name="categoria" id="categoria">
                <option value="0">Totes les categories</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select><br>

            <label for="minim">Preu mínim: </label>
            <input type="text" name="minim" id="minim" value="0"><br>

            <label for="maxim">Preu màxim: </label>
            <input type="text" name="maxim" id="maxim" value="1000"><br>

            <input type="submit" value="Enviar">
        </form>
    </div>


@endsection
