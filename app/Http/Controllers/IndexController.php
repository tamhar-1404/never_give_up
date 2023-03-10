<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function contact(){
        return view('user_login.contact');
        }

    public function pilihkategori(){
        return view('user_login.pilihkategori');
        }

    public function postingartikel(){
        return view('user_login.postingartikel');
        }

    public function userpage(){
        return view('user_login.userpage');
        }
}
