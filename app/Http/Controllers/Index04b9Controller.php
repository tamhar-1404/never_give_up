<?php

namespace App\Http\Controllers;
use App\Models\Cerpen;
use App\Models\Postingan;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Http\Request;

class Index04b9Controller extends Controller
{
    public function user_login(){
        return view('user_login.index04b9');
        }
    public function cerpen(){
        $cerpen = cerpen::where('status', 'setuju')->get();
        return view('user_login.cerpen',['cerpen'=>$cerpen]);
        }

    public function artikel(){
        $artikel = postingan::where('status', 'setuju')->get();
        return view('user_login.artikel',['artikel'=>$artikel]);
    return view('user_login.artikel',['artikel']);
    }

    public function puisi(){
    return view('user_login.puisi',['puisi']);
    }
   
    public function diary(){
    return view('user_login.diary',['diary']);
    }
   
    public function photography(){
    return view('user_login.photography',['photography']);
    }
   
    public function ilustrasi(){
    return view('user_login.ilustrasi',['ilustrasi']);
    }
   
    public function makalah(){
    return view('user_login.makalah',['makalah']);
    }
   
    public function skripsi(){
    return view('user_login.skripsi',['skripsi']);
    }
   
    public function pantun(){
    return view('user_login.pantun',['pantun']);
    }
   
    public function essai(){
    return view('user_login.essai',['essai']);
    }
   
    public function ilmiah(){
    return view('user_login.ilmiah',['ilmiah']);
    }
   
    public function semua(){
    return view('user_login.semua',['semua']);
    }
   
    public function contact(){
    return view('user_login.contact',['contact']);
    }
   
    public function pilihkategori(){
        $kategori = kategori::all();
        return view('user_login.pilihkategori',['kategori'=>$kategori]);
    }

    public function kirim_kategori($id){
        $user = User::all();
        $kirim_kategori = $id;  
        $kategori = Kategori::find($id);
        return view ('user_login.create.create_cerpen', ['user'=>$user,'kategori'=>$kategori,'kirim_kategori'=>$kirim_kategori]);
    }
   
    public function userpage(){
    return view('user_login.user-page',['user-page']);
    }
   
    public function artikelsukses(){
    return view('user_login.artikel-sukses',['artikel-sukses']);
    }
   
    public function cerpenbaik(){
    return view('user_login.cerpen-baik',['cerpen-baik']);
    }
   
    public function puisipertiwi(){
    return view('user_login.puisi-pertiwi',['puisi-pertiwi']);
    }
   
    public function diary1(){
    return view('user_login.diary-1',['diary-1']);
    }
   
    public function fotografi1(){
    return view('user_login.fotografi-1',['fotografi-1']);
    }
   
    public function ilustrasi1(){
    return view('user_login.ilustrasi-1',['ilustrasi-1']);
    }
   
    public function makalahdetail(){
    return view('user_login.makalah-detail',['makalah-detail']);
    }
   
    public function skripsidetail(){
    return view('user_login.skripsi-detail',['skripsi-detail']);
    }
   
    public function ilmiahdetail(){
    return view('user_login.ilmiah-detail',['ilmiah-detail']);
    }
   
    public function pantun1(){
    return view('user_login.pantun-1',['pantun-1']);
    }
   
    public function essai1(){
    return view('user_login.essai-1',['essai-1']);
    }
   
    public function prf(){
    $user = User::find(Auth()->User()->id);
    return view('user_login.prf',['user'=>$user]);
    }
   
    public function makalahpkn(){
    return view('user_login.makalah-pkn',['makalah-pkn']);
    }
   
}
?>