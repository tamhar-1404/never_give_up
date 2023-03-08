<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\CerpenController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\IlustrasiController;
use App\Http\Controllers\PhotographyController;
use App\Http\Controllers\PuisiController;
use App\Http\Controllers\MakalahController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ArtikelSuksesController;
use App\Http\Controllers\CerpenBaikController;
use App\Http\Controllers\Diary1Controller;
use App\Http\Controllers\Fotografi1Controller;
use App\Http\Controllers\Ilustrasi1Controller;
use App\Http\Controllers\PuisiPertiwiController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\adminController;
use App\Http\Middleware\admin;
use App\Http\Middleware\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user.guest.index04b9');
});
//admin











Route::get('/', [loginController::class, 'index']);

Route::get('/artikel_guest', function () {
    return view('user_guest.artikel');
});

//login
Route::get('/sing-page', [loginController::class, 'lihat_login'])->name('sing-page');
Route::post('/user_login', [loginController::class, 'login'])->name('user_login');
Route::get('/user_register', [loginController::class, 'lihat_register'])->name('user_register');
Route::post('/create', [loginController::class,'register'])->name('create');
//end login




Route::post('/kirim_kontak', [KontakController::class, 'pesan_user'])->name('kontak');
Route::get('/hapus_kontak/{id}', [Pesan_dari_userController::class, 'hapus_kontak'])->name('hapus_kontak');
Route::get('/kontak', function () {
    return view('user_guest.kontak');
});


//admin
Route::group(['middleware'=> ['auth','hakakses:Admin']], function() {
    Route::get('/admin', [AdminController::class, 'indexadmin'])->name('admin');
    Route::get('/pesan-dari-user', [AdminController::class, 'pesan'])->name('pesan-user');
    Route::get('/data-user', [AdminController::class, 'data_user'])->name('data-user');
    Route::get('/cerpen_admin', [AdminController::class, 'cerpen_admin'])->name('cerpen_admin');
    Route::post('/uprove/{id}', [CerpenController::class, 'uprove'])->name('uprove');
});

//user_login
Route::group(['middleware'=> ['auth', 'hakakses:user']], function(){
    Route::get('/cerpen', [CerpenController::class, 'cerpen'])->name('cerpen');
    Route::get('/makalah', [MakalahController::class, 'makalah'])->name('makalah');
Route::get('/puisi-pertiwi', [PuisiPertiwiController::class, 'puisipertiwi'])->name('puisi-pertiwi');
Route::get('/user-login', function () {
    return view('user_login.index04b9');
});
Route::get('/create_cerpen', [CerpenController::class, 'create_cerpen']);
Route::post('/simpan_cerpen', [CerpenController::class, 'simpan_cerpen']);

})
?>