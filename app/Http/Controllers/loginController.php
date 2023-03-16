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
        // $this->validate($request, [
        //     'email' => 'required|exists:email',
        //     'password' => 'required|min:8',
        // ],[
        //     'email.required' => 'Masukkan Email Anda !!',
        //     'email.exists' => 'Email Yang Anda Masukkan Belum Terdaftar !!',
        //     'password.required' => 'Masukkan Kata Sandi Anda !!',
        //     'password.min' => 'Password Minimal 8 Huruf !!',
        // ]);
        // toastr()->success('Berhasil Login!');

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'Admin'])) {
            return redirect('/admin');
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'user'])) {
            return redirect('/user-login');
        }
        

            return redirect('/sing-page');

    }


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
            // unlink(public_path('fotopromo/ .$'))
            // Storage::delete('foto');
            // $request->file('foto')->store('foto', 'public');
            $request->file('foto')->move('storage/', $request->file('foto')->getClientOriginalName());
            $user->foto = $request->file('foto')->getClientOriginalName();
            
        }$user->save();
        
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

    public function upprof(Request $request, $id)
    {
        $data = auth()->user();
        // $this->validate($request, [
        //     'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        //     'keterangan' => 'required',
        // ]);
        // dd($request);
        $isi = [
            'username' => $request-> username,
            'email' => $request-> email,
            'namalengkap' => $request-> namalengkap,
            'notlp' => $request-> notlp,
            'medsos' => $request-> medsos,
            'tgllahir' => $request-> tgllahir,
            'askot' => $request-> askot,
            'foto' => public_path($request -> foto),
        ];
        if ($request->hasFile('foto')){
            // dd($isi);
                unlink(public_path('storage' . $isi->foto));
                $file = $request->file('foto');
                $filename = has_file( $file->path()) . '.' . $file->getClientOriginalExtension();
                $file->move('storage', $filename);
                $isi->foto = $filename;
                $isi->save();
        
            // Storage::delete('foto');
            // $isi['foto'] = $request->file('foto')->store('foto','public');
        }
        
        $data->update($isi);
        // $data->save();

        return redirect('prf')->with('sukses','Data Berhasil di Perbarui');
    }
}