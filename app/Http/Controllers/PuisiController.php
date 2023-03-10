<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PuisiController extends Controller
{
     //admin
     public function admin_puisi(){
        
        $puisi = puisi::where('status', 'pandding')->get();

        return view('admin.puisi',['puisi'=>$puisi]);
    
    }
    // public function uprove($id){    
        
    //     $puisi = puisi::find($id);
    //     if($puisi->status == 'pandding'){
    //         $puisi->status = 'setuju';   
    //         $puisi->save();
    //     }
       
    //     return redirect('/puisi_admin');
    
    // }
    //endadmin
    // user
    public function puisi(){
        $puisi = puisi::where('kategori_id', '1');
        $puisi = puisi::where('status', 'setuju')->get();

        return view('user_login.puisi',['puisi'=>$puisi]);
    
    }
   
    public function create_puisi(){
        $user = user::all();
        return view ('user_login.create.create_puisi', ['user'=>$user]);
    }

    public function simpan_puisi(Request $request){
        $puisi = new puisi;
        if($request->hasFile('foto')){
            $request->file('foto')->move('asset/',$request->file('foto')->getClientOriginalName());
            $puisi->foto=$request->file('foto')->getClientOriginalName();
        }
        $puisi->user_id = $request->default;
        $puisi->judul = $request->judul;
        $puisi->isi = $request-> isi;
        $puisi->save();
        return redirect('/puisi');
    }


}
