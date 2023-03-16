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
    public function delete($id)
    {
        $user=user::find($id);
        $user->delete();
        return redirect('/data-user');  
    }
}
?>