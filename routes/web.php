<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Index04b9Controller;
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
use App\Http\Controllers\PostingController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\AdminController;
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
Route::get('/sing-page', [loginController::class, 'lihat_login'])->name('login');
Route::post('/user_login', [loginController::class, 'login'])->name('user_login');
Route::get('/user_register', [loginController::class, 'lihat_register'])->name('user_register');
Route::post('/create', [loginController::class,'register'])->name('create');
//end login





Route::post('/kirim_kontak', [KontakController::class, 'pesan_user'])->name('kontak');
Route::get('/hapus_kontak/{id}', [Pesan_dari_userController::class, 'hapus_kontak'])->name('hapus_kontak');
Route::get('/kontak', function () {
    return view('user_login.kontak');
});


Route::middleware(['auth'])->group(function () {
    


//admin
Route::group(['middleware'=> ['auth','hakakses:Admin']], function() {
    Route::get('/admin', [AdminController::class, 'indexadmin'])->name('admin');
    Route::get('/pesan-dari-user', [AdminController::class, 'pesan'])->name('pesan-user');
    Route::get('/data-user', [AdminController::class, 'data_user'])->name('data-user');
    Route::get('/cerpen_admin', [AdminController::class, 'cerpen_admin'])->name('cerpen_admin');
    Route::get('/artikel_admin', [AdminController::class, 'artikel_admin'])->name('artikel_admin');
    Route::get('/diary_admin', [AdminController::class, 'diary_admin'])->name('diary_admin');
    Route::get('/esai_admin', [AdminController::class, 'esai_admin'])->name('esai_admin');
    Route::get('/fotografi_admin', [AdminController::class, 'fotografi_admin'])->name('fotografi_admin');
    Route::get('/ilmiah_admin', [AdminController::class, 'ilmiah_admin'])->name('ilmiah_admin');
    Route::get('/pantun_admin', [AdminController::class, 'pantun_admin'])->name('pantun_admin');
    Route::get('/ilustrasi_admin', [AdminController::class, 'ilustrasi_admin'])->name('ilustrasi_admin');
    Route::get('/makalah_admin', [AdminController::class, 'makalah_admin'])->name('makalah_admin');
    Route::get('/skripsi_admin', [AdminController::class, 'skripsi_admin'])->name('skripsi_admin');
    Route::get('/puisi_admin', [AdminController::class, 'puisi_admin'])->name('puisi_admin');
    Route::post('/uprove/{id}', [AdminController::class, 'uprove'])->name('uprove');
    Route::post('/tolak/{id}', [AdminController::class, 'tolak'])->name('tolak');
    Route::get('/akun_blokir', [AdminController::class, 'akun_blokir'])->name('akun_blokir');
    Route::get('/data-blokir', [AdminController::class, 'data-blokir'])->name('data-blokir');
    Route::post('/hapus/{id}', [AdminController::class, 'hapus'])->name('hapus');
    Route::get('/logout', [loginController::class, 'logout']);
    Route::get('/delete/{id}', [AdminController::class, 'delete'])->name('delete');
});

//user_login
Route::group(['middleware'=> ['auth', 'hakakses:user']], function(){
    // Route::get('/cerpen', [CerpenController::class, 'cerpen'])->name('cerpen');
    Route::post('/posting', [PostingController::class, 'simpan_postingan'])->name('posting');
    Route::get('/makalah', [MakalahController::class, 'makalah'])->name('makalah');
    Route::get('/puisi-pertiwi', [PuisiPertiwiController::class, 'puisipertiwi'])->name('puisi-pertiwi');
    Route::get('/tambah', function () {
    return view('user_login.create.create');
    });
    Route::get('/user-login', [Index04b9Controller::class, 'user_login']);
    Route::get('/pesan', [Index04b9Controller::class, 'pesan'])->name('pesan');
    // Route::get('/create_cerpen', function () {
    //     return view('user_login.create.create_cerpen');
    // Route::get('/create_cerpen', [CerpenController::class, 'create_cerpen'])->name('create-cerpen');
    Route::post('/simpan_cerpen', [PostingController::class, 'simpan_postingan']);
    Route::get('/logout', [loginController::class, 'logout']);
    //update
    Route::put('/upprof', [loginController::class, 'upprof'])->name('upprof');
        
    Route::get('/cerpen', [Index04b9Controller::class, 'cerpen'])-> name('cerpen');
    Route::get('/artikel', [Index04b9Controller::class, 'artikel'])-> name('artikel');
    Route::get('/puisi', [Index04b9Controller::class, 'puisi'])-> name('puisi');
    Route::get('/diary', [Index04b9Controller::class, 'diary'])-> name('diary');
    Route::get('/photography', [Index04b9Controller::class, 'photography'])-> name('photography');
    Route::get('/ilustrasi', [Index04b9Controller::class, 'ilustrasi'])-> name('ilustrasi');
    Route::get('/makalah', [Index04b9Controller::class, 'makalah'])-> name('makalah');
    Route::get('/skripsi', [Index04b9Controller::class, 'skripsi'])-> name('skripsi');
    Route::get('/pantun', [Index04b9Controller::class, 'pantun'])-> name('pantun');
    Route::get('/essai', [Index04b9Controller::class, 'essai'])-> name('essai');
    Route::get('/ilmiah', [Index04b9Controller::class, 'ilmiah'])-> name('ilmiah');
    Route::get('/semua', [Index04b9Controller::class, 'semua'])-> name('semua');
    Route::get('/contact', [Index04b9Controller::class, 'contact'])-> name('contact');
    Route::get('/kirim_kategori/{id}', [Index04b9Controller::class, 'kirim_kategori'])-> name('kirim_kategori');
    Route::get('/user-page', [Index04b9Controller::class, 'userpage'])-> name('user-page');
    Route::get('/prf', [Index04b9Controller::class, 'prf'])-> name('prf');
    //kategori_user_login
    Route::get('/pilihkategori', [Index04b9Controller::class, 'pilihkategori'])->name('pilihkategori');

    Route::get('/artikel-sukses/{id}', [Index04b9Controller::class, 'artikelsukses'])-> name('srtikel-sukses');

    Route::get('/src', [Index04b9Controller::class, 'src'])-> name('src');
    Route::get('/cerpen-baik/{id}', [Index04b9Controller::class, 'cerpenbaik'])-> name('cerpen-baik');
    Route::get('/puisi-pertiwi/{id}', [Index04b9Controller::class, 'puisipertiwi'])-> name('puisi-pertiwi');
    Route::get('/diary-1/{id}', [Index04b9Controller::class, 'diary1'])-> name('diary-1');
    Route::get('/fotografi-1/{id}', [Index04b9Controller::class, 'fotografi1'])-> name('fotografi-1');
    Route::get('/ilustrasi-1/{id}', [Index04b9Controller::class, 'ilustrasi1'])-> name('ilustrasi-1');
    Route::get('/makalah-detail/{id}', [Index04b9Controller::class, 'makalahdetail'])-> name('makalah-detail');
    Route::get('/skripsi-detail/{id}', [Index04b9Controller::class, 'skripsidetail'])-> name('skripsi-detail');
    Route::get('/ilmiah-detail/{id}', [Index04b9Controller::class, 'ilmiahdetail'])-> name('ilmiah-detail');
    Route::get('/pantun-1/{id}', [Index04b9Controller::class, 'pantun1'])-> name('pantun-1');
    Route::get('/essai-1/{id}', [Index04b9Controller::class, 'essai1'])-> name('essai-1');
    Route::post('/komentar/{id}', [Index04b9Controller::class, 'komentar'])-> name('komentar');
    Route::get('/makalah-pkn{id}', [Index04b9Controller::class, 'makalahpkn'])-> name('makalah-pkn');
    Route::get('/search', [PostingController::class, 'search'])->name('search');
    Route::get('/makalahdetail/{id}', [Index04b9Controller::class, 'makalahdetail'])-> name('makalahdetail');
    Route::get('/searchmakalah', [Index04b9Controller::class, 'searchmakalah'])->name('searchmakalah');
    Route::get('/searchdiary', [Index04b9Controller::class, 'searchdiary'])->name('searchdiary');
    Route::get('/searchpuisi', [Index04b9Controller::class, 'searchpuisi'])->name('searchpuisi');
    Route::get('/searchfotografi', [Index04b9Controller::class, 'searchfotografi'])->name('searchfotografi');
    Route::get('/searchilustrasi', [Index04b9Controller::class, 'searchilustrasi'])->name('searchilustrasi');
    Route::get('/arpaginate(id)', [Index04b9Controller::class, 'arpaginate'])->name('arpaginate');
    Route::get('/searchskripsi', [Index04b9Controller::class, 'searchskripsi'])->name('searchskripsi');
    Route::get('/searchilmiah', [Index04b9Controller::class, 'searchilmiah'])->name('searchilmiah');
    Route::get('/searchessai', [Index04b9Controller::class, 'searchessai'])->name('searchessai');
    Route::get('/searchpuisi', [Index04b9Controller::class, 'searchpuisi'])->name('searchpuisi');    

    Route::get('/searchfotografi', [Index04b9Controller::class, 'searchfotografi'])->name('searchfotografi');    
});
});


?>