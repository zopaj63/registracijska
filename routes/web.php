<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KorisnikController;

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

Route::get('/home', function () {
    return view('welcome');
})->name("home");

Route::resource("korisniks", KorisnikController::class);

Route::get("/register", [KorisnikController::class, "prikaziRegistraciju"])->name("register");
Route::post("/register",  [KorisnikController::class, "register"]);

/*
Route::get("/register", function() {
    if (auth()->check())
    {
        return redirect()->to("/stranica");
    }


});
*/
