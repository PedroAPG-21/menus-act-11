<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}" class="{{ request()->is('/') ? 'active' : '' }}">Casa</a></li>
            <li><a href="{{ route('photos') }}" class="{{ request()->is('photos') ? 'active' : '' }}">Fotos</a></li>
            <li><a href="{{ route('contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contacto</a></li>
        </ul>
    </nav>

    <h1>Galería de Fotos</h1>
    <p>Este es el contenido de la sección Fotos.</p>

    <footer>
        <p>Actividad realizada por [Tu nombre]</p>
    </footer>
</body>
</html>
