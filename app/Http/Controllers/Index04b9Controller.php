<?php

namespace App\Http\Controllers;
use App\Models\Cerpen;
use App\Models\Postingan;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Notif;
use App\Models\Komentar;
use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Index04b9Controller extends Controller
{
    public function user_login(){
        $postingan = postingan::orderBy('baca', 'desc')->where('status', 'setuju')->get();
        return view('user_login.index04b9',['postingan' => $postingan]);
        }
    public function cerpen(){
        $postingan = postingan::where('kategori_id', 1)->where('status', 'setuju')->paginate(9);
        return view('user_login.cerpen',['postingan'=>$postingan]);
    }

    public function artikel(){
        $artikel = postingan::where('kategori_id', 2)->where('status', 'setuju')->paginate(9);
        return view('user_login.artikel',['artikel'=>$artikel]);
    }

    public function puisi(){

        $puisi = postingan::where('kategori_id', 4)->where('status', 'setuju')->paginate(9);
        return view('user_login.puisi',['puisi'=>$puisi]);
    }
   
    public function diary(){
        $diary = postingan::where('kategori_id', 6)->where('status', 'setuju')->paginate(9);
        return view('user_login.diary',['diary'=>$diary]);
    }
   
    public function photography(){

        $photography = postingan::where('kategori_id', 5)->where('status', 'setuju')->paginate(9);
       return view('user_login.photography',['photography' => $photography]);
    }
   
    public function ilustrasi(){
        $ilustrasi = postingan::where('kategori_id', 8 )->where('status', 'setuju')->paginate(9);     
        return view('user_login.ilustrasi',['ilustrasi'=>$ilustrasi]);    
    }
   
    public function makalah(){
        $makalah = postingan::where('kategori_id', 4)->where('status', 'setuju')->paginate(9);
        return view('user_login.makalah',['makalah'=>$makalah]);
    }

    public function searchmakalah(Request $request)
    {
        $keyword = $request->search;
        $makalah = postingan ::where('judul', 'like', "%" . $keyword . "%")->paginate(5);
        return view('user_login.makalah', compact('makalah'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    public function searchkartikel(Request $request)
    {
        $keyword = $request->search;
        $artikel = postingan ::where('judul', 'like', "%" . $keyword . "%")->paginate(5);
        return view('user_login.artikel', compact('artikel'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function searchpuisi(Request $request)
    {
        $keyword = $request->search;
        $puisi = postingan ::where('judul', 'like', "%" . $keyword . "%")->paginate(5);
        return view('user_login.puisi', compact('puisi'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function searchdiary(Request $request)
    {
        $keyword = $request->search;
        $diary = postingan ::where('judul', 'like', "%" . $keyword . "%")->paginate(5);
        return view('user_login.diary', compact('diary'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function searchfotografi(Request $request)
    {
        $keyword = $request->search;
        $photography = postingan ::where('judul', 'like', "%" . $keyword . "%")->paginate(5);
        return view('user_login.photography', compact('photography'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function searchilustrasi(Request $request)
    {
        $keyword = $request->search;
        $ilustrasi = postingan ::where('judul', 'like', "%" . $keyword . "%")->paginate(5);
        return view('user_login.ilustrasi', compact('ilustrasi'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function searchskripsi(Request $request)
    {
            $keyword = $request->search;
            $kategori = postingan ::where('judul', 'like', "%" . $keyword . "%")->paginate(5);
            return view('user_login.skripsi', compact('kategori'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
     public function searchpantun(Request $request)
    {
            $keyword = $request->search;
            $kategori = postingan ::where('judul', 'like', "%" . $keyword . "%")->paginate(5);
            return view('user_login.pantun', compact('kategori'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
     public function searchessai(Request $request)
        {
            $keyword = $request->search;
            $kategori = postingan ::where('judul', 'like', "%" . $keyword . "%")->paginate(5);
            return view('user_login.essai', compact('kategori'))->with('i', (request()->input('page', 1) - 1) * 5);
        }
              public function searchilmiah(Request $request)
        {
            $keyword = $request->search;
            $kategori = postingan ::where('judul', 'like', "%" . $keyword . "%")->paginate(5);
            return view('user_login.ilmiah', compact('kategori'))->with('i', (request()->input('page', 1) - 1) * 5);
        }

    
        public function skripsi(){
              $kategori = postingan::where('kategori_id', 9 )->where('status', 'setuju')->paginate(9);
            return view('user_login.skripsi',['kategori'=>$kategori]);
            }
   
            public function pantun(){
            $kategori = postingan::where('kategori_id', 3 )->where('status', 'setuju')->paginate(9);
                return view('user_login.pantun',['kategori'=>$kategori]);
            }
                   
                       public function essai(){
                        $kategori = postingan::where('kategori_id', 10)->where('status', 'setuju')->paginate(9);
                       return view('user_login.essai',['kategori'=>$kategori]);
                       }
                   
                       public function ilmiah(){
                    $kategori = postingan::where('kategori_id', 11)->where('status', 'setuju')->paginate(9);
                       return view('user_login.ilmiah',['kategori'=>$kategori]);
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
        $setuju = postingan::where('status', 'setuju')->count();
        $pandding = postingan::where('status', 'pandding')->count();
        $pendingPosts = postingan::where('status', 'pandding')->get();
        $approvedPosts = postingan::where('status', 'setuju')->get();
        $postingan = postingan::where('user_id', Auth()->user()->id)->get();
    
     
    return view('user_login.user-page',compact('user','pendingPosts', 'approvedPosts','setuju','pandding'), ['postingan'=>$postingan,'setuju'=>$setuju,'pandding'=>$pandding]);
    }
   
    public function artikelsukses($id){
        $artikel = postingan::find($id); 
        $artikel-> baca++;
        $artikel->save(); 
        $komen = komentar::where('postingan_id',$artikel->id)->orderBy('created_at', 'desc')->limit(3)->get(); 
        // $postingan = postingan::where('id', $data )->get();
        return view('user_login.artikel-sukses', ['artikel'=>$artikel, 'komen'=>$komen]);
    }
    public function arpaginate($id){
        $pg = postingan::find($id);
        $text = postingan::where('isi', $pg->id);
        $words = str_word_count($text, 20);
        $perPage = 3;
        $paginatedWords = \Illuminate\Pagination\Paginator::make($text, $words, count($words), $perPage);
    }
   
    public function cerpenbaik($id){
        $postingan = postingan::find($id);
        $postingan-> baca++;
        $postingan->save();
        $komen = komentar::where('postingan_id',$postingan->id)->orderBy('created_at', 'desc')->limit(3)->get(); 
        // $postingan = postingan::where('id', $data )->get();
    return view('user_login.cerpen-baik', ['postingan'=>$postingan, 'komen'=>$komen]);
    }

    // public function komentar(Request $request, $id){
    //     $data = postingan::all()->count();
    //     $komentar = komentar::create([
    //         'user_id' => Auth()->user()->id,
    //         'komentar' => $request->komentar,
    //         'postingan_id' => $id,
    //     ]);

    //     return redirect()->back();
    // }    
   
    public function puisipertiwi($id){
        $puisi = postingan::find($id);
        $komen = komentar::where('postingan_id',$puisi->id)->orderBy('created_at', 'desc')->limit(3)->get(); 
        return view('user_login.puisi-pertiwi', ['puisi'=>$puisi, 'komen'=>$komen]);
    }
   
    public function diary1($id){
        $diary = postingan::find($id);
        $komen = komentar::where('postingan_id',$diary->id)->orderBy('created_at', 'desc')->limit(3)->get(); 
        return view('user_login.diary-1', ['diary'=>$diary, 'komen'=>$komen]);
    }
   
    public function fotografi1($id){
        $photography = postingan::find($id);
        $komen = komentar::where('postingan_id',$photography->id)->orderBy('created_at', 'desc')->limit(3)->get(); 
        return view('user_login.fotografi-1', ['photography'=>$photography, 'komen'=>$komen]);
    }
   
    public function ilustrasi1($id){
        $ilustrasi = postingan::find($id);
        $komen = komentar::where('postingan_id',$ilustrasi->id)->orderBy('created_at', 'desc')->limit(3)->get(); 
        return view('user_login.ilustrasi-1', ['ilustrasi'=>$ilustrasi, 'komen'=>$komen]);
    }
   
    public function makalahdetail($id){
        $kategori = postingan::find($id);  
        $komen = komentar::where('postingan_id',$kategori->id)->orderBy('created_at', 'desc')->limit(3)->get(); 
    return view('user_login.makalah-detail', ['kategori'=>$kategori, 'komen'=>$komen]);
    }
   
    public function skripsidetail($id){
        $kategori = postingan::find($id);  
        $komen = komentar::where('postingan_id',$kategori->id)->orderBy('created_at', 'desc')->limit(3)->get(); 
    return view('user_login.ilmiah-detail', ['k ategori'=>$kategori, 'komen'=>$komen]);
    }
   
    public function ilmiahdetail($id){
        $kategori = postingan::find($id);  
        // $postingan = postingan::where('id', $data )->get();
    return view('user_login.ilmiah-detail', compact('kategori'));
    } 
   
    public function pantun1($id){
        $pantun = postingan::find($id);
        $komen = komentar::where('postingan_id',$pantun->id)->orderBy('created_at', 'desc')->limit(3)->get(); 
        return view('user_login.pantun-1', ['pantun'=>$pantun, 'komen'=>$komen]);
    } 
    public function essai1($id){
        $kategori = postingan::find($id);  
        // $postingan = postingan::where('id', $data )->get();
    return view('user_login.essai-1', compact('kategori'));
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

    public function komentar (Request $request, $id)
    {
        $data = postingan::all();
        $komentar = komentar::create([
            'user_id' => Auth::user()->id,
            'komentar' => $request->komentar,
            'postingan_id' => $id,
        ]);

        return redirect()->back();
    }
    public function status()
    {
        $pendingPosts = postingan::where('status', 'pending')->get();
        $approvedPosts = postingan::where('status', 'approsetujuved')->get();
    
        return view('user_login.user-page', compact('pendingPosts', 'approvedPosts'));
    }   

    public function ppp(){
        $artikel = postingan::where('status', 'setuju')->get();
        return view('user_login.artikel',['artikel'=>$artikel]);
    }

    public function src(Request $request)
    {
        $query = $request->input('query');
        $kategori_id = $request->input('kategori_id');
    
        
    
        if (!empty($kategori_id)) {
            $posts = postingan::where('judul', 'like', '%'.$query.'%')->where('status', 'setuju')->where('kategori_id', $kategori_id)->get();
        }else{
            $posts = postingan::where('judul', 'like', '%'.$query.'%')->where('status', 'setuju')->get();
        }
    
    
    
        return view('user_login.hasilsearch', compact('posts'));
    }
}
?>