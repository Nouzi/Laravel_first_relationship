<?php

namespace App\Http\Controllers;

use App\Models\trieda;
use Illuminate\Http\Request;

class MainPanel extends Controller
{
    public function index()
    {
        $trieda = trieda::with('ludia')->get();
        
        return view('welcome', [ 'triedy' => $trieda ]);
    }




}
