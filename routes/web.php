<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $comics = config('comics');
    
    


    return view('welcome', compact('comics'));
    // return view('welcome', compact('firstName', 'lastName'));
});




Route::get('/chi-siamo', function () {
    $comics = config('comics');
    $comicIndex = $_GET['id'];

    $comic = $comics[$comicIndex];


    return view('subpages.about', compact('comic'));
})->name('comics.show');

// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)
