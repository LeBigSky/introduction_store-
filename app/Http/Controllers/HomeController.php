<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $eleves = Eleve::all();
        return view('home', compact('eleves'));
    }
}
