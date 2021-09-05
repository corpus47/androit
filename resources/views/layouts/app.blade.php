<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>AndroIT próbafeladat</title>

        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </head>
    <body class="bg-gray-200">
        <nav class="p-6 bg-white flex justify-between mb-6">
            <ul class="flex items-center">
                <li>
                    <a href="/" class="p-3">Kezdőlap</a>
                </li>
                <li>
                    <a href="{{ route('dashboard')  }}" class="p-3">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('student') }}" class="p-3">Students</a>
                </li>
            </ul>
            <ul class="flex items-center">
                @auth
                    <li>
                        <a href="" class="p-3">{{ auth()->user()->name }}</a>
                    </li>
                    <li>
                        <form class="p-3 inline" action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" >Kilépés</button>
                        </form>
                    </li>
                @endauth
                @guest
                    <li>
                        <a href="{{ route('login') }}" class="p-3">Belépés</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="p-3">Regisztráció</a>
                    </li>
                @endguest
            </ul>
        </nav>
        @yield('content')
    </body>
</html>
