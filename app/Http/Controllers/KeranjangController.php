<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    function index(){
        return view('components.keranjang', [
            'title'=> 'Keranjang | Rimbun.id - Toko Tanaman Online',
        ]);
    }
}
