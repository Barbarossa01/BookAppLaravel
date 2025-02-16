<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PodstawowyKontroler;

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
    return view('/welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dodaj_ksiazke', [PodstawowyKontroler::class, 'zwrocDodajKsiazke'])->middleware('auth');
Route::post('/dodaj_ksiazke', [PodstawowyKontroler::class, 'dodajKsiazke'])->name('ksiazki.dodaj.submit');
Route::get('/dodaj_kategorie', [PodstawowyKontroler::class, 'zwrocDodajKategorie'])->middleware('auth');
Route::post('/dodaj_kategorie', [PodstawowyKontroler::class, 'dodajKategorie'])->name('kategorie.dodaj.submit');
Route::get('/dodaj_wydawnictwo', [PodstawowyKontroler::class, 'zwrocDodajWydawnictwo'])->middleware('auth');
Route::post('/dodaj_wydawnictwo', [PodstawowyKontroler::class, 'dodajWydawnictwo']);

Route::get('/ksiazka/edytuj/{id}', [PodstawowyKontroler::class, 'zwrocEdytujKsiazke'])->name('ksiazka.edytuj');
Route::post('/ksiazka/edytuj/{id}', [PodstawowyKontroler::class, 'edytujKsiazke'])->name('ksiazka.edytuj.submit');


Route::get('/kategoria/edytuj/{id}', [PodstawowyKontroler::class, 'zwrocEdytujKategorie'])->name('kategoria.edytuj');
Route::post('/kategoria/edytuj/{id}', [PodstawowyKontroler::class, 'edytujKategorie'])->name('kategoria.edytuj.submit');


Route::get('/wydawnictwo/edytuj/{id}', [PodstawowyKontroler::class, 'zwrocEdytujWydawnictwo'])->name('wydawnictwo.edytuj');
Route::post('/wydawnictwo/edytuj/{id}', [PodstawowyKontroler::class, 'edytujWydawnictwo'])->name('wydawnictwo.edytuj.submit');

Route::get('/usun_ksiazki/{id}', [PodstawowyKontroler::class, 'usunKsiazke'])->name('ksiazki.usun');

Route::get('/usun_kategorie/{id}', [PodstawowyKontroler::class, 'usunKategorie'])->name('kategorie.usun');
Route::get('/usun_wydawnictwa/{id}', [PodstawowyKontroler::class, 'usunWydawnictwo'])->name('wydawnictwa.usun');

});


Route::get('/welcome', [PodstawowyKontroler::class, 'zwrocStroneDomowa'])->name('home');

Route::get('/ksiazki', [PodstawowyKontroler::class, 'zwrocListeKsiazek'])->name('ksiazki');

Route::get('/kategorie', [PodstawowyKontroler::class, 'zwrocListeKategorii'])->name('kategorie');




Route::get('/wydawnictwa', [PodstawowyKontroler::class, 'zwrocListeWydawnictw'])->name('wydawnictwa');
Route::post('/logout', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])->name('logout');


Route::get('/logowanie/sukces', function () {
    return view('logowanie.sukces');
});




require __DIR__.'/auth.php';
