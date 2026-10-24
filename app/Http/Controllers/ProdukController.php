<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    function index(){
        return view('components.produk', [
            'title'=> 'Produk | Rimbun.id - Toko Tanaman Online',
        ]);
    }
}
