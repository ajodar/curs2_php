@extends('layouts.admin')

@section('titol')
    Nova botiga
@endsection

@section('contingut')

    <div class="col-12">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>

    <div class="content col-12">

        <form action="{{route('shops.store')}}" method="post">
            @csrf
            <label for="name">Nom:</label>
            <input type="text" name="name" id="name" value="{{old('name')}}"><br>

            <label for="adress">Adress:</label>
            <input type="text" name="adress" id="adress" value="{{old('adress')}}">
            <br>

            <label for="phone">Phone:</label>
            <input type="phone" name="phone" id="phone" value="{{old('phone')}}">
            <br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{old('email')}}">
            <br>

            <label for="schedule">Schedule:</label>
            <input type="schedule" name="schedule" id="schedule">
            <br>

            <label for="country_id">País:</label>
            <select name="country_id" id="country_id">
                <option value="0">Choose an option</option>
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}" @if ($country->id == old('country_id')) selected @endif  > {{ $country->name}}</option>
                @endforeach
            </select>
            <br>

            <input type="submit" value="Crear" class="btn btn-success">
        </form>

    </div>


@endsection
