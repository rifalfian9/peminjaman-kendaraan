<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class webuserController extends Controller

  /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
{
    public function beranda(){
       return view('include.beranda', ['post' => "beranda"]);
    }

    public function pinjam(){
      $t = DB::select('select * from kendaraans');
       return view('include.pinjam', compact("t" ));
    }

    public function login(){
       return view('include.login', ['post' => "belanja"]);
    }
    public function register(){
       return view('include.register', ['post' => "belanja"]);
    }
     public function pesanan(){
       $all = DB::table('peminjaman')
        ->join('sopirs','sopirs.id_sopir', '=', 'peminjaman.id_sopir')
        ->join('users','users.id_user', '=', 'peminjaman.id_user')
        ->join('kendaraans','kendaraans.id_kendaraan', '=', 'peminjaman.id_kendaraan')
        ->select('*')->orderBy('tanggal_peminjaman' , 'desc')->get();
        return view ('include.pesanan', compact("all"));
    }
    public function pengaturan(){
       return view('include.pengaturan', ['post' => "belanja"]);
    }
    
    public function grup(Request $request){
      $param = $request->parameter;
        $all = DB::table('peminjaman')
        ->join('sopirs','sopirs.id_sopir', '=', 'peminjaman.id_sopir')
        ->join('users','users.id_user', '=', 'peminjaman.id_user')
        ->join('kendaraans','kendaraans.id_kendaraan', '=', 'peminjaman.id_kendaraan')
        ->select('*')->where('status', $param )->orderBy('tanggal_peminjaman' , 'desc')->get();
        return view('include.pesanan', compact("all"));
        
    }
    public function search(Request $request){
      $search = $request->search;
      $t = DB::table('kendaraans')->select('*')->where('nama_kendaraan','LIKE', '%'.$search.'%')->get();
      return view('include.pinjam', compact("t" ));
    }
    public function pesan ($id_kendaraan) {
      $y = DB::table('kendaraans')
      ->select('*')->where('id_kendaraan' , $id_kendaraan)->get();
      return view ('include.pesan', compact("y"));
    }
    public function memesan(Request $request){
      $kendaraan = $request->id_kendaraan;
      $stok =  $request->stok ;
      $updatestok = $stok - 1; 
      DB::table('peminjaman')->insert([
         'tanggal_peminjaman' => $request->tanggalpesan,
         'tanggal_kembali' => $request->tanggalkembali,
         'status' => 'Diproses',
         'id_kendaraan' => $kendaraan,
         'id_sopir' => 1,
         'id_user' => 1
      ]);
      DB::table('kendaraans')->where('id_kendaraan' , $kendaraan)->update([
         'stok' => $updatestok
      ]);
      return redirect('/pesanan');
    }
    
    public function regist(Request $request){
      
      $validated = $request->validate([
        'nama' => 'required|unique:users|max:255',
        'divisi' => 'required',
        'posisi' => 'required',
        'alamat' => 'required',
        'email' => 'required|email:dns|unique:users|min:7',
        'password' =>'required|min:7'
    ]);
    $pass = Hash::make($validated["password"]);
    DB::table('users')->insert([
      'nama' => $validated["nama"],
      'posisi' => $validated["posisi"],
      'divisi' => $validated["divisi"],
      'alamat' => $validated["alamat"],
      'email' => $validated["email"],
      'password' => $pass
    ]);
    session()->flash('status', 'Berhasil');
    return redirect('/login');
    }

    public function logout(Request $request){
         Auth::logout();
         $request->session()->invalidate();
         $request->session()->regenerateToken();
         return redirect('/');
    }
}
