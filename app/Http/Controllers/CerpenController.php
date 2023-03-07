<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cerpen;
class CerpenController extends Controller
{
    public function cerpen(){
        
        $cerpen = cerpen::where('status', 'setuju')->get();

        return view('user_login.cerpen',['cerpen'=>$cerpen]);
    
    }
    public function create_cerpen(){
        $cerpen = cerpen::all();
        return view ('user_login/create/create_cerpen', ['cerpen'=>$cerpen]);
    }

    public function simpan_cerpen(Request $request){
       
        $cerpen = new cerpen;
        if($request->hasFile('foto_profil')){
            $request->file('foto_profil')->move('asset/',$request->file('foto_profil')->getClientOriginalName());
            $cerpen->foto_profil=$request->file('foto_profil')->getClientOriginalName();
        }
        if($request->hasFile('foto')){
            $request->file('foto')->move('asset/',$request->file('foto')->getClientOriginalName());
            $cerpen->foto=$request->file('foto')->getClientOriginalName();
        }
        
        
        $cerpen->nama = $request->nama;
        $cerpen->judul = $request->judul;
        $cerpen->isi = $request-> isi;
        $cerpen->save();
        return redirect('/cerpen');
    }


}
