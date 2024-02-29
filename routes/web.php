<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', ['as'=>'home', function(){
	return view('home');
	//return "Hola desde la página de inicio";
}]);

Route::get('contacto', ['as' => 'contactos', function(){
	return "Hola desde la página de contacto";
}]);

Route::get('saludos/{nombre?}', ['as'=>'saludo',function($nombre = "Invitado"){
	// return "Saludos $nombre";
	// return view('saludo',['nombre'=>$nombre]);
	// return view('saludo')->with(['nombre'=>$nombre]);
	return view('saludo',compact('nombre'));
}])->where('nombre', "[A-Za-z]+");
