@extends('admin.index')

@section('konten')
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <div class="container">
        <div class="page-title">
            <div class="row">
                <div class="group">
                    <h6 class="mt-2 float-start">Cetak tabel dapat melalui link ini !!!</h6>
                    <a type="button" href="/admin/cetak" class="btn btn-outline-primary ms-1">Cetak</a>
                </div>
            </div>
        </div>
    </div>
  </div>
</nav>
    <div class="container">
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h2 class="mt-3">Data Pesanan Masuk</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right d-flex justify-content-start ">
                        <ol class="breadcrumb text-right me-3">
                            <li class="active"><a href="/admin/home" class="text-decoration-none">Pesanan Masuk</a></li>
                        </ol>
                        <ol class="breadcrumb text-right me-3">
                            <li class="active"><a href="/admin/disetujui" class="text-decoration-none">Pesanan Disetujui</a></li>
                        </ol>
                        <ol class="breadcrumb text-right me-3">
                            <li class="active"><a href="/admin/dibatalkan" class="text-decoration-none">Pesanan Ditolak</a></li>
                        </ol>
                         <ol class="breadcrumb text-right">
                            <li class="active"><a href="/admin/tambahpesanan" class="text-decoration text-warning">+ Tambah Pesanan</a></li>
                        </ol>
                </div>
                
            </div>
        </div>

        <div class="content mt-3">

        
             <div class="alert alert-warning" role="alert">
            A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
 
    
            <table class="table table-bordered bg-light border-primary">
                <thead>
                    <th width=5%>No</th>
                    <th>Nama Peminjam</th>
                    <th>Sopir Bertugas</th>
                    <th>Jenis Mobil</th>
                    <th>Tanggal</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                    <th>Aksi</th>
                    <th>Konfirmasi</th>
                </thead>
                <tbody>
                    <?php $s=1; ?>
                    @foreach ($all as $item)
                     <tr> 
                        <td><?=$s?>.</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->nama_sopir }}</td>
                        <td>{{ $item->nama_kendaraan }}</td>
                        <td>{{ $item->tanggal_peminjaman }}</td>
                        <td>{{ $item->tanggal_kembali }}</td>
                        <td>{{ $item->status }}</td>
                        <td><a href="/admin/seedetails/{{ $item->id_peminjaman }}"> Edit Details</a></td>
                        <td>
                            <form class="justify-content-center text-center" method="post" action="/admin/validasi">
                            @csrf
                            <input type="hidden" name="id_pinjam" value="{{ $item->id_peminjaman }}">
                            <button type="input" class="btn btn-outline-success" name="valid" value="Disetujui" >Verivikasi</button>
                            </form>

                            <form class="text-center" method="post" action="/admin/tolak">
                            @csrf
                            <input type="hidden" name="stok" value="{{ $item->stok }}">
                            <input type="hidden" name="kendaraan" value="{{ $item->id_kendaraan }}">
                            <input type="hidden" name="id_pinjam" value="{{ $item->id_peminjaman }}">
                            <button type="input" class="btn btn-outline-danger mt-1"  name="novalid" value="Dibatalkan">Tolak</button>
                            </form>
                        </td>
                        
                    </tr> 
                    <?php $s++; ?>
                    @endforeach
                </tbody>
            </table>

        </div> 
    </div>
    </div>

@endsection