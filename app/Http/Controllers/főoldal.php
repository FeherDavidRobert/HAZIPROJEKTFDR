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

    public function RÖGZÍTÉS(){

        
    }
}
