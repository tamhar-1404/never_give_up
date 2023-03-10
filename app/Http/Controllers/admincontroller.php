<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kontak;
use App\Models\Cerpen;
use App\Models\Postingan;

class AdminController extends Controller
{
    public function indexadmin()
    {
        return view('admin.index');

    }
    public function data_user()
    {
        $user = user::where('role', 'user')->get();

         return view('admin.Data-user',['user'=>$user]);

    }
    public function cerpen_admin()
    {
        $postingan = postingan::where('status', 'pandding')->where('kategori_id', '1')->get();

         return view('admin.cerpen',['postingan'=>$postingan]);

    }

    public function pesan()
    {
        $kontak = kontak::all();
        return view('admin/pesan-dari-user',['kontak'=>$kontak]);
        
    }
    public function uprove($id){    
        
        $postingan = postingan::find($id);
        if($postingan->status == 'pandding'){
            $postingan->status = 'setuju';   
            $postingan->save();
        }
       
        return redirect('/cerpen_admin');
    
    }
}
?>