<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Personas en Laravel</title>
        <style>
        .error { color: #a01818; }
        .exito { color: #14613e; }
        </style>
    </head>
    <body>
        <main>
            @auth
                <p>Sesión de {{ auth()->user()->user }}</p>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Cerrar sesión</button>
                </form>
            @endauth
            @if (session('exito'))
                <p class="exito">{{ session('exito') }}</p>
            @endif
            @if ($errors->any())
                <ul class="error">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            @yield('contenido')
        </main>
    </body>
</html>