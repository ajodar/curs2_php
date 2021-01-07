@extends('layouts.base')

@section('titlePage')
    Producte
@endsection

@section('contingut')

    <div class="content">
        <div class="title m-b-md">
            @if($product)
                {{$product->name}}
            @else
                El producte no existeix
            @endif
        </div>

        @if($product)
            <div class="text">
                {{$product->description}}

            </div>
            <p> Preu de venda: {{ $product->price }}</p>
        @endif

    </div>

@endsection
