<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kontak;
use App\Models\Cerpen;

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
        $cerpen = cerpen::where('status', 'pandding')->get();

         return view('admin.cerpen',['cerpen'=>$cerpen]);

    }

    public function pesan()
    {
        $kontak = kontak::all();
        return view('admin/pesan-dari-user',['kontak'=>$kontak]);
        
    }
}
?>