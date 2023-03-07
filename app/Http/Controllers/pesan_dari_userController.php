<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan_dari_user;

class pesan_dari_userController extends Controller
{
    public function hapus_kontak($id){
        $data=pesan_dari_user::all();
        $data->delete();

        
        return redirect('/pesan-dari-user');
    }
}
