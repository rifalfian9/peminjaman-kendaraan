<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Connection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class adminwebController extends Controller
{
    public function cetak(){
        $all = DB::table('peminjaman')
        ->join('sopirs','sopirs.id_sopir', '=', 'peminjaman.id_sopir')
        ->join('users','users.id_user', '=', 'peminjaman.id_user')
        ->join('kendaraans','kendaraans.id_kendaraan', '=', 'peminjaman.id_kendaraan')
        ->select('*')->orderBy('tanggal_peminjaman' , 'desc')->get();
       return view ('admin.include.cetak', compact("all")); 
    }

    public function adminhome() {
        $all = DB::table('peminjaman')
        ->join('sopirs','sopirs.id_sopir', '=', 'peminjaman.id_sopir')
        ->join('users','users.id_user', '=', 'peminjaman.id_user')
        ->join('kendaraans','kendaraans.id_kendaraan', '=', 'peminjaman.id_kendaraan')
        ->select('*')->where('status', '=', 'Diproses')->orderBy('tanggal_peminjaman' , 'desc')->get();
        return view ('admin.include.home', compact("all"));
    }
     public function disetujui() {
        $all = DB::table('peminjaman')
        ->join('sopirs','sopirs.id_sopir', '=', 'peminjaman.id_sopir')
        ->join('users','users.id_user', '=', 'peminjaman.id_user')
        ->join('kendaraans','kendaraans.id_kendaraan', '=', 'peminjaman.id_kendaraan')
        ->select('*')->where('status', '=', 'Disetujui')->orderBy('tanggal_peminjaman' , 'desc')->get();
        return view ('admin.include.home', compact("all"));
    }
     public function dibatalkan() {
        $all = DB::table('peminjaman')
        ->join('sopirs','sopirs.id_sopir', '=', 'peminjaman.id_sopir')
        ->join('users','users.id_user', '=', 'peminjaman.id_user')
        ->join('kendaraans','kendaraans.id_kendaraan', '=', 'peminjaman.id_kendaraan')
        ->select('*')->where('status', '=', 'Dibatalkan')->orderBy('tanggal_peminjaman' , 'desc')->get();
        return view ('admin.include.home', compact("all"));
    }
    public function login() {
        return view ('admin.include.login');
    }
    public function datauser() {
        $p = DB::select('select * from users');
        return view ('admin.include.datauser', compact("p" ));
    }
    public function datakendaraan() {
        $t = DB::select('select * from kendaraans');
        return view ('admin.include.datakendaraan', compact("t" ));
    }
    public function datasopir() {
            $q = DB::select('select * from sopirs');
            return view ('admin.include.datasopir', compact("q" ));
    }
    public function validasi(Request $request){
        DB::table('peminjaman')->where('id_peminjaman', $request->id_pinjam)
        ->update([
            'status' => $request->valid
        ]);
        return redirect('/admin/home');
    }
    
    public function tolak(Request $request){
        DB::table('peminjaman')->where('id_peminjaman', $request->id_pinjam)
        ->update([
            'status' => $request->novalid
        ]);
        $stok = $request->stok;
        $updatestok = 1 + $stok;
        DB::table('kendaraans')->where('id_kendaraan', $request->kendaraan)
        ->update([
             'stok' => $updatestok
        ]);
        return redirect('/admin/home');
    }

    public function tambahpesanan(){
        $d =  DB::select('select * from users');
        $e =  DB::select('select * from kendaraans');
        $f =  DB::select('select * from sopirs');
        return view ('admin.include.tambahpesanan', compact(["e" , "f", "d"]));
    }

    public function buatpesanan(Request $request) {
        DB::table('peminjaman')->insert([
            'tanggal_peminjaman' => $request->tanggalpinjam,
            'tanggal_kembali' => $request->tanggalkembali,
            'status' => $request->status,
            'id_kendaraan' => $request->kendaraan,
            'id_sopir' => $request->sopir,
            'id_user' => $request->peminjam
        ]);
        $stok = $request->stok;
        $updatestok = $stok - 1;
        DB::table('kendaraans')->where('id_kendaraan', $request->kendaraan)
        ->update([
             'stok' => $updatestok
        ]);
        return redirect('/admin/home');
    }

    public function seedetails($id_peminjaman){
        $d =  DB::select('select * from users');
        $e =  DB::select('select * from kendaraans');
        $f =  DB::select('select * from sopirs');
        $x = DB::table('peminjaman')
        ->join('sopirs','sopirs.id_sopir', '=', 'peminjaman.id_sopir')
        ->join('users','users.id_user', '=', 'peminjaman.id_user')
        ->join('kendaraans','kendaraans.id_kendaraan', '=', 'peminjaman.id_kendaraan')
        ->select('*')->where('id_peminjaman', $id_peminjaman)->get();
        return view ('admin.include.editpesanan' , compact(["x","e" , "f", "d"]));
    }
    public function editpesanan(Request $request, $id_peminjaman){
        DB::table('peminjaman')->where('id_peminjaman' , $id_peminjaman)->update([
            'tanggal_peminjaman' => $request->tanggalpinjam,
            'tanggal_kembali' => $request->tanggalkembali,
            'status' => $request->status,
            'id_kendaraan' => $request->kendaraan,
            'id_sopir' => $request->sopir,
            'id_user' => $request->peminjam
        ]);
         return redirect('/admin/home');
    }
    public function hapussopir( Request $request){
        DB::table('sopirs')->where('id_sopir', $request->hapussopir)->delete();
        return redirect ('/admin/datasopir');
    }
    public function tambahsopir(){
        return view ('admin.include.tambahsopir');
    }
    public function settambahsopir( Request $request){
        DB::table('sopirs')->insert([
            'nama_sopir' => $request->sopir,
            'telepon_sopir' => $request->teleponsopir
        ]);
        return redirect ('/admin/datasopir');
    }
    public function hapuskendaraan( Request $request){
        DB::table('kendaraans')->where('id_kendaraan', $request->hapuskendaraan)->delete();
        return redirect ('/admin/datakendaraan');
    }
    public function tambahkendaraan(){
        return view ('admin.include.tambahkendaraan');
    }
    public function settambahkendaraan(Request $request){
        DB::table('kendaraans')->insert([
            'nama_kendaraan' => $request->kendaraan,
            'terakhir_servis' => $request->servisterakhir,
            'jadwal_servis' => $request->servislanjutan,
            'stok' => $request->stok,
            'foto' => 'mobil.jpg'
        ]);
        return redirect ('/admin/datakendaraan');
    }
    public function editkendaraan($id_kendaraan){
        $dv = DB::table('kendaraans')->where('id_kendaraan', $id_kendaraan)->select('*')->get();
        return view('admin.include.editdatakendaraan' , compact("dv"));
      }
    public function seteditkendaraan(Request $request , $id_kendaraan){
       DB::table('kendaraans')->where('id_kendaraan' , $id_kendaraan )->update([
            'nama_kendaraan' => $request->kendaraan,
            'terakhir_servis' => $request->servisterakhir,
            'jadwal_servis' => $request->servislanjutan,
            'stok' => $request->stok,
            'foto' => 'mobil.jpg'
        ]);
        return redirect ('/admin/datakendaraan'); 
    }
   
   
}

