<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\User;

use App\Models\Postingan;

class PostingController extends Controller
{
    public function posting(){
        $user = User::all();
        $kategori = Kategori::all();
        return view ('user_login.create.create_cerpen', ['user'=>$user], ['kategori'=>$kategori]);
    }

    public function simpan_postingan(Request $request){
        $request->validate([
            'foto'=>'required|mimes:jpg,png'
        ]);
        $postingan = new postingan;
        if($request->hasFile('foto')){
            $request->file('foto')->move('asset/',$request->file('foto')->getClientOriginalName());
            $postingan->foto=$request->file('foto')->getClientOriginalName();
        }
        $postingan->user_id = $request->default;
        $postingan->judul = $request->judul;
        $postingan->isi = $request-> isi;
        $postingan->kategori_id = $request-> kategori;
        $postingan->save();
        return redirect('/user-login');
    }
    public function search(Request $request)
    {
        $keyword = $request->search;
        $postingan = postingan ::where('judul', 'like', "%" . $keyword . "%")->paginate(5);
        return view('user_login.cerpen', compact('postingan'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function searchmakalah(Request $request)
    {
        $keyword = $request->search;
        $postingan = postingan ::where('judul', 'like', "%" . $keyword . "%")->paginate(5);
        return view('user_login.makalah', compact('postingan'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
