@extends('layouts.admin')

@section('titol')
    Productes

@endsection

@section('contingut')

    <div class="content col-12">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Codi producte</th>
                    <th>Nom producte</th>
                    <th>Categoria</th>

                </tr>
            </thead>

                @foreach ($productes as $producte)
                    <tr>
                        <td>{{$producte->id}}</td>
                        <td>{{$producte->name}}</td>
                        <td>
                            @if($producte->category){{$producte->category->name}}</td>
                            @endif
                    </tr>

                @endforeach

        </table>

    </div>


@endsection
