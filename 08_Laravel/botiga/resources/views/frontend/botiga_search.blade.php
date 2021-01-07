@extends('layouts.base')

@section('contingut')

    <div class="title m-b-md">
        Buscador de botigues
    </div>

    <div class="content">
        <form action="{{ route('botiga_result_search') }}" method="post">
            @csrf
            <label for="nom">Nom de la botiga:</label>
            <input type="text" name="nom" id="nom">
            <input type="submit" value="Enviar">
        </form>
    </div>


@endsection
