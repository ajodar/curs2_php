@extends('layouts.base')

@section('contingut')

    <div class="title m-b-md">
        LES NOSTRES BOTIGUES
    </div>

    <div class="content" style="text-align: left">

        @foreach ($countries as $country)
            <p>{{$country->name}}:</p>
                <ul>

                    @foreach($country->shops as $shop)
                        <li><a href="{{route('botiga',['id'=>$shop->id])}}">{{$shop->name}}</a> </li>
                    @endforeach

                </ul>


        @endforeach




    </div>


@endsection

