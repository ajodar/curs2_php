@extends('layouts.base')

@section('contingut')

    <div class="title m-b-md">
        CATEGORIES DE PRODUCTES
    </div>

    <div class="content">

        {{-- $categories que arriba és un array --}}
        @foreach($categories as $category)
            <a href="{{ route('categoria', ['id'=>$category->id])}}">{{$category->name}}</a>
        @endforeach

    </div>


@endsection
