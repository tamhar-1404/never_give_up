<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kontak;
use App\Models\Cerpen;
use App\Models\Postingan;
use App\Models\Kategori;

class AdminController extends Controller
{
    public function indexadmin()
    {
             
        $user = User::where('role', 'user')->count();
        $semua = postingan::count();
        $setuju = postingan::where('status', 'setuju')->count();
        $postingan = postingan::where('status', 'pandding')->count();
        $posting =postingan::where('status', 'pandding')->get();

        return view('admin.index', ['user'=>$user,'semua'=>$semua,'setuju'=>$setuju,'postingan'=>$postingan, 'posting'=>$posting] );


    }
    public function data_user()
    {
        $user = user::where('role', 'user')->get();

         return view('admin.Data-user',['user'=>$user]);

    }

    public function data_blokir()
    {
        $user = user::where('role', 'diblokir')->get();

         return view('admin.akun_blokir',['user'=>$user]);

    }

    public function delete($id)
    {
        $user=user::find($id);
        $user->delete();
        return redirect()->back();
    }
    
    public function uprove($id)
    {
         
        
        $posting = postingan::find($id);
        if($posting->status == 'pandding'){
            $posting->status = 'setuju';   
            $posting->save();
        }
       
        return redirect('/admin');
    
   
    }

    public function tolak($id)
    {
         
        
        $posting = postingan::find($id);
        if($posting->status == 'pandding'){
            $posting->status = 'tolak';   
            $posting->save();
        }
       
        return redirect('/admin');
    
   
    }



    public function pesan()
    {
        $kontak = kontak::all();
        return view('admin/pesan-dari-user',['kontak'=>$kontak]);
        
    }

    public function pulihkan($id)
    {
         
        
        $user = user::find($id);
        if($user->role== 'diblokir'){
            $user->role= 'user';   
            $user->save();
        }
       
        return redirect()->back();
    
   
    }

    public function akun_blokir($id)
    {
         
        
        $user = user::find($id);
        if($user->role== 'user'){
            $user->role= 'diblokir';   
            $user->save();
        }
       
        return redirect()->back();
    
   
    }

    public function cerpen_admin()
    {
        $posting = postingan::where('kategori_id', '1')->get();
        
        return view('admin.cerpen',['postingan'=>$posting]);
    }

    public function artikel_admin()
    {
        $posting = postingan::where('kategori_id', '2')->get();
        
        return view('admin.artikel',['postingan'=>$posting]);
    }

    public function pantun_admin()
    {
        $posting = postingan::where('kategori_id', '3')->get();
        
        return view('admin.pantun',['postingan'=>$posting]);
    }

    public function skripsi_admin()
    {
        $posting = postingan::where('kategori_id', '4')->get();
        
        return view('admin.skripsi',['postingan'=>$posting]);
    }

    public function puisi_admin()
    {
        $posting = postingan::where('kategori_id', '4')->get();
        
        return view('admin.puisi',['postingan'=>$posting]);
    }
}
?>