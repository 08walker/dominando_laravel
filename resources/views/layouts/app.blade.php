<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="David">
	<title>Document</title>

  	@yield('meta')
    @stack('styles')

</head>
<body>
	<h1>Home</h1>
    <header>
        <nav>
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('saludo')}}">Saludo</a>
            <a href="{{route('contactos')}}">Contactos</a>
        </nav>
    </header>

    @yield('content')

	<footer>
		Copyrigth {{date('Y')}}
	</footer>
</body>
	
  	@stack('scripts')

</html>