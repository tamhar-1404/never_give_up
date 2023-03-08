<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //admiin 
    public function user()
    {
       return view('user_login.index04b9');
    }

    public function index()
    {
       return view('user_guest.index04b9');
    }
  
    public function lihat_register()
    {
        return view('user_guest.register');
    }

    public function lihat_login()
    {
        return view('user_guest.sing-page');
    }
    public function login(Request $request){
        // $this->validate($request, [
        //     'email' => 'required|exists:users,email',
        //     'password' => 'required|min:6',
        // ],[
        //     'email.required' => 'Masukkan Email Anda !!',
        //     'email.exists' => 'Email Yang Anda Masukkan Belum Terdaftar !!',
        //     'password.required' => 'Masukkan Kata Sandi Anda !!',
        //     'password.min' => 'Password Minimal 6 Huruf !!',
        // ]);
        // toastr()->success('Berhasil Login!');

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'Admin'])) {
            return redirect('/admin');
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'user'])) {
            return redirect('/user-login');
        }
        

            return redirect('/sing-page')->with('password','Password Salah');

    }

<<<<<<< Updated upstream
=======
   

>>>>>>> Stashed changes
    public function register(Request $request)
    {
    // $this->validate($request, [
    //     'username' => 'required|string|max:255',
    //     'email' => 'required|string|email|max:255|unique:users',
    //     'password' => 'required|string|min:8|confirmed',
    //     'foto' => 'required|string'
    // ]);
        $user = User::create([
            'username' => $request->name,
            'email' => $request-> email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
            'foto' => $request->foto,
            'role' => 'User',
        
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('asset/', $request->file('foto')->getClientOriginalName());
            $user->foto = $request->file('foto')->getClientOriginalName();
            
        }$user->save();
        
        return redirect('/');

    
    }
}