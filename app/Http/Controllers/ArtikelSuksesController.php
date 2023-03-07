<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelSuksesController extends Controller
{
    public function artikelsukses(){
        return view('user_login.artikel-sukses');
    }
}
