<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function home(){
        $eleves = Eleve::all();
        return view('home', compact('eleves'));
    }
    public function store(Request $request){

        $store= new Eleve();
        $store->name = $request->name;
        $store->metier = $request->metier;
        $store->age = $request->age;

        $store->save();
        return redirect()->back();
    }
    public function crea(){
        $eleves = Eleve::all();
        return view('pages/creation', compact('eleves'));
    }
}
