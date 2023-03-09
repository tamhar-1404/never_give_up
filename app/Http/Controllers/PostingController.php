<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modals\Kategori;
use App\Modals\User;
use App\Modals\Postingan;
class PostingController extends Controller
{
    public function posting(){
        $user = User::all();
        return view ('user_login.create.create_cerpen', ['user'=>$user]);
    }

    public function simpan_cerpen(Request $request){
        $cerpen = new cerpen;
        if($request->hasFile('foto')){
            $request->file('foto')->move('asset/',$request->file('foto')->getClientOriginalName());
            $cerpen->foto=$request->file('foto')->getClientOriginalName();
        }
        $cerpen->user_id = $request->default;
        $cerpen->judul = $request->judul;
        $cerpen->isi = $request-> isi;
        $cerpen->save();
        return redirect('/cerpen');
    }
}
