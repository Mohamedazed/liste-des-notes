<?php

use App\Http\Controllers\noteControlleur;
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
    return view('welcome');
});


Route::get('/notes', [noteControlleur::class, 'index'])->name('notes.index');
Route::get('/notes/show', [noteControlleur::class, 'show'])->name('notes.show');
Route::get('/notes/statistiques', [noteControlleur::class, 'statistique'])->name('notes.statistique');


Route::get('/contact',[noteControlleur::class, 'index2'])->name('contact');
Route::get('/home',[noteControlleur::class, 'index1'])->name('home');


