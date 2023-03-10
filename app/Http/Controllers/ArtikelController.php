<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
class ArtikelController extends Controller
{
    public function artikel(){
        $artikel = artikel::all();
        return view ('user_login/artikel', ['artikel'=>$artikel]);
    }
    public function create_artikel(){
        $artikel = artikel::all();
        return view ('user_login/create/create_artikel', ['artikel'=>$artikel]);
    }
    public function admin_artikel(){
        
        $artikel = artikel::where('status', 'pandding')->get();

        return view('admin.artikel',['artikel'=>$artikel]);
    
    }

    public function simpan_artikel(Request $request){
       
        $artikel = new artikel;
        if($request->hasFile('foto_profil')){
            $request->file('foto_profil')->move('asset/',$request->file('foto_profil')->getClientOriginalName());
            $artikel->foto_profil=$request->file('foto_profil')->getClientOriginalName();
        }
        if($request->hasFile('foto')){
            $request->file('foto')->move('asset/',$request->file('foto')->getClientOriginalName());
            $artikel->foto=$request->file('foto')->getClientOriginalName();
        }
        
        
        $artikel->nama = $request->nama;
        $artikel->judul_ar = $request->judul;
        $artikel->isi_ar = $request-> isi;
        $artikel->save();
        return redirect('/artikel');
    }

}
