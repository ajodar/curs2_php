<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Si no m'envien titolPage posa'l + si no m'envien posa el valor per defecte (2n)
    --}}
    <title>@yield('titlePage', "La botigueta")</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }


        .links {
            position: absolute;
            top: 0px;
            left: 0px;
            padding: 20px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;


        }

        .contingut{
            margin-top: 100px;
        }
        .footer{
            position: absolute;
            bottom: 0px;
        }



    </style>
</head>

<body>


    <div class="container">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        @include('partials.menu_frontend')




        <div class="row contingut">

            <h1>@yield('titol')</h1>

            @yield('contingut')
        </div>

        <div class="footer">
            @include('partials.footer_frontend')

        </div>
    </div>
</body>

</html>
