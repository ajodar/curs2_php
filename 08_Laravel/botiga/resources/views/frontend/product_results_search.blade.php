@extends('layouts.base')

@section('contingut')

    <div class="title m-b-md">
        Resultat de la recerca de productes
    </div>

    <div class="content">
        @foreach ($productes as $producte)
            <p><a href="{{route('product',['id'=>$producte->id])}}">{{$producte->name}}</a></p>

        @endforeach

    </div>


@endsection

