<?php

use Illuminate\Support\Facades\Route;

/**
 * * Route For Authentication
 */
use App\Livewire\Pages\Authentication\Login;
use App\Livewire\Pages\Authentication\Register;


Route::get('/login', Login::class);
Route::get('/register', Register::class);


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
    return view('welcome');
});
