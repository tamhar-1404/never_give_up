<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Postingan;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        $this->validate($request, [
            'email' => 'required|exists:users',
            'password' => 'required',
        ]);
        // toastr()->success('Berhasil Login!');

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'Admin'])) {
            return redirect('/admin');
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'user'])) {
            return redirect('/user-login');
        }
        

        return redirect()->back()->withErrors(['msg' => 'emai atau password, silakan coba lagi']);
    }


    public function register(Request $request)
    {
    $this->validate($request, [
        'email' => 'required|unique:users',
        'username' => 'required|unique:users',
        'password' => 'required|confirmed',
    ]);
        $user = User::create([
            'username' => $request->username,
            'email' => $request-> email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
            
            'role' => 'User',
        
        ]);
        // if($request->hasFile('foto')){
            // unlink(public_path('fotopromo/ .$'))
            // Storage::delete('foto');
            // $request->file('foto')->store('foto', 'public')

            
            // $type = $request->file('foto')->getClientOriginalExtension();
            // $filename = time().'.'.$type;
            // $request->file('foto')->move('foto/',$filename);
            // $user->foto = $filename;
            
        // }
        $user->save();
        
        return redirect('/sing-page');

    
    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/sing-page');
    }

    // public function prf($id){
       
    //     $data = Prf::find($id);
    //     return view('user_login.prf', compact('data'));
    // }

    public function upprof(Request $request)
    {
        
        $data = auth()->user();
        $this->validate($request, [
            'foto' => 'required|mimes:jpeg,png,jpg',
            'namalengkap' => 'required',
        ]);
        // dd($request);
        if($data -> foto != 'default.jpg'){
        Unlink('foto/'.$data->foto);
        };

        $type = $request->file('foto')->getClientOriginalExtension();
        $filename = time().'.'.$type;
        $request->file('foto')->move('foto/',$filename);
        $isi = [
            
      
            'email' => $request-> email,
            'namalengkap' => $request-> namalengkap,
            'notlp' => $request-> notlp,
            'medsos' => $request-> medsos,
            'tgllahir' => $request-> tgllahir,
            'askot' => $request-> askot,
            'foto' => $filename,
        ];
       
        
        $data->update($isi);
        // $data->save();
    

        return redirect()->back()->with('sukses','Data Berhasil di Perbarui');
    }
}