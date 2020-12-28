@extends('layouts.base')

@section('titlePage')
    Qui som?
@endsection

@section('contingut')

    <div class="content">
        <div class="title m-b-md">
            {{$categoria->name}}
        </div>

        <div class="text">
            {{$categoria->description}}
        </div>

        @if ($categoria->id === 1)
            <a href="{{ route('product', ['id'=>1]) }}">Anxoves de Roses</a><br>
            <a href="{{ route('product', ['id'=>2]) }}">Fesols de Santa Pau</a><br>
            <a href="{{ route('product', ['id'=>3]) }}">Arròs bomba Terres de l'Ebre</a><br>
        @elseif ($categoria->id === 2)
            <a href="{{ route('product', ['id'=>4]) }}">Anhel d'Empordà</a><br>
            <a href="{{ route('product', ['id'=>5]) }}">Ratafia</a><br>
            <a href="{{ route('product', ['id'=>6]) }}">Vi blanc de Peralada</a>
        @endif





    </div>

@endsection
