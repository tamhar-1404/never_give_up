<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\makalah;

class MakalahController extends Controller
{
    public function makalah(){
        $makalah = makalah::all();
        return view ('keuangan/makalah', ['makalah'=>$makalah]);
    }
    

}
