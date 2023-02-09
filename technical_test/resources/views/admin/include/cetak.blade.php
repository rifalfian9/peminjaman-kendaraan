@extends('admin.index')

@section('konten')
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <div class="container">
        <div class="page-title">
            <div class="row">
                <div class="group">
                    <h6 class="mt-2 float-start">Cetak tabel dapat melalui link ini !!!</h6>
                    <a type="button" id="clase"  target="_blank"  class="btn btn-outline-primary ms-1">Cetak</a>
                    <a type="button" href="/admin/home" class="btn btn-primary ms-1">kembali</a>
                </div>
            </div>
        </div>
    </div>
  </div>
</nav>
   <div class="container mt-5">
     <table id="table-form" class="table table-bordered bg-light border-primary">
                <thead>
                    <th width=5%>No</th>
                    <th>Nama Peminjam</th>
                    <th>Sopir Bertugas</th>
                    <th>Jenis Mobil</th>
                    <th>Tanggal</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
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
                        
                    </tr> 
                    <?php $s++; ?>
                    @endforeach
                </tbody>
            </table>
   </div>

@endsection