<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelUser;

class User extends Controller
{
    //
    public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('user');
        }
    }

    public function login(){
        return view('login');
    }

    public function loginPost(Request $request){

        $email = $request->email;
        $password = $request->password;

        $data = ModelUser::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('home_user');
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salah!');
        }
    }


    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','Kamu sudah logout');
    }

    public function register(Request $request){
        return view('register');
    }

    public function registerPost(Request $request){
        $this->validate($request, [
            'username' => 'required|min:4',
            'email' => 'required|min:4|email|unique:userss',
            'password' =>'required',
            'foto' => 'required|mimes:jpg,png,jpeg',
    
        ],[
            'username.required' => 'Nama Harus Diisi',
            'email.required' => 'email Harus Diisi',
        ]);

        $data =  new ModelUser();
        $data->username = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->konfirmasi_password = $request->konfirmasi_password;
        // $data->remember_token =Str::random(60);
        $data->foto =$request->foto;
        $data->role = User;

        if($request->hasFile('foto')){
            $request->file('foto')->move('asset/', $request->file('foto')->getClientOriginalName());
            $user->foto = $request->file('foto')->getClientOriginalName();
            
        }
        $data->save();
        return redirect('login')->with('alert-success','Kamu berhasil Register');
    }


    public function likePost(Post $post)
{
    $post->likes()->create([
        'user_id' => auth()->user()->id,
    ]);

    return back();
}

}
