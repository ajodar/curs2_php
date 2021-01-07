@extends('layouts.admin')

@section('titlePage')
    Gestor de botigues
@endsection

@section('titol')
    Botigues
    <a href="{{ route('shops.create') }}" class="btn btn-primary float-right">AFEGIR BOTIGA</a>
@endsection

@section('contingut')

    <div class="content col-12">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nom botiga</th>
                    <th>Pais</th>
                    <th>Accions</th>
                </tr>
            </thead>

                @foreach ($shops as $shop)
                    <tr>
                        <td>{{$shop->name}}</td>
                        <td>{{$shop->country->name}}</td>
                        <td>
                            <a href="{{route('shops.edit', ['shop'=>$shop->id])}}" class="btn btn-info">Editar</a>

                            @if (is_null($shop->deleted_at))
                                <form action="{{route('shops.destroy', ['shop'=>$shop->id])}}" method="POST" style="display:inline">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="submit" value="Eliminar" class="btn btn-danger">
                                </form>
                            @else
                                <a href="{{route('shops.restore',['shop'=>$shop->id])}}" class="btn btn-success">Recuperar</a>
                            @endif


                        </td>
                    </tr>

                @endforeach

        </table>

    </div>


@endsection
