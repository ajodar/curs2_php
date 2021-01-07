@extends('layouts.base')

@section('contingut')

    <div class="title m-b-md">
        Resultats de la recerca de botigues
    </div>

    <div class="content">
        @foreach ($botigues as $botiga)
            <p><a href="{{route('botiga',['id'=>$botiga->id])}}">{{$botiga->name}}</a></p>

        @endforeach

    </div>


@endsection

