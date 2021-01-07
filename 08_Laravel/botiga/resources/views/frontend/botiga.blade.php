@extends('layouts.base')

@section('contingut')

    <div class="title m-b-md">
        @if($botiga)
            {{$botiga->name}}
        @endif

    </div>

    <div class="content">
        @if($botiga)
            <p>{{$botiga->adress}}</p>
            <p>{{$botiga->phone}}</p>
            <p>{{$botiga->email}}</p>
            <p>{{$botiga->shedule}}</p>
        @endif

    </div>


@endsection
