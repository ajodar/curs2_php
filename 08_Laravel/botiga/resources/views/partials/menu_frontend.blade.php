<div class="links">
    {{-- <a href="{{ route('quisom') }}">QUI SOM?</a>
    <a href="{{ route('filosofia') }}">Filosofia</a>
    <a href="{{ route('sostenibilitat') }}">Sostenibilitat</a>
    <a href="{{ route('equip') }}">Equip</a>
    <a href="{{ route('contacte') }}">Contacte</a> --}}

    <a href="{{route('productes')}}">Productes</a>

    <a href="{{ route('categoria', ['id'=>1]) }}">Alimentació</a>
    <a href="{{ route('categoria', ['id'=>2]) }}">Begudes</a>

    <a href="{{ route('botigues') }}">Botigues</a>

    {{-- Gestors --}}
    <a href="{{ route('categories.index') }}">Gestor de categories</a>

    <a href="{{ route('shops.index')}}">Gestor de botigues</a>

    <a href="{{ route('employees.index')}}">Gestor d'empleats</a>

</div>
