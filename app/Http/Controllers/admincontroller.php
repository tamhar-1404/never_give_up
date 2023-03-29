<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ConsoleTVs\Charts\Facades\Charts;
use App\Models\User;
use App\Models\Kontak;
use App\Models\Cerpen;
use App\Models\Postingan;
use App\Models\Kategori;
use App\Models\Notif;
use Illuminate\Pagination\Paginator;

class AdminController extends Controller
{
    public function indexadmin()
    {
             
        $user = User::where('role', 'user')->count();
        $semua = postingan::count();
        $setuju = postingan::where('status', 'setuju')->count();
        $postingan = postingan::where('status', 'pandding')->count();
        $posting =postingan::where('status', 'pandding') ->paginate(12);
        $data = DB::table('postingans')->get();
        $cerpen = postingan::where('kategori_id', '1')->count();
        $artikel = postingan::where('kategori_id', '2')->count();
        $pantun = postingan::where('kategori_id', '3')->count();
        $puisi = postingan::where('kategori_id', '4')->count();
        $photografi = postingan::where('kategori_id', '5')->count();
        $diari = postingan::where('kategori_id', '6')->count();
        $makalah = postingan::where('kategori_id', '7')->count();
        $ilustrasi = postingan::where('kategori_id', '8')->count();
        $skripsi = postingan::where('kategori_id', '9')->count();
        $esai = postingan::where('kategori_id', '10')->count();
        $karya_ilmiah = postingan::where('kategori_id', '11')->count();
        $lainnya = postingan::where('kategori_id', '12')->count();
        $setuju = DB::table('postingans')->where('status', 'setuju')->count();
        $ditolak = DB::table('postingans')->where('status', 'tolak')->count();
        $pandding = DB::table('postingans')->where('status', 'pandding')->count();
        //chart
        $date = User::selectRaw('DATE(created_at) as date, COUNT(*) as count')
                ->groupBy('date')
                ->orderBy('date', 'ASC')
                ->get();  
        
                $tanggal = [];
                $count = [];
            
                foreach($date as $data){
                    array_push($tanggal, $data->date);
                    array_push($count, $data->count);
                }
            
                $isi = [
                    'tanggal' => $tanggal,
                    'count' => $count
                ];

       
    
        // menyiapkan data untuk ditampilkan pada chart
        $status = [
            ['name' => 'setuju', 'y' => $setuju],
            ['name' => 'ditolak', 'y' => $ditolak],
            ['name' => 'pandding', 'y' => $pandding],
        ];
            
        
        return view('admin.index', $isi, 
        ['user'=>$user,'semua'=>$semua,'setuju'=>$setuju,'postingan'=>$postingan, 'posting'=>$posting, 'data' => $data, 'status' => $status, 'setuju' => $setuju,
        'ditolak' => $ditolak, 'pandding' => $pandding,
         'cerpen' => $cerpen, 'artikel' => $artikel, 'pantun' => $pantun, 'puisi' => $puisi, 'photografi' => $photografi,'ilustrasi' => $ilustrasi,
          'diari' => $diari, 'makalah' => $makalah, 'skripsi' => $skripsi, 'esai' => $esai, 'karya_ilmiah' => $karya_ilmiah, 'lainnya' => $lainnya]);
       

    }
    public function data_user()
    {
        $user = user::where('role', 'user')->get();

         return view('admin.Data-user',['user'=>$user]);

    }

    public function data_blokir()
    {
        $user = user::where('role', 'diblokir')->get();

         return view('admin.akun_blokir',['user'=>$user]);

    }

    public function delete($id)
    {
        $user=user::find($id);
        $user->delete();
        return redirect()->back();
    }
    
    public function uprove($id)
    {
         
        
        $posting = postingan::find($id);
        if($posting->status == 'pandding'){
            $posting->status = 'setuju';   
            $posting->save();
        }
       
        return redirect('/admin');
    
   
    }

    public function tolak( Request $request, $id)
    {
         
       
        $posting = postingan::find($id);
        $data= notif::create([
            'user_id' => $request -> id_user,
            'postingan_id' => $request -> id_postingan,
            'isi' => $request -> pesan,
        ]);
        if($posting->status == 'pandding'){
            $posting->status = 'tolak';   
            $posting->save();
        }

       
        return redirect('/admin');
    
   
    }



    public function pesan()
    {
        $kontak = kontak::all();
        return view('admin/pesan-dari-user',['kontak'=>$kontak]);
        
    }

    public function pulihkan($id)
    {
         
        
        $user = user::find($id);
        if($user->role== 'diblokir'){
            $user->role= 'user';   
            $user->save();
        }
       
        return redirect()->back();
    
   
    }

    public function akun_blokir($id)
    {
         
        
        $user = user::find($id);
        if($user->role== 'user'){
            $user->role= 'diblokir';   
            $user->save();
        }
       
        return redirect()->back();
    
   
    }

    public function cerpen_admin()
    {
        $posting = postingan::where('kategori_id', '1')->get();
        
        return view('admin.cerpen',['postingan'=>$posting]);
    }

    public function artikel_admin()
    {
        $posting = postingan::where('kategori_id', '2')->get();
        
        return view('admin.artikel',['postingan'=>$posting]);
    }

    public function pantun_admin()
    {
        $posting = postingan::where('kategori_id', '3')->get();
        
        return view('admin.pantun',['postingan'=>$posting]);
    }

    public function skripsi_admin()
    {
        $posting = postingan::where('kategori_id', '4')->get();
        
        return view('admin.skripsi',['postingan'=>$posting]);
    }

    public function puisi_admin()
    {
        $posting = postingan::where('kategori_id', '5')->get();
        
        return view('admin.puisi',['postingan'=>$posting]);
    }

    public function diary_admin()
    {
        $posting = postingan::where('kategori_id', '6')->get();
        
        return view('admin.diary',['postingan'=>$posting]);
    }

    public function esai_admin()
    {
        $posting = postingan::where('kategori_id', '5')->get();
        
        return view('admin.esai',['postingan'=>$posting]);
    }

    public function fotografi_admin()
    {
        $posting = postingan::where('kategori_id', '5')->get();
        
        return view('admin.fotografi',['postingan'=>$posting]);
    }

    public function ilmiah_admin()
    {
        $posting = postingan::where('kategori_id', '6')->get();
        
        return view('admin.ilmiah',['postingan'=>$posting]);
    }

    public function ilustrasi_admin()
    {
        $posting = postingan::where('kategori_id', '6')->get();
        
        return view('admin.ilustrasi',['postingan'=>$posting]);
    }

    public function makalah_admin()
    {
        $posting = postingan::where('kategori_id', '5')->get();
        
        return view('admin.makalah',['postingan'=>$posting]);
    }
}
?>