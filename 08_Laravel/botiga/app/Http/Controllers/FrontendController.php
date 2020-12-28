<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Producte;

class FrontendController extends Controller
{
    //
    public function quisom(){
        $client = "aaaa";
        $producte = "bbb";
        return view('frontend.quisom', ['client'=> $client, 'producte'=> $producte]);
    }

    public function filosofia(){
        $client = "aaaa";
        $producte = "bbb";
        return view('frontend.filosofia', compact('client','producte'));
    }

    public function sostenibilitat(){
        $client = "aaaa";
        $producte = "bbb";
        return view('frontend.sostenibilitat')
            ->with('client', $client)
            ->with('producte', $producte);
    }

    public function equip(){
        return view('frontend.equip');
    }

    public function contacte(){
        return view('frontend.contacte');
    }
}
