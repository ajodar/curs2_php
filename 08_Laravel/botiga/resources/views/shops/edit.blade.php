@extends('layouts.admin')

@section('titol')
    Nova botiga
@endsection

@section('contingut')

    <div class="content col-12">

        <form action="{{route('shops.update', ['shop'=>$shop->id] )}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="PUT">

            <label for="name">Nom:</label>
            <input type="text" name="name" id="name" value="{{$shop->name}}"><br>

            <label for="adress">Adress:</label>
            <input type="text" name="adress" id="adress" value="{{$shop->adress}}">
            <br>

            <label for="phone">Phone:</label>
            <input type="phone" name="phone" id="phone" value="{{$shop->phone}}">
            <br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{$shop->email}}">
            <br>

            <label for="schedule">Schedule:</label>
            <input type="schedule" name="schedule" id="schedule" value="{{$shop->schedule}}">
            <br>

            <label for="country_id">País:</label>
            <select name="country_id" id="country_id">
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}" @if ( $shop->country_id == $country->id) selected @endif >
                        {{ $country->name}}
                    </option>
                @endforeach
            </select>
            <br>

            <input type="submit" value="Guardar" class="btn btn-success">
        </form>

    </div>


@endsection
