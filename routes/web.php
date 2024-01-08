<?php

use Illuminate\Support\Facades\Route;

/**
 * * Route For Authentication
 */


Route::prefix('auth')->group(function () {
    Route::get('login', App\Livewire\Pages\Authentication\Login::class)->name('auth/login');
    Route::get('register', App\Livewire\Pages\Authentication\Register::class);
    Route::get('email_confirmation', App\Livewire\Pages\Authentication\EmailConfirmaation::class);

});

Route::middleware(['token.auth'])->group(function () {
    Route::get('/dashboard', App\Livewire\Pages\Dashboard\Dashboard::class);
});



Route::get('/', App\Livewire\Pages\Authentication\SelectApplication::class);
// Route::get('/application_unit/{unit}', App\Livewire\Pages\Landing\Page::class);





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

// Route::get('/', function () {
//     return view('welcome');
// });
