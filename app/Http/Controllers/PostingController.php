<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Multi_img;
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
            'foto'=>'mimes:jpg,png'
        ]);
        
        $gambar = new multi_img;
        $postingan = new postingan;
        if($request->hasFile('foto')){
            $type = $request->file('foto')->getClientOriginalExtension();
            $filename = time().'.'.$type;
            $request->file('foto')->move('asset/',$filename);
            $postingan->foto = $filename;
        }else{
            $postingan->foto='default.jpg';
        }

        $postingan->user_id = $request->default;
        $postingan->judul = $request->judul;
        $postingan->isi = $request-> isi;
        $postingan->kategori_id = $request-> kategori;
        $postingan->save();

        
        if($request->hasFile('filename')){
           
            $nomer = 1;
            foreach ($request->file('filename') as $filename) {
                $namafile = hash('sha256', time()) . '.' . $nomer . $filename->getClientOriginalExtension();
                $path = $filename->store('filename');
                $filename->move('filename/', $namafile);
                $multi_img = multi_img::create([
                    'postingan_id' => $postingan->id,
                    'gambar' => $filename,
                ]);
                $nomer++;
            }
            $postingan->foto = 'default.jpg';
            $postingan->save();
        }
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
