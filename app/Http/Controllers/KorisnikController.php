<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Korisnik;
use Illuminate\Support\Facades\Hash; // za hashiranje lozinke

class KorisnikController extends Controller
{
    
    // forma za unos
    public function prikaziRegistraciju()
    {
        return view("register");
    }

    // obrada unosa i upis u bazu
    public function register( Request $request)
    {
        $request->validate( // prvo validacija podataka s unosa
            [
                "name"=>"required|string|max:100",
                "email"=>"required|string|max:100|unique:korisniks", //navesti tablicu u bazi
                "password"=>"required|string|min:8|confirmed"
            ]
            ); // ovo je zapravo $_POST s forme

            // upis u bazu
            Korisnik::create([
                "name"=>$request->name,
                "email"=>$request->email,
                "password"=>Hash::make($request->password)
            ]);

            return redirect()->route("home")->with("success", "Registracija uspješna!");
    }

}
