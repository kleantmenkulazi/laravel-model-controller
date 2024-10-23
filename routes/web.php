<?php

use Illuminate\Support\Facades\Route;

// Models
use App\Models\Movie;

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
    $movies = Movie::all();
    dd($movies);
    
    return view('welcome', compact('movies'));

    // return view('welcome', [
    //      'movies' => $movies
    // ]);
    
});

