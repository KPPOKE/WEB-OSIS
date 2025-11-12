<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eskul;

class EskulController extends Controller
{
    public function index()
    {
     $eskuls = Eskul::all(); // ambil data
        return view('eskul', [
            'title'  => 'Ekskul',   
            'eskuls' => $eskuls,
        ]);
    }
}
