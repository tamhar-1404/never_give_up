<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function diary(){
        return view('user_login.diary');
    }
}
