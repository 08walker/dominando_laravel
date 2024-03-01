@extends('layouts.app')
@section('meta')
	<meta name="description" content="Pagina demo saludos">
	<meta name="keywords" content="Saludos">
@endsection
@section('content')
	<h1>Saludos para {{$nombre}}</h1>
	{{-- <h1>Saludos para <?php echo $nombre;?></h1> --}}
@stop