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
        $postingan = postingan::where('status', 'setuju')->where('kategori_id', '1')->get();
        return view('user_login.cerpen',['postingan'=>$postingan]);
        }

    public function artikel(){
        $artikel = postingan::where('status', 'setuju')->get();
        return view('user_login.artikel',['artikel'=>$artikel]);
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
        $makalah = postingan::where('status', 'setuju')->where('kategori_id', '7')->get();
        return view('user_login.makalah',['makalah'=>$makalah]);
        }
     public function searchmakalah(Request $request)
        {
            $keyword = $request->search;
            $makalah = postingan ::where('judul', 'like', "%" . $keyword . "%")->paginate(5);
            return view('user_login.makalah', compact('makalah'))->with('i', (request()->input('page', 1) - 1) * 5);
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
        $user = auth()->user();
        $postingan = postingan::where('user_id', Auth()->user()->id)->get();
     
    return view('user_login.user-page',compact('user'), ['postingan'=>$postingan]);
    }
   
    public function artikelsukses(){
    return view('user_login.artikel-sukses',['artikel-sukses']);
    }
   
    public function cerpenbaik($id){
        $postingan = postingan::find($id);  
        // $postingan = postingan::where('id', $data )->get();
    return view('user_login.cerpen-baik', compact('postingan'));
    }  
   
    public function puisipertiwi(){
    return view('user_login.puisi-pertiwi',['puisi-pertiwi']);
    }
   
    public function diary1($id){
        $postingan = postingan::find($id);
    return view('user_login.diary-1', compact('postingan'));
    }
   
    public function fotografi1(){
    return view('user_login.fotografi-1',['fotografi-1']);
    }
   
    public function ilustrasi1(){
    return view('user_login.ilustrasi-1',['ilustrasi-1']);
    }
   
    public function makalahdetail($id){
     $kategori = postingan::find($id);  
        // $postingan = postingan::where('id', $data )->get();
    return view('user_login.makalah-detail', compact('makalahr'));
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
    // $user = User::find(Auth()->User()->id);
    $user = auth()->user();
    return view('user_login.prf', compact('user'));
    // return view('user_login.prf',['user'=>$user]);
    }
   
    public function makalahpkn(){
    return view('user_login.makalah-pkn',['makalah-pkn']);
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $postingan = postingan ::where('judul', 'like', "%" . $keyword . "%")->paginate(5);
        return view('user_login.cerpen', compact('postingan'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
}
?>