<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cerpen;
use App\Models\User;
class CerpenController extends Controller
{
    //admin
    public function admin_cerpen(){
        
        $cerpen = cerpen::where('status', 'pandding')->get();

        return view('admin.cerpen',['cerpen'=>$cerpen]);
    
    }
    public function uprove($id){    
        
        $cerpen = cerpen::find($id);
        if($cerpen->status == 'pandding'){
            $cerpen->status = 'setuju';   
            $cerpen->save();
        }
       
        return redirect('/cerpen_admin');
    
    }
    //endadmin
    // user
    public function cerpen(){
        
        $cerpen = cerpen::where('status', 'setuju')->get();

        return view('user_login.cerpen',['cerpen'=>$cerpen]);
    
    }
   
    public function create_cerpen(){
        $user = user::all();
        return view ('user_login/create/create_cerpen', ['user'=>$user]);
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
