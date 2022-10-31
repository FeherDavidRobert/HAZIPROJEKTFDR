<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class főoldal extends Controller
{
    public function FŐOLDAL(){

        $hazifdr=DB::select("SELECT * FROM hazifdr");

        return view("fooldal");
    }

    public function RÖGZÍTÉS(Request $req){

        return view("fooldal");

        $req->validate(
            [
                    "vezeteknev"=>"required|min:1|max:20",
                    "keresztnev"=>"required|min:1|max:20",
                    "szuletesiev"=>"required"
            ],
            [
                "vezeteknev.required"=>"A mező kitöltése kötelező",
                "vezeteknev.min"=>"Minimum 1 karakter",
                "vezeteknev.max"=>"Maximum 20 karakter",
                "keresztnev.required"=>"A mező kitöltése kötelező",
                "keresztnev.min"=>"Minimum 1 karakter",
                "keresztnev.max"=>"Maximum 20 karakter",
                "szuletesiev.required"=>"A mező kitöltése kötelező",
            ]

        )
    }
}
