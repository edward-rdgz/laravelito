<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use \App\Note;

// Home
Route::get('/', function () {
    return view('welcome');
});

// Manda un array a la vista.
Route::get('notes', function () {
	$notes = Note::all();
	//dd($notes); // Helper
	return view('notes', compact('notes'));
});

// Crea una vista preliminar.
Route::get('notes/create', function () {
	return 
	//'[Create notes]'; // Devuelve la cadena de texto.
	['notes' => 'create']; // Devuelve un Json
});

// POST
Route::post('notes', function () {
	return 'Creating a note';
});

// Solo recibe números. Se comento para usar la variable $slug opcional.
/*Route::get('notes/{note}', function ($note) {
	return $note;
})->where('note', '[0-9]+');*/

// Recibe dos parametros.
Route::get('notes/{note}/{slug}', function ($note, $slug) {
	//return $note;
	dd($note,  $slug);

})->where('note', '[0-9]+');

// Recibe dos parametros, uno es opcional
Route::get('notes/{note}/{slug?}', function ($note, $slug =  null) {
	//return $note;
	dd($note,  $slug);

})->where('note', '[0-9]+');

