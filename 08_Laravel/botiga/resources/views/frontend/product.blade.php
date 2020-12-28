@extends('layouts.base')

@section('titlePage')
    Producte
@endsection

@section('contingut')

    <div class="content">
        <div class="title m-b-md">
            {{$product->name}}
        </div>

        <div class="text">
            {{$product->description}}
        </div>

    </div>

@endsection
