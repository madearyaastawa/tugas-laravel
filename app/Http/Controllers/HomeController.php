<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view('components.landing-page', [
            'title'=> 'Beranda | Rimbun.id - Toko Tanaman Online',
        ]);
    }
}
