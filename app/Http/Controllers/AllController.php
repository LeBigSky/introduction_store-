<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class AllController extends Controller
{
  
    public function store(Request $request){

        $store= new Eleve();
        $store->name = $request->name;
        $store->metier = $request->metier;
        $store->age = $request->age;

        $store->save();
        return redirect()->route('home');
    }
    public function crea(){
        $eleves = Eleve::all();
        return view('pages/creation', compact('eleves'));
    }
}
