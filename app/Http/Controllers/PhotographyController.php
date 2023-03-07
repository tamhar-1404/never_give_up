<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotographyController extends Controller
{
    public function photography(){
        return view('user_login.photography');
    }
}
