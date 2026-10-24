<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangController extends Controller
{
    function index(){
        return view('components.tentang', [
            'title'=> 'Tentang | Rimbun.id - Toko Tanaman Online',
        ]);
    }
}
