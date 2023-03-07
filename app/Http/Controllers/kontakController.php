<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\kontak;

class kontakController extends Controller
{
    public function kontak(){
        $kontak = kontak::all();
        return view('user_login/kontak',['kontak'=>$kontak]);
    }
    public function pesan_user(Request $request)
    {
        $kontak = kontak::create([
            'username' => $request->name,
            'email' => $request->email,
            'alasan'=> $request->alasan
        ]);
        return redirect('/kontak');
    }


}
